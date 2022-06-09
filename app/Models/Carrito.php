<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Carrito
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the zapato te Carrito
     *
     * @return \Illuminate\Database\    */
    public function zapato()
    {
        return $this->belongsTo(Zapato::class);
    }

}
