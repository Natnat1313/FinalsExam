<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employeetb';
    protected $primarykey = "id";
    protected $fillable = ['fname', 'mname', 'lname', 'address', 'dob','contactno'];        
    
}
