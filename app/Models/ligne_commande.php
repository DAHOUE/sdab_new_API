<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LigneCommande extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'commande_id',
        'produit_id',
        'quantite_en_stock',
        'categorie',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'commande_id' => 'integer',
        'produit_id' => 'integer',
        'quantite_en_stock' => 'double',
    ];


    public function commande()
    {
        return $this->belongsTo(\App\Models\Commande::class);
    }

    public function produit()
    {
        return $this->belongsTo(\App\Models\Produit::class);
    }
}
