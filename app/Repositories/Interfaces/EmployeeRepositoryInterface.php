<?php

namespace App\Repositories\Interfaces;

interface EmployeeRepositoryInterface
{
    public function All();
    public function CompanyAllData();
    public function findById($id);
    public function storeData($request);
    public function updateData($request, $employee);
}
