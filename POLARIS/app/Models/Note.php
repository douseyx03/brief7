<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'note',
        'matiere'
    ];
    // public function eleves()
    // {
    //     return $this->belongsTo(Eleve::class);
    // }
    public static function getMatiere(){
        $option=['Français','Anglais','Mathematique','P/C','SVT'];
        return $option;
    }
}
