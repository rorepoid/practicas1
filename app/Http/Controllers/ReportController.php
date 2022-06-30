<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuotationRequest;
use App\Http\Requests\UpdateQuotationRequest;
use App\Models\Quotation;

class ReportController extends Controller
{
    public function index()
    {
        $quotations = Quotation::with('company')->get();
        return view('reports.index', compact('quotations'));

    }
}
