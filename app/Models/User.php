<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'fathers_name',
        'mothers_name',
        'birthday',
        'gender',
        'ug_degree_name',
        'ug_admission_session',
        'ug_id_no',
        'ug_batch_no',
        'ug_passing',
        'ug_session',
        'ug_cgpa',
        'g_degree_name',
        'g_admission_session',
        'g_id_no',
        'g_batch_no',
        'g_passing',
        'g_session',
        'g_cgpa',
        'address',
        'mobile',
        'email',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
