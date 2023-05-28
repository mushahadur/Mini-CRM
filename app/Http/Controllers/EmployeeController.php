<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\EmployeeRequest;
use App\Mail\EmployeeAssignNotification;
use App\Models\Employee;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;

class EmployeeController extends Controller
{
    protected $employeeRepositories;
    public function __construct(EmployeeRepositoryInterface $employeeRepository)
    {
         $this->employeeRepositories = $employeeRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = $this->employeeRepositories->All();
       //dd($employee);
        return view('admin.employee.index', ['employee' => $employee]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = $this->employeeRepositories->CompanyAllData();
        return view('admin.employee.create',compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        $data = $this->employeeRepositories->storeData($request);

        Mail::to(request('email'))->send(new EmployeeAssignNotification($data));

        return redirect('/employees')->with('message', 'Employees info create successfully! And Mail Notification send to Company ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //$employee = $this->employeeRepositories->findById($id);
        return view('admin.employee.detail')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $company = $this->employeeRepositories->CompanyAllData();
        return view('admin.employee.edit',compact('company'))->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {

        $this->employeeRepositories->updateData($request, $employee);

        return redirect('/employees')->with('message', 'Employees Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
         $employee->delete();
        return redirect(route('employees.index'));
    }


}
