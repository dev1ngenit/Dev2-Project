<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    // The guard for admin authentication
    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'full_name',
        'company_name',
        'contact_phone',
        'company_site',
        'country',
        'language',
        'time_zone',
        'currency',
        'communication_preferences' => 'array',
        'image', // Added image field
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'communication_preferences' => 'array',
    ];

    /**
     * Automatically hash the password when setting it.
     */
    public function setPasswordAttribute($value)
    {
        if ($value) {
            $this->attributes['password'] = Hash::make($value);
        }
    }

    /**
     * Route notifications for the mail channel.
     */
    public function routeNotificationForMail($notification)
    {
        return $this->email;
    }

    /**
     * Get the URL for the admin's image.
     */
    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return asset('images/default-admin.png'); // Default image path
        }

        // Check if image is a full URL (from social login, etc.)
        if (filter_var($this->image, FILTER_VALIDATE_URL)) {
            return $this->image;
        }

        return asset('storage/' . $this->image); // Assumes images are in storage
    }

    /**
     * Get the admin's display name (full name falls back to name)
     */
    public function getDisplayNameAttribute()
    {
        return $this->full_name ?: $this->name;
    }
}