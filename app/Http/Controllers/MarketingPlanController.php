<?php
namespace App\Http\Controllers;

use App\Models\MarketingPlan;
use Illuminate\Http\Request;

class MarketingPlanController extends Controller
{
    /**
     * Display a listing of marketing plans, with optional search.
     */
    public function index(Request $request)
    {
        $query = MarketingPlan::query();

        // Search by title, type, or status
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('title', 'like', "%$search%")
                  ->orWhere('marketing_type', 'like', "%$search%")
                  ->orWhere('status', 'like', "%$search%");
        }

        $plans = $query->orderBy('id', 'desc')->paginate(10)->withQueryString();

        return view('marketing.index', compact('plans'));
    }

    /**
     * Show the form for creating a new marketing plan.
     */
    public function create()
    {
        return view('marketing.create');
    }

    /**
     * Store a newly created marketing plan in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'year' => 'nullable|integer',
            'month' => 'nullable|string',
            'date' => 'nullable|date',
            'title' => 'nullable|string|max:255',
            'marketing_type' => 'nullable|string',
            'status' => 'nullable|string',
            'contact_name' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:50',
            'contact_email' => 'nullable|email|max:255',
            'contact_address' => 'nullable|string',
            'contact_website' => 'nullable|string',
            'contact_social' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        // Sanitize the date field to ensure correct format
        if (!empty($data['date'])) {
            $data['date'] = date('Y-m-d', strtotime($data['date']));
        }

        MarketingPlan::create($data);

        return redirect()->route('marketing-plans.index')->with('success', 'Marketing Plan created successfully.');
    }

    /**
     * Display the specified marketing plan.
     */
    public function show(MarketingPlan $marketingPlan)
    {
        return view('marketing.show', compact('marketingPlan'));
    }

    /**
     * Show the form for editing the specified marketing plan.
     */
    public function edit(MarketingPlan $marketingPlan)
    {
        return view('marketing.edit', compact('marketingPlan'));
    }

    /**
     * Update the specified marketing plan in storage.
     */
    public function update(Request $request, MarketingPlan $marketingPlan)
    {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'year' => 'nullable|integer',
            'month' => 'nullable|string',
            'date' => 'nullable|date',
            'title' => 'nullable|string|max:255',
            'marketing_type' => 'nullable|string',
            'status' => 'nullable|string',
            'contact_name' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:50',
            'contact_email' => 'nullable|email|max:255',
            'contact_address' => 'nullable|string',
            'contact_website' => 'nullable|string',
            'contact_social' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        // Sanitize the date field to ensure correct format
        if (!empty($data['date'])) {
            $data['date'] = date('Y-m-d', strtotime($data['date']));
        }

        $marketingPlan->update($data);

        return redirect()->route('marketing-plans.index')->with('success', 'Marketing Plan updated successfully.');
    }

    /**
     * Remove the specified marketing plan from storage.
     */
    public function destroy(MarketingPlan $marketingPlan)
    {
        $marketingPlan->delete();

        return redirect()->route('marketing-plans.index')->with('success', 'Marketing Plan deleted successfully.');
    }
}
