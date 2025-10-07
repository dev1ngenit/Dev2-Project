<?php

namespace App\Http\Controllers;

use App\Models\MarketingDmar;
use Illuminate\Http\Request;
use Exception;

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
        try {
            $data = $request->validate($this->validationRules());
            MarketingDmar::create($data);

            return redirect()->route('marketing-dmars.index')
                             ->with('success', 'Marketing DMAR created successfully.');
        } catch (Exception $e) {
            return redirect()->back()->withInput()
                             ->with('error', 'Failed to create Marketing DMAR: ' . $e->getMessage());
        }
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
        try {
            $data = $request->validate($this->validationRules());
            $marketing_dmar->update($data);

            return redirect()->route('marketing-dmars.index')
                             ->with('success', 'Marketing DMAR updated successfully.');
        } catch (Exception $e) {
            return redirect()->back()->withInput()
                             ->with('error', 'Failed to update Marketing DMAR: ' . $e->getMessage());
        }
    }

    // Delete a Marketing DMAR
    public function destroy(MarketingDmar $marketing_dmar)
    {
        try {
            $marketing_dmar->delete();
            return redirect()->route('marketing-dmars.index')
                             ->with('success', 'Marketing DMAR deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()
                             ->with('error', 'Failed to delete Marketing DMAR: ' . $e->getMessage());
        }
    }

    // Validation rules (centralized for reuse)
    private function validationRules()
    {
        return [
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
            'contact_name' => 'nullable|string|max:100',
            'contact_number' => 'nullable|string|max:50',
            'contact_email' => 'nullable|email|max:100',
            'contact_address' => 'nullable|string',
            'contact_website' => 'nullable|string|max:255',
            'contact_social' => 'nullable|string',
        ];
    }
}
