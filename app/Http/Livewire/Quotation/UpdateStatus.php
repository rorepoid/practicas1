<?php

namespace App\Http\Livewire\Quotation;

use App\Models\Quotation;
use LivewireUI\Modal\ModalComponent;

class UpdateStatus extends ModalComponent
{
    public $quotation;

    public function mount(Quotation $quotation)
    {
        $this->quotation = $quotation;
    }

    public function render()
    {
        return view('livewire.quotation.update-status');
    }

    public function updateStatus()
    {
        $this->quotation->update([
            'status' => $this->quotation->status ? 0 : 1,
        ]);

        $this->closeModal();
        $this->emit('quotationUpdated');
    }
}
