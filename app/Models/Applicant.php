<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\Applicant\ResetPasswordNotification;

class Applicant extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $guard = 'applicant';
}
