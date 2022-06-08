<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;

class ListCompanies extends Component
{
    public $companies;

    protected $listeners = ['companyAdded'];

    public function mount()
    {
        $this->companies = Company::all();
    }

    public function render()
    {
        return view('livewire.company.list-companies');
    }

    public function companyAdded(Company $company)
    {
        $this->companies = Company::all();
    }
}
