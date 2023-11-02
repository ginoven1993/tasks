<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'numero',
        'nature',
        'description',
        'ticket_subject',
        'status',
        'projet_id'
    ];

    public function projets(){
        return $this->belongsTo(Projets::class, 'projet_id');
    }
}
