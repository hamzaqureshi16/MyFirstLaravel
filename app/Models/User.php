<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class user extends Model
{
    use HasFactory;
    use HasRoles;

    protected $guard_name = 'admins';
    public $timestamps = false;
    
    protected $fillable = ['first_name','last_name','email','password','avatar'];
}
