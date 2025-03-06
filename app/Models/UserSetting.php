<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'monthly_budget',
        'notification_threshold',
    ];

    // Define relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
