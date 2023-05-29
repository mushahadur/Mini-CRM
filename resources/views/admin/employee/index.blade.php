@extends('admin.layouts.app')

@section('body')
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
                            <th>{{ __('employee.company_name') }}</th>
                            <th>{{ __('employee.action') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employee as $employee)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$employee->first_name}}</td>
                                <td>{{$employee->last_name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->phone}}</td>
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
