<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $table = "employeetbl";
    protected $primarykey= "id";
    protected $fillable =[
        'fname','mname','lname','address','dob','contactno'
    ];
}
