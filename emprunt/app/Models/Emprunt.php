<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    use HasFactory;

    public function convert_date($date)
    {
        $dt = strtotime($date);
        return date('d-m-Y',$dt);
    }

    public function compte()
    {
        return $this->belongsTo(Compte::class);
    } 
}


