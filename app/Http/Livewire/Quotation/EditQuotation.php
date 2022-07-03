<?php

namespace App\Http\Livewire\Quotation;

use App\Models\Company;
use App\Models\Quotation;
use Livewire\Component;

class EditQuotation extends Component
{
    public $quotation;
    public $companies;
    public $companyId;
    public $ruc;
    public $date;
    public $paymentMethod;
    public $quantity;
    public $unitPrice;
    public $transportUnit;
    public $attention;
    public $materials;
    public $weight;
    public $pickupAddress;
    public $deliveryAddress;
    public $description;
    public $subtotal;
    public $igv;
    public $total;
    public $commercialData;

    public function mount(Quotation $quotation)
    {
        $this->quotation = $quotation;
        $this->companies = Company::active()->get();
        $this->companyId = $quotation->company_id;
        $this->ruc = $quotation->company->ruc;
        $this->date = $quotation->date;
        $this->paymentMethod = $quotation->payment_method;
        $this->quantity = $quotation->quantity;
        $this->unitPrice = $quotation->unit_price;
        $this->transportUnit = $quotation->transport_unit;
        $this->attention = $quotation->attention;
        $this->materials = $quotation->materials;
        $this->weight = $quotation->weight;
        $this->pickupAddress = $quotation->pickup_address;
        $this->deliveryAddress = $quotation->delivery_address;
        $this->description = $quotation->description;
        $this->subtotal = $quotation->subtotal;
        $this->igv = $quotation->igv;
        $this->total = $quotation->total;
        $this->commercialData = explode("\n", $quotation->description);
    }

    public function render()
    {
        return view('livewire.quotation.edit-quotation');
    }

    public function store()
    {
        $this->validate([
            'companyId' => 'required',
            'ruc' => 'required',
            'attention' => 'required',
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

        $quotation = $this->quotation->update([
            'company_id' => $this->companyId,
            'ruc' => $this->ruc,
            'attention' => $this->attention,
            'date' => $this->date,
            'payment_method' => $this->paymentMethod,
            'transport_unit' => $this->transportUnit,
            'materials' => $this->materials,
            'weight' => $this->weight,
            'pickup_address' => $this->pickupAddress,
            'delivery_address' => $this->deliveryAddress,
            'description' => implode("\n", $this->commercialData),
            'quantity' => $this->quantity,
            'unit_price' => $this->unitPrice,
            'subtotal' => $this->subtotal,
            'igv' => $this->igv,
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
