<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
// linea de codigo para vincular el modelo
    protected $fillable = ['titulo','descripcion','estado'];
}
