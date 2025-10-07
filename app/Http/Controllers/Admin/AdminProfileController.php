<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin;

class AdminProfileController extends Controller
{

    public function profile()
{
    $admin = auth()->guard('admin')->user(); // or however you fetch the admin

    return view('admin.profile', compact('admin'));
}



    /**
     * Show the profile edit form
     */
    public function edit()
    {
        /** @var Admin $admin */
        $admin = Auth::guard('admin')->user();
        return view('admin.profile.edit', compact('admin'));
    }

    /**
     * Update admin profile
     */
   /**
 * Update admin profile
 */
public function update(Request $request)
{
    /** @var Admin $admin */
    $admin = Auth::guard('admin')->user();

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:admins,email,' . $admin->id,
        'full_name' => 'nullable|string|max:255',
        'company_name' => 'nullable|string|max:255',
        'contact_phone' => 'nullable|string|max:20',
        'company_site' => 'nullable|url|max:255',
        'country' => 'nullable|string|max:100',
        'language' => 'nullable|string|max:10',
        'time_zone' => 'nullable|string|max:100',
        'currency' => 'nullable|string|max:10',
        'communication_preferences' => $admin->communication_preferences ?? [], // <-- Make sure this is an array
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'password' => 'nullable|confirmed|min:6',
        'current_password' => 'nullable|string',
    ]);

    // Handle image removal
    if ($request->has('remove_image')) {
        if ($admin->image && Storage::exists('public/' . $admin->image)) {
            Storage::delete('public/' . $admin->image);
        }
        $admin->image = null;
    }

    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($admin->image && Storage::exists('public/' . $admin->image)) {
            Storage::delete('public/' . $admin->image);
        }

        // Store new image
        $imagePath = $request->file('image')->store('admin-profiles', 'public');
        $validated['image'] = $imagePath;
    } else {
        // Remove image field if no new image uploaded and not removing image
        if (!$request->has('remove_image')) {
            unset($validated['image']);
        }
    }

    // Email change requires current password
    if ($request->filled('email') && $request->input('email') !== $admin->email) {
        if (!$request->filled('current_password')) {
            return back()->withErrors(['current_password' => 'You must provide your current password to change email.']);
        }

        if (!Hash::check($request->input('current_password'), $admin->password)) {
            return back()->withErrors(['current_password' => 'Your current password is incorrect.']);
        }
    }

    // Password update if provided
    if (!empty($validated['password'])) {
        $validated['password'] = Hash::make($validated['password']);
    } else {
        unset($validated['password']);
    }

   // Communication preferences
    $validated['communication_preferences'] = $request->input('communication_preferences', []);

    unset($validated['current_password']); // never save this

    $admin->fill($validated);
    $admin->save();

    // Return JSON if AJAX request
    if ($request->ajax()) {
        return response()->json([
            'success' => true,
            'message' => 'Profile updated successfully!',
            'admin' => [
                'full_name' => $admin->full_name,
                'name' => $admin->name,
                'company_name' => $admin->company_name,
                'contact_phone' => $admin->contact_phone,
                'company_site' => $admin->company_site,
                'country' => $admin->country,
                'allow_changes' => $admin->allow_changes,
                'image_url' => $admin->image_url,
                'communication_preferences' => $admin->communication_preferences ?? [],
            ]
        ]);
    }

    // For normal requests, redirect
    return redirect()->route('admin.profile.edit')->with('success', 'Profile updated successfully!');
}
}