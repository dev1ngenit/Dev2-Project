<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingDmar extends Model
{
    use HasFactory;

    protected $fillable = [
          'user_id',
        'year',
        'date',
        'month',
        'activity',
        'company',
        'service',
        'products',
        'tentative',
        'comments',
        'action_on_fail',
        'current_status',
        'client_type',
        'sector',
        'sub_sector',
        'area',
        'contact_name',
        'contact_number',
        'contact_email',
        'contact_address',
        'contact_website',
        'contact_social',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
