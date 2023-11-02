<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taches extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'nom_tache',
        'description',
        'duree',
        'status',
        'projet_id'
    ];

    public function projets(){
        return $this->belongsTo(Projets::class, 'projet_id');
    }
}
