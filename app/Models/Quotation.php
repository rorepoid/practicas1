<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'date',
        'payment_method',
        'transport_unit',
        'materials',
        'weight',
        'pickup_address',
        'delivery_address',
        'description',
        'status',
        'quantity',
        'unit_price',
        'total',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
