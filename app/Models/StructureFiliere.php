<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructureFiliere extends Model
{
    use HasFactory;
    protected $fillable = ["id_filiere","id_structure"];

}
