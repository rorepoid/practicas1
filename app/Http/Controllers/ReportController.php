<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuotationRequest;
use App\Http\Requests\UpdateQuotationRequest;
use App\Models\Quotation;

class ReportController extends Controller
{
    public function index()
    {
        $quotations = Quotation::all();
        $quotationsTotalSum = $quotations->sum('total');
        return view('reports.index', compact('quotationsTotalSum'));

    }
}
