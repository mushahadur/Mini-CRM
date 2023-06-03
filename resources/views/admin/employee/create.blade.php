
@extends('admin.layouts.app')

@section('body')
    <div class="row">
<div class="col-md-5 mx-auto">
    <div class="card">

        <p class="card-title-desc">{{Session::get('message')}}</p>
        <div class="card-header"><h3 class="text-center">{{ __('employee.employee_add') }}</h3></div>
        <div class="card-body">
            
            @include('admin.employee._form')
           

         
        </div>
    </div>
</div>
</div> <!-- end row -->
@endsection
