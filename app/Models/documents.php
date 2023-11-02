<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'nom',
        'documents',
        'rights',
        'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
