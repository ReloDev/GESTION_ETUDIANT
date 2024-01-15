<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    public function filieres(){
        return $this->belongsTo(Filiere::class,'id_filiere','id');
    }
}
