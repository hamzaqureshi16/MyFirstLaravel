<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class user extends Model implements Authenticatable
{
    use HasFactory;
    use HasRoles;
    use AuthenticableTrait;

    protected $guard_name = 'admins';
    public $timestamps = false;
    
    protected $fillable = ['first_name','last_name','email','password','avatar'];
}
