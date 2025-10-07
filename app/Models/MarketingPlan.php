<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'year',
        'month',
        'date',
        'title',
        'marketing_type',
        'status',
        'contact_name',
        'contact_number',
        'contact_email',
        'contact_address',
        'contact_website',
        'contact_social',
        'notes',
    ];

    /**
     * Relationship with User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
