    @if (isset($company))
        <form action="{{ route('companies.update', $company) }}" method="Post" enctype="multipart/form-data"  id="my-form">
            @csrf
            @method('PUT')
    @else
        <form   action="{{ route('companies.store') }}" method="Post" enctype="multipart/form-data">
            @csrf
    @endif

        <div class="form-group row">
            <label class="col-form-label col-md-4">{{ __('company.company_name') }}</label>
            <div class="col-md-8">
                <input type="text" name="name" value="{{isset($company)? $company->name : ""}}" class="form-control"/>
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-4">{{ __('company.company_email') }}</label>
            <div class="col-md-8">
                <input type="email" name="email" value="{{isset($company)? $company->email : "" }}" class="form-control"/>
                @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-4">{{ __('company.company_website') }}</label>
            <div class="col-md-8">
                <input type="text" name="website" value="{{isset($company)? $company->website : "" }}" class="form-control"/>
                @error('website')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
        </div>
        

        

   @if (isset($company))
        <div class="form-group row">
            <label class="col-form-label col-md-4">{{ __('company.company_logo') }}</label>
                <div class="col-md-8">
                    <input type="file" class="form-control-file" id="horizontal-password-input4" name="logo"/>
                    <img class="pt-3" src="{{asset('storage/Company-logos/'.$company->logo)}}" alt="" height="150" width="200"/>
                </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-success">{{ __('company.update_company') }}</button>
            </div>
        </div>
    @else
        <div class="form-group row">
            <label class="col-form-label col-md-4">{{ __('company.company_logo') }}</label>
            <div class="col-md-8">
                <input type="file" name="logo" class="form-control-file" />
                @error('logo')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id="saveCompany" class="btn btn-primary">{{ __('company.save') }}</button>
          </div>
        </div>
    @endif

</form>