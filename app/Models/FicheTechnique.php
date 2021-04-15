<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FicheTechnique extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ethrellage',
        'mode_plantation',
        'densite',
        'date_tif',
        'exploitation_id',
        'marqueur',
        'quantite_a_produire',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_tif' => 'date',
        'exploitation_id' => 'integer',
    ];


    public function exploitation()
    {
        return $this->belongsTo(\App\Models\Exploitation::class);
    }
}
