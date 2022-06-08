<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;

class ListCompanies extends Component
{
    public $companies;

    protected $listeners = ['companyAdded', 'companyUpdated', 'companyDeleted'];

    public function mount()
    {
        $this->companies = $this->getCompanies();
    }

    public function render()
    {
        return view('livewire.company.list-companies');
    }

    public function getCompanies()
    {
        return Company::all();
    }

    public function companyAdded()
    {
        $this->companies = $this->getCompanies();
    }

    public function companyUpdated()
    {
        $this->companies = $this->getCompanies();
    }

    public function companyDeleted()
    {
        $this->companies = $this->getCompanies();
    }
}
