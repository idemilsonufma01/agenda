<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    static $rules = [
        'title' => 'required',
        'descripcion' => 'required',
        'quant_participante' =>'required',
        'start' => 'required',
        'end' => 'required',
        'timestart'=> 'required',
        'timeend'=> 'required'
    ];

    protected $table = 'eventos';
    protected $fillable = ['title','descripcion','quant_participante','link','start','end','timestart','timeend'];
}

