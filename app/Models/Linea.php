<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    use HasFactory;

    /**
     * Get the factura that owns the Linea
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function factura()
    {
        return $this->belongsTo(Factura::class);
    }

    /**
     * Get the zapato thae Linea
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function zapato()
    {
        return $this->belongsTo(Zapato::class);
    }
}
