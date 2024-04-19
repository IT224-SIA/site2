<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'tbluser';
    // column sa table

    protected $fillable = [
        'id',
        'username',
        'password',
        'gender',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'password',
    ];
}