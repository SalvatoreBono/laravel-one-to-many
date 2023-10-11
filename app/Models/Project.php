<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    //specificare come i dati dovrebbero essere trattati
    protected $casts = [
        "date" => "date",
        "language" => "array",
    ];
    //controllare quali dati possono essere inseriti o aggiornati 
    protected $fillable = [
        "title",
        "slug",
        "description",
        "thumbnail",
        "link",
        "date",
        "language",
    ];
}
