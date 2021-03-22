<?php

namespace App\Repositories;

use App\Company;

class CompanyRepository implements CompanyRepositoryInterface
{

    protected $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function save($company)
    {
        $this->company->company = $company;
        $this->company->save();
    }

}