@extends('admin.layouts.app')

@section('body')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('company.company_add') }}</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    @include('admin.company._form')
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
