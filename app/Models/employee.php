<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
<<<<<<< HEAD
    protected $table = 'employee';
    protected $fillable = ['name', 'email', 'phone', 'address', 'position'];
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function getRouteKeyName()
    {
        return 'id';
    }

    
=======
    protected $table = 'employeetb';
    protected $primarykey = "id";
    protected $fillable = ['fname', 'mname', 'lname', 'address', 'dob','contactno'];        
>>>>>>> 34e81abec311744e0ddffd139217224a96722d95
    
}
