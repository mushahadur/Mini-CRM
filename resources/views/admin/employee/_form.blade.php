    @if (isset($employee))
        <form action="{{ route('employees.update', $employee) }}" method="Post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    @else
        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
    @endif

        <div class="form-group row">
            <label class="col-form-label col-md-4">{{ __('employee.first_name') }}</label>
            <div class="col-md-8">
                <input type="text" name="first_name" class="form-control " value="{{isset($employee)? $employee->first_name : ""}}" />
                @error('first_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-4">{{ __('employee.last_name') }}</label>
            <div class="col-md-8">
                <input type="text" name="last_name" class="form-control" name="last_name"  value="{{isset($employee)? $employee->last_name : ""}}" />
                @error('last_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-form-label col-md-4">{{ __('employee.email') }}</label>
            <div class="col-md-8">
                <input type="email" name="email" class="form-control" name="email" value="{{isset($employee)? $employee->email : ""}}" />
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-4">{{ __('employee.phone') }}</label>
            <div class="col-md-8">
                <input type="text" name="phone" class="form-control" name="phone" value="{{isset($employee)? $employee->phone : ""}}" />
                @error('phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-form-label col-md-4">{{ __('employee.employee_division') }}</label>
            <div class="col-md-8">
                <select  name="divisions" class="form-control form-select form-select-lg mb-3" >
                    <option value="{{isset($employee)? $employee->divisions : ""}}">{{isset($employee)? $employee->divisions : "------Select Division------" }}</option>
                    <option value="dhaka">Dhaka</option>
                    <option value="khulna">Khulna</option>
                    <option value="sylhet">Sylhet</option>
                  </select>
                @error('divisions')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-4">{{ __('employee.employee_district') }}</label>
            <div class="col-md-8">
                <select name="districts" class="form-control form-select form-select-lg mb-3">
                    <option  value="{{isset($employee)? $employee->districts : ""}}">{{isset($employee)? $employee->districts : "------Select Districts------" }}</option>
                    <option value="gajipur">Gajipur</option>
                    <option value="norshigdi">Norshigdi</option>
                    <option value="kishoreganj">Kishoreganj</option>
                    <option value="kustia">Kustia</option>
                    <option value="jshor">Jshor</option>
                    <option value="moulobi_bazar">Moulobi Bazar</option>
                    <option value="sunamganj ">Sunamganj </option>
                  </select>
                @error('districts')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-form-label col-md-4">{{ __('employee.company_name') }}</label>
            <div class="col-md-8">
                <select class="form-select form-control text-primary" name="company_id"  />
                    <option  value="{{isset($employee)? $employee->company_id : ""}}">{{isset($employee)? $employee->company->name : "------Select Company Name------" }}</option>
                    @foreach($company as $company)
                        <option value="{{$company->id}}"> {{$company->name}} </option>
                    @endforeach
                </select>
                @error('company_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>

    @if (isset($employee))
        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-success">{{ __('employee.update_employee') }}</button>
            </div>
        </div>
        
    @else
    <div class="form-group row">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-success">{{ __('employee.save') }}</button>
        </div>
    </div>
    @endif
</form>
