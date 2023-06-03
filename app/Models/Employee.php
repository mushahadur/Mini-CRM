<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name', 'email','phone','districts', 'divisions','company_id'];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst($value);
    }
    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = ucfirst($value);
    }

    public function getFirstNameLastNameAttribute()
    {
        return $this->first_name."     ".$this->last_name;
    }







}
