<?php

namespace App\Http\Livewire\Quotation;

use App\Models\Company;
use App\Models\Quotation;
use Livewire\Component;

class CreateQuotation extends Component
{
    public $companies;
    public $companyId;
    public $ruc;
    public $date;
    public $paymentMethod;
    public $quantity = 0;
    public $unitPrice = 0;
    public $transportUnit;
    public $attention;
    public $materials = 'MATERIALES VARIOS';
    public $weight;
    public $pickupAddress;
    public $deliveryAddress;
    public $description;
    public $subtotal;
    public $igv;
    public $total;
    public $commercialData = [
        'RECOGO DE MATERIALES EN TODO LIMA Y CALLAO.',
        'SEGURO COMPLEMENTARIO DE TRABAJO DE RIESGO (SCTR), SALUD Y PENSION.',
        'MONITOREO Y SEGUIMIENTO DE UNIDADES EN BASE MEDIANTE CENTRO DE CONTROL.', 'NO INCLUYE CARGA NI DESCARGA',
        'SISTEMA DE GESTION GPS, PARA TODOS NUESTROS SERVICIOS DE CARGA PESADA Y SOBREDIMENSIONADA.'
    ];

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
            'companyId' => 'required',
            'date' => 'required',
            'paymentMethod' => 'required',
            'quantity' => 'required',
            'unitPrice' => 'required',
            'transportUnit' => 'required',
            'materials' => 'required',
            'weight' => 'required',
            'pickupAddress' => 'required',
            'deliveryAddress' => 'required',
        ]);

        $quotation = Quotation::create([
            'company_id' => $this->companyId,
            'date' => $this->date,
            'payment_method' => $this->paymentMethod,
            'transport_unit' => $this->transportUnit,
            'materials' => $this->materials,
            'weight' => $this->weight,
            'pickup_address' => $this->pickupAddress,
            'description' => implode("\n", $this->commercialData),
            'status' => 0,
            'total' => $this->total,
        ]);

        $this->emit('quotationStored', $quotation);
        return redirect()->route('quotations.index');

        // $this->resetInput();
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

    public function fillCompanyData()
    {
        $company = $this->companies->where('id', $this->companyId)->first();

        if (empty($company)) {
            $this->ruc = '';
            $this->paymentMethod = '';
            $this->attention = '';
        } else {
            $this->ruc = $company->ruc;
            $this->paymentMethod = $company->preferred_payment_method;
            $this->attention = $company->attention;
        }
    }

    public function updatedQuantity()
    {
        if (
            is_numeric($this->quantity) === false ||
            strpos($this->quantity, 'e') !== false ||
            $this->quantity < 0
        ) {
            $this->quantity = 0;
        }
        $this->quantity = (int) $this->quantity;
        $this->updatePrices();
    }

    public function updatedUnitPrice()
    {
        if (
            is_numeric($this->unitPrice) === false ||
            strpos($this->unitPrice, 'e') !== false ||
            $this->unitPrice < 0
        ) {
            $this->unitPrice = 0;
        }
        $this->unitPrice = (float) $this->unitPrice;
        $this->updatePrices();
    }

    public function updatePrices()
    {
        $this->subtotal = $this->getSubTotal();
        $this->igv = round($this->getIgv(), 2);
        $this->total = round($this->getTotal(), 2);
    }

    public function getSubTotal()
    {
        return $this->quantity * $this->unitPrice;
    }

    public function getIgv()
    {
        return $this->getSubTotal() * 0.18;
    }

    public function getTotal()
    {
        return $this->getSubTotal() + $this->getIgv();
    }
}
