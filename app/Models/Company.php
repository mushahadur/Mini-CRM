<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'website', 'logo'];
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

}
