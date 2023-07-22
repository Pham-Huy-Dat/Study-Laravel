<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name',
        'email',
        'phone',
        'full_name',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $primaryKey = 'id';
    protected $table = 'tbl_account';
}
