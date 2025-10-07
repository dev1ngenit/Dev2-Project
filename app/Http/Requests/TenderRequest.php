<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TenderRequest extends FormRequest
{
    public function authorize() { return true; }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'tender_type' => 'nullable|string|in:EOI,RFQ,Consultant,eGP,Enlistment,RFP',
            'responsible_person_id' => 'nullable|exists:users,id',
            'last_date_of_submission' => 'nullable|date',
            'submission_day' => 'nullable|string|max:50',
            'action' => 'nullable|string|max:100',
            'participate' => 'nullable|in:Yes,No,May Be,Need Discussion',
            'submitted' => 'nullable|in:Yes,No',
            'tender_status' => 'nullable|in:Live,Fail,Re Tender,Time Over,Technical Eval,Lost,Not Lowest,Probability,Won,Submitted,Participating',
            'purchase' => 'nullable|in:Yes,No,May Be',
            'tenderer' => 'nullable|string|max:255',
            'tender_reference' => 'nullable|string',
            'mode_of_submission' => 'nullable|string|max:50',
            'submission_medium' => 'nullable|string|max:255',
            'egp_id' => 'nullable|string|max:255',
            'pre_bid_meeting' => 'nullable|string|max:255',
            'schedule_value_tk' => 'nullable|numeric',
            'security' => 'nullable|numeric',
            'time_over' => 'nullable|boolean',
            'client_name' => 'nullable|string|max:255',
            'contact_name' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:50',
            'contact_email' => 'nullable|email',
            'contact_address' => 'nullable|string',
            'client_website' => 'nullable|url',
            'comments_by_manager' => 'nullable|string',
            'comments_by_md' => 'nullable|string',
            'general_comments' => 'nullable|string',
        ];
    }
}
