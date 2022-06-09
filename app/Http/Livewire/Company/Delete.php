<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public $company;

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.company.delete');
    }

    public function delete()
    {
        if ($this->company->quotations->count() > 0) {
            $this->addError('delete', 'No se puede borrar, tiene cotizaciones asociadas.');
        } else {
            $this->company->delete();
            $this->emit('companyDeleted');
            $this->closeModal();
        }
    }
}
