<?php

namespace App\Repositories\Interfaces;

interface CompanyRepositoryInterface
{
    public function All();
    public function storeData($request);
    public function findById($id);
    public function updateData($request, $company);
}
