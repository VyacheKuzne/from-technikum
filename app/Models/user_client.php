<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;

class user_client extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email',
        'password',
    ];
    public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::make($password);
    }
}