<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prix extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_debut',
        'date_fin',
        'statut',
        'prix',
        'produit_id',
        'marche_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_debut' => 'date',
        'date_fin' => 'date',
        'produit_id' => 'integer',
        'marche_id' => 'integer',
    ];


    public function produit()
    {
        return $this->belongsTo(\App\Models\Produit::class);
    }

    public function marche()
    {
        return $this->belongsTo(\App\Models\Marche::class);
    }
}
