<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    use HasFactory,Notifiable;
    
    protected $guard = 'admin';
    protected $fillable = [
      'username',
      'email',
      'password',
      'google_id',
      'remember_token',
    ];
    protected $hidden = [
      'password'
    ];

    protected $casts = [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
  ];
}
