<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ruc',
        'address',
        'attention',
        'status',
    ];

    public function quotations(): HasMany
    {
        return $this->hasMany(Quotation::class);
    }
}
