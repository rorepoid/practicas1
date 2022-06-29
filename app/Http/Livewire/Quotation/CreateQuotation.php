<?php

namespace App\Http\Livewire\Quotation;

use App\Models\Company;
use App\Models\Quotation;
use Livewire\Component;

class CreateQuotation extends Component
{
    public $companies;
    public $company_id;
    public $date;
    public $payment_method;
    public $transport_unit;
    public $materials;
    public $weight;
    public $pickup_address;
    public $description;

    public function mount()
    {
        $this->companies = Company::all();
    }

    public function render()
    {
        return view('livewire.quotation.create-quotation');
    }

    public function store()
    {
        $this->validate([
            'company_id' => 'required',
            'date' => 'required',
            'payment_method' => 'required',
            'transport_unit' => 'required',
            'materials' => 'required',
            'weight' => 'required',
            'pickup_address' => 'required',
            'description' => 'required',
        ]);
dd($this->company_id);
        $quotation = Quotation::create([
            'company_id' => $this->company_id,
            'date' => $this->date,
            'payment_method' => $this->payment_method,
            'transport_unit' => $this->transport_unit,
            'materials' => $this->materials,
            'weight' => $this->weight,
            'pickup_address' => $this->pickup_address,
            'description' => $this->description,
            'status' => 0,
            'total' => $this->total,
        ]);

        $this->emit('quotationStored', $quotation);

        $this->resetInput();
    }

    public function resetInput()
    {
        $this->company_id = null;
        $this->date = null;
        $this->payment_method = null;
        $this->transport_unit = null;
        $this->materials = null;
        $this->weight = null;
        $this->pickup_address = null;
        $this->description = null;
    }

    public function getSubTotal()
    {
        return $this->weight * $this->total;
    }

    public function getIgv()
    {
        return $this->getTotal() * 0.18;
    }

    public function getTotal()
    {
        return $this->getSubTotal() + $this->getIgv();
    }
}
