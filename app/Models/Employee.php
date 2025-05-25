<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Employee extends Model
{
    protected $table = 'employee';
    protected $fillable = ['name','birth_date','cpf','address','telephone','department_id'];

    public function department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
    
}