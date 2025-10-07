<?php

namespace App\Http\Controllers;

use App\Models\MarketingDmar;
use Illuminate\Http\Request;

class MarketingDmarController extends Controller
{
    // Display all Marketing DMARs
    public function index()
    {
        $dmars = MarketingDmar::latest()->paginate(10);
        return view('marketing_dmars.index', compact('dmars'));
    }

    // Show form to create a new Marketing DMAR
    public function create()
    {
        return view('marketing_dmars.create');
    }

    // Store new Marketing DMAR
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'year' => 'nullable|digits:4',
            'date' => 'nullable|date',
            'month' => 'nullable|string|max:10',
            'activity' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:100',
            'service' => 'nullable|string|max:50',
            'products' => 'nullable|string|max:100',
            'tentative' => 'nullable|numeric',
            'comments' => 'nullable|string',
            'action_on_fail' => 'nullable|string|max:100',
            'current_status' => 'nullable|string|max:50',
            'client_type' => 'nullable|string|max:50',
            'sector' => 'nullable|string',
            'sub_sector' => 'nullable|string',
            'area' => 'nullable|string',
        ]);

        MarketingDmar::create($data);

        return redirect()->route('marketing-dmars.index')->with('success', 'Marketing DMAR created successfully.');
    }

    // Show single Marketing DMAR
    public function show(MarketingDmar $marketing_dmar)
    {
        return view('marketing_dmars.show', compact('marketing_dmar'));
    }

    // Show form to edit a Marketing DMAR
    public function edit(MarketingDmar $marketing_dmar)
    {
        return view('marketing_dmars.edit', compact('marketing_dmar'));
    }

    // Update a Marketing DMAR
    public function update(Request $request, MarketingDmar $marketing_dmar)
    {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'year' => 'nullable|digits:4',
            'date' => 'nullable|date',
            'month' => 'nullable|string|max:10',
            'activity' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:100',
            'service' => 'nullable|string|max:50',
            'products' => 'nullable|string|max:100',
            'tentative' => 'nullable|numeric',
            'comments' => 'nullable|string',
            'action_on_fail' => 'nullable|string|max:100',
            'current_status' => 'nullable|string|max:50',
            'client_type' => 'nullable|string|max:50',
            'sector' => 'nullable|string',
            'sub_sector' => 'nullable|string',
            'area' => 'nullable|string',
        ]);

        $marketing_dmar->update($data);

        return redirect()->route('marketing-dmars.index')->with('success', 'Marketing DMAR updated successfully.');
    }

    // Delete a Marketing DMAR
    public function destroy(MarketingDmar $marketing_dmar)
    {
        $marketing_dmar->delete();
        return redirect()->route('marketing-dmars.index')->with('success', 'Marketing DMAR deleted successfully.');
    }
}
