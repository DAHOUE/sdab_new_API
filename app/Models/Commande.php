<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commande extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'client_id',
        'montant_total',
        'mode_retrait',
        'date_livraison_souhaite',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date' => 'date',
        'client_id' => 'integer',
        'date_livraison_souhaite' => 'date',
    ];


    public function client()
    {
        return $this->belongsTo(\App\Models\Client::class);
    }
}
