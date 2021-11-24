<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surnames', 'mail', 'pass', 'img'];
    protected $hidden = ['created_at', 'updated_at'];

}
