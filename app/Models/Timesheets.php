<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheets extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'sujet',
        'description',
        'date',
        'heure_debut',
        'heure_fin',
        'status',
        'projet_id',
        'tache_id',
        'user_id',
    ];

    public function projets(){

        return $this->belongsTo(Projets::class, 'projet_id');
    }
    public function taches(){

        return $this->hasMany(Taches::class, 'tache_id');
    }
    public function users(){

        return $this->belongsTo(User::class, 'user_id');
    }
}
