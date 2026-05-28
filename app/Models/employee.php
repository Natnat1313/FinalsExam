<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employee';
    protected $fillable = ['name', 'email', 'phone', 'address', 'position'];
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function getRouteKeyName()
    {
        return 'id';
    }

    
    
}
