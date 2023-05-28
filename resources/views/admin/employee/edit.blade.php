@extends('admin.layouts.app')

@section('body')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('employee.update_employee') }}</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    <form action="{{ route('employees.update', $employee) }}" method="Post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        @include('admin.employee._form')  
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
