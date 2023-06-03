@extends('admin.layouts.app')

@section('body')
<<<<<<< HEAD
<div class="row">
    <div class="col-md-12">
        <div class="card py-3">
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3 py-3">

                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Employee Filter Button</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Search Filtter</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('employees.index') }}" method="GET">
                             

                                <div class="form-group row mb-4">
                                    <div class="col-sm-6">
                                        <select class="form-select form-control text-success" name="company_id" />
                                            <option  value="" >Select Company Name</option>
                                            @foreach($companies as $company)
                                                <option  value="{{$company->id}}"> {{$company->name}} </option>
                                            @endforeach
                                        </select>
                                       
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="mail" class="text-success form-control form-select form-select-lg mb-3" >
                                            <option value="" >Select Mail Name</option>
                                            <option value="gmail">Gmail</option>
                                            <option value="outlook">Outlook</option>
                                            <option value="yahoo">Yahoo</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <div class="col-sm-6">
                                        <select class="form-select form-control text-success" name="divisions" />
                                            <option  value="" >Select Employee Division</option>
                                            @foreach($employees as $employee)
                                                <option  value="{{$employee->divisions}}"> {{$employee->divisions}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-select form-control text-success" name="districts" />
                                            <option  value="" >Select Employee Districts</option>
                                            @foreach($employees as $employee)
                                                <option  value="{{$employee->districts}}"> {{$employee->districts}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Search Now</button>
                                </div>
                              </form>
                        </div>
                        
                        </div>
                    </div>
                    </div>


            </div>
            
            <div class="col-md-3"> 
                <a class="btn btn-primary" href="{{ route('employees.create') }}">{{ __('employee.save') }}</a>
            </div>
=======
    <div class="row">
        <div class="col-md-12">
            <div class="card py-3">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"> 
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#employeeAddModal">
                        {{ __('employee.save') }}
                    </button>
                    {{--  <a class="btn btn-primary" href="{{ route('employees.create') }}">{{ __('employee.save') }}
                    </a>  --}}
                </div>
>>>>>>> e713dd9e35e39d670019adcadc4c8e73f9790e70

            </div>
        </div>
    </div>


   
    <!-- Employee Add Modal -->
    {{--  <div class="modal fade" id="employeeAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ __('employee.employee_add') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            @include('admin.employee._form')
          </div>
        </div>
      </div>
    </div>  --}}


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('employee.all_employee_information') }}</h4>
                    <p class="text-lime-500 text-success">{{Session::get('message')}}</p>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>{{ __('employee.si_no') }}</th>
                            <th>{{ __('employee.first_name') }}</th>
                            <th>{{ __('employee.last_name') }}</th>
                            <th>{{ __('employee.email') }}</th>
                            <th>{{ __('employee.phone') }}</th>
                            <th>{{ __('employee.employee_division') }}</th>
                            <th>{{ __('employee.employee_district') }}</th>
                            <th>{{ __('employee.company_name') }}</th>
                            <th>{{ __('employee.action') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$employee->first_name}}</td>
                                <td>{{$employee->last_name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>{{$employee->divisions}}</td>
                                <td>{{$employee->districts}}</td>
                                <td>{{$employee->company->name}}</td>
                                <td class="d-flex justify-content-start">
                                    <a href="{{ route('employees.show', $employee) }}" class="btn btn-outline-info mx-1" >
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('employees.edit', $employee) }}" class="btn btn-outline-success">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form id="delete-form" action="{{ route('employees.destroy', $employee) }}" method="POST" >
                                        @csrf
                                        @method('DELETE')
                                           <button class="btn btn-outline-danger mx-1" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
