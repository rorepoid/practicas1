<?php

namespace App\Http\Livewire\Quotation;

use App\Models\Quotation;
use Livewire\Component;

class ListQuotations extends Component
{
    public $quotations;

    protected $listeners = ['quotationAdded', 'quotationUpdated', 'quotationDeleted'];

    public function mount()
    {
        $this->quotations = $this->getQuotations();
    }

    public function render()
    {
        return view('livewire.quotation.list-quotations');
    }

    public function getQuotations()
    {
        return Quotation::all();
    }

    public function quotationAdded()
    {
        $this->quotations = $this->getQuotations();
    }

    public function quotationUpdated()
    {
        $this->quotations = $this->getQuotations();
    }

    public function quotationDeleted()
    {
        $this->quotations = $this->getQuotations();
    }
}
