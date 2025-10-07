<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use App\Models\User;
use Illuminate\Http\Request;

class TenderController extends Controller
{
    /**
     * Display a listing of tenders.
     */
    public function index()
    {
        $tenders = Tender::orderBy('created_at', 'desc')->paginate(10);
        return view('tenders.index', compact('tenders'));
    }

    /**
     * Show the form for creating a new tender.
     */
    public function create()
    {
        // Select only existing columns
        $users = User::select('id', 'email') // 'email' always exists
            ->get()
            ->map(function($user) {
                // Create a display_name for dropdown
                $user->display_name = $user->name ?? $user->username ?? $user->email;
                return $user;
            });

        return view('tenders.create', compact('users'));
    }

    /**
     * Store a newly created tender in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'tender_type' => 'nullable|string|max:50',
            'responsible_person_id' => 'nullable|exists:users,id',
            'last_date_of_submission' => 'nullable|date',
            'submission_day' => 'nullable|string|max:20',
            'action' => 'nullable|string|max:100',
            'participate' => 'nullable|in:Yes,No,May Be,Need Discussion',
            'submitted' => 'nullable|in:Yes,No',
            'tender_status' => 'nullable|string|max:50',
            'purchase' => 'nullable|in:Yes,No,May Be',
            'tenderer' => 'nullable|string|max:255',
            'tender_reference' => 'nullable|string',
            'mode_of_submission' => 'nullable|string|max:50',
            'submission_medium' => 'nullable|string|max:100',
            'egp_id' => 'nullable|string|max:50',
            'pre_bid_meeting' => 'nullable|string|max:50',
            'schedule_value_tk' => 'nullable|numeric',
            'security' => 'nullable|numeric',
            'time_over' => 'nullable|boolean',
            'client_name' => 'nullable|string|max:255',
            'contact_name' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:50',
            'contact_email' => 'nullable|email|max:255',
            'contact_address' => 'nullable|string',
            'client_website' => 'nullable|url|max:255',
            'comments_by_manager' => 'nullable|string',
            'comments_by_md' => 'nullable|string',
            'general_comments' => 'nullable|string',
        ]);

        // Auto-generate tender code: TD-dmy-N
        $today = now()->format('dmY');
        $countToday = Tender::whereDate('created_at', now()->toDateString())->count() + 1;
        $data['tender_code'] = "TD-{$today}-{$countToday}";

        $data['time_over'] = $request->has('time_over') ? 1 : 0;

        Tender::create($data);

        return redirect()->route('tenders.index')->with('success', 'Tender created successfully.');
    }

    /**
     * Show the form for editing a tender.
     */
    public function edit(Tender $tender)
    {
        $users = User::select('id', 'email')
            ->get()
            ->map(function($user) {
                $user->display_name = $user->name ?? $user->username ?? $user->email;
                return $user;
            });

        return view('tenders.edit', compact('tender', 'users'));
    }

    /**
     * Update the specified tender.
     */
    public function update(Request $request, Tender $tender)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'tender_type' => 'nullable|string|max:50',
            'responsible_person_id' => 'nullable|exists:users,id',
            'last_date_of_submission' => 'nullable|date',
            'submission_day' => 'nullable|string|max:20',
            'action' => 'nullable|string|max:100',
            'participate' => 'nullable|in:Yes,No,May Be,Need Discussion',
            'submitted' => 'nullable|in:Yes,No',
            'tender_status' => 'nullable|string|max:50',
            'purchase' => 'nullable|in:Yes,No,May Be',
            'tenderer' => 'nullable|string|max:255',
            'tender_reference' => 'nullable|string',
            'mode_of_submission' => 'nullable|string|max:50',
            'submission_medium' => 'nullable|string|max:100',
            'egp_id' => 'nullable|string|max:50',
            'pre_bid_meeting' => 'nullable|string|max:50',
            'schedule_value_tk' => 'nullable|numeric',
            'security' => 'nullable|numeric',
            'time_over' => 'nullable|boolean',
            'client_name' => 'nullable|string|max:255',
            'contact_name' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:50',
            'contact_email' => 'nullable|email|max:255',
            'contact_address' => 'nullable|string',
            'client_website' => 'nullable|url|max:255',
            'comments_by_manager' => 'nullable|string',
            'comments_by_md' => 'nullable|string',
            'general_comments' => 'nullable|string',
        ]);

        $data['time_over'] = $request->has('time_over') ? 1 : 0;

        $tender->update($data);

        return redirect()->route('tenders.index')->with('success', 'Tender updated successfully.');
    }

    /**
     * Remove the tender.
     */
    public function destroy(Tender $tender)
    {
        $tender->delete();
        return redirect()->route('tenders.index')->with('success', 'Tender deleted successfully.');
    }
    public function show(Tender $tender)
{
    return view('tenders.show', compact('tender'));
}
}
