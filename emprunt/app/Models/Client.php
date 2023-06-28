<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [

     'Banque',
     'Nom',
     'Prenom',
     'telephone',
     'code_pin',

    ];

    public function banque()
    {
        return $this->belongsTo(Banque::class);
    } 
}
