<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{
    public $company;
    public $name;
    public $ruc;
    public $address;
    public $attention;
    public $status;
    public $preferredPaymentMethod;

    protected $rules = [
        'company' => ['required', 'exists:companies,id'],
        'name' => ['required', 'string'],
        'ruc' => ['required', 'digits:11'],
        'address' => ['required', 'string'],
        'attention' => ['nullable', 'string'],
        'preferredPaymentMethod' => ['nullable', 'string'],
        'status' => ['nullable', 'boolean'],
    ];

    public function mount(Company $company)
    {
        $this->company = $company;
        $this->name = $company->name;
        $this->ruc = $company->ruc;
        $this->address = $company->address;
        $this->attention = $company->attention;
        $this->preferredPaymentMethod = $company->preferred_payment_method;
        $this->status = $company->status;
    }

    public function render()
    {
        return view('livewire.company.edit');
    }

    public function save()
    {
        $this->validate();

        $this->company->update([
            'name' => $this->name,
            'ruc' => $this->ruc,
            'address' => $this->address,
            'attention' => $this->attention,
            'preferred_payment_method' => $this->preferredPaymentMethod,
            'status' => (bool) $this->status,
        ]);

        $this->closeModal();
        $this->emit('companyUpdated');
    }
}
