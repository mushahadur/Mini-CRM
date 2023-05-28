<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Redirect;
use App\Repositories\Interfaces\CompanyRepositoryInterface;


class CompanyController extends Controller
{
    protected $companyRepository;
   public function __construct(CompanyRepositoryInterface $companyRepository)
   {
        $this->companyRepository = $companyRepository;
   }
    public function index()
    {
        $company = $this->companyRepository->All();
        return view('admin.company.index')->with( 'companies', $company);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.create');
    }

    public function store(CompanyRequest $request)
    {
        $this->companyRepository->storeData($request);
        return redirect('/companies')->with('message', 'Company info create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('admin.company.detail')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('admin.company.edit')->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $this->companyRepository->updateData($request, $company);
        return Redirect::route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {   
        $company->delete();
        return redirect(route('companies.index'));
    }
}
