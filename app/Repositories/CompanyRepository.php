<?php

namespace App\Repositories;

use App\Models\Company;
use App\Repositories\Interfaces\CompanyRepositoryInterface;

class CompanyRepository implements CompanyRepositoryInterface {
    public function All(){
        return Company::all();
    }
    public function storeData($request){
        //Store companies logos in storage/app/public folder and make them accessible from public.

        $company = new Company();
        if ($request->hasFile('logo')) {
            $destinationPath= 'public/Company-logos/';
            $image      = $request->file('logo');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath,$fileName);
            $company->logo = $fileName;
        }

        $company->name    = $request->name;
        $company->email   = $request->email;
        $company->website = $request->website;
        $company->save();


    // function getImageUrl($request)
    // {
    //     $image = $request->file('logo');
    //     $imageName = time().'.'.$image->getClientOriginalExtension();
    //     $directory = 'Company-logos/';
    //     $image->move($directory, $imageName);
    //     return $directory.$imageName;
    // }

        // $company = new Company();
        // $company->name    = $request->name;
        // $company->email   = $request->email;
        // $company->website = $request->website;
        // $company->logo    = getImageUrl($request);
        // $company->save();




}
    public function findById($id){
        return Company::find($id);
    }
    public function updateData($request, $company){
     
        if ($request->hasFile('logo')) {
            $destinationPath= 'public/Company-logos/';
            $image      = $request->file('logo');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath,$fileName);
            $company->logo = $fileName;
        }

        $company->name    = $request->name;
        $company->email   = $request->email;
        $company->website = $request->website;
        $company->update();

    }
}

