<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{
    public $name;
    public $ruc;
    public $address;
    public $attention;
    public $status;

    protected $rules = [
        'name' => ['required', 'string'],
        'ruc' => ['required', 'digits:11'],
        'address' => ['required', 'string'],
        'attention' => ['required', 'string'],
        'status' => ['nullable', 'boolean'],
    ];

    public function render()
    {
        return view('livewire.company.create');
    }

    public function save()
    {
        $this->validate();
        Company::create([
            'name' => $this->name,
            'ruc' => $this->ruc,
            'address' => $this->address,
            'attention' => $this->attention,
            'status' => (bool) $this->status,
        ]);

        $this->closeModal();
        $this->emit('companyAdded');
    }
}
