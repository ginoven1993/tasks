<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborateurs extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'name',
        'prenoms',
        'email',
        'numero',
        'fonction',
        'password',
        'role',
        'status'
    ];

    // public function taches(){

    //     return $this->hasMany(Taches::class, 'tache_id');
    // }

    // public function projets(){

    //     return $this->hasMany(Projets::class, 'projet_id');
    // }
}
