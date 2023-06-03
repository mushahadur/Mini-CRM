<?php

namespace App\Repositories;

use App\Models\Company;
use App\Models\Employee;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;

class EmployeeRepository implements EmployeeRepositoryInterface{
    public function All(){
        return Employee::all();
    }
    public function CompanyAllData(){
       return Company::all();
    }

    public function storeData($request){
        //return Employee::create($request->validated());
        
        $employee = new Employee();
        $employee->first_name   = $request->first_name;
        $employee->last_name    = $request->last_name;
        $employee->email        = $request->email;
        $employee->phone        = $request->phone;
        $employee->company_id   = $request->company_id;
        $employee->divisions   = $request->divisions;
        $employee->districts   = $request->districts;
        $employee->save();
        return $employee;
    }
    public function findById($id){
        return Employee::find($id);
    }
    public function updateData($request, $employee){
        //$employee = new Employee();
        $employee->first_name   = $request->first_name;
        $employee->last_name    = $request->last_name;
        $employee->email        = $request->email;
        $employee->phone        = $request->phone;
        $employee->company_id   = $request->company_id;
        $employee->save();
    }

}


