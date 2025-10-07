<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;

    protected $fillable = [
        'tender_code','title','tender_type','responsible_person_id','last_date_of_submission','submission_day',
        'action','participate','submitted','status','tender_status','purchase',
        'tenderer','tender_reference','mode_of_submission','submission_medium','egp_id','pre_bid_meeting',
        'schedule_value_tk','security','time_over','client_name','contact_name','contact_number',
        'contact_email','contact_address','client_website','comments_by_manager','comments_by_md','general_comments'
    ];

    protected $casts = [
        'schedule_value_tk' => 'decimal:2',
        'security' => 'decimal:2',
        'last_date_of_submission' => 'date',
        'time_over' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function ($tender) {
            // auto-generate tender_code if not set: TD-dmy-<count>
            if (empty($tender->tender_code)) {
                $date = now()->format('jnY'); // e.g. 6102025 for 6-10-2025
                $count = self::whereDate('created_at', now()->toDateString())->count() + 1;
                $tender->tender_code = "TD-{$date}-{$count}";
            }
        });
    }

    public function responsiblePerson()
    {
        return $this->belongsTo(\App\Models\User::class, 'responsible_person_id');
    }
}
