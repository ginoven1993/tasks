<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projets extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'nom_projet',
        'description',
        'manager',
        'date_debut',
        'date_fin',
        'categories',
        'documents',
        'commentaires',
        'status',
        'collab_id',
        'user_id'
    ];

    public function users(){

        return $this->belongsTo(User::class, 'user_id');
    }
}
