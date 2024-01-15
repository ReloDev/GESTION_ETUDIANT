<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable = ["matricule1","email1","matricule2","email2"];
    use HasFactory;
    public function etudaints(){
        return $this->hasOne(Etudiant::class);
    }

}
