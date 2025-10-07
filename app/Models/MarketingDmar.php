<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingDmar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'year', 'date', 'month', 'activity', 'company',
        'service', 'products', 'tentative', 'comments', 'action_on_fail',
        'current_status', 'client_type', 'sector', 'sub_sector', 'area'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
