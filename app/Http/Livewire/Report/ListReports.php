<?php

namespace App\Http\Livewire\Report;

use App\Models\Quotation;
use Livewire\Component;

class ListReports extends Component
{
    public $quotations;

    public function mount()
    {
        $this->quotations = $this->getQuotations();
    }

    public function getQuotations()
    {
        return Quotation::query()
            ->where('status', '=', 1)
            ->get();
    }

    public function render()
    {
        return view('livewire.report.list-reports');
    }
}
