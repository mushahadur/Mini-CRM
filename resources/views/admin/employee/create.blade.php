
@extends('admin.layouts.app')

@section('body')
    <div class="row">
<div class="col-md-6 mx-auto">
    <div class="card">

        <p class="card-title-desc">{{Session::get('message')}}</p>
        <div class="card-body">
            <h3 class="text-center pb-5">{{ __('employee.employee_add') }}</h3>
            @include('admin.employee._form')
           

         
        </div>
    </div>
</div>
</div> <!-- end row -->
@endsection
