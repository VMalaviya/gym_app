<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_first_name',
        'user_last_name',
        'email',
        'user_phone_number',
        'password',
        'role_id',
        'email_verified_at',
        'email_verification_sent_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'email_verified_at',
        'email_verification_sent_at',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'email_verified_at' => 'datetime',
            'email_verification_sent_at' => 'datetime'
        ];
    }

    /**
     * Accessor to get the full name of the user.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return ucfirst($this->user_first_name) . ' ' . ucfirst($this->user_last_name);
    }

}
