<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{
    public $company;

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.company.edit');
    }
}
