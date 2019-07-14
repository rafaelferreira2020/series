<?php
namespace App;

use App\Episodio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Temporada extends Model{

    public $timestamps = false;
    protected $fillable = ['temporada'];
    
    public function episodios(){

        return $this->hasMany(Episodio::class);
    }

    public function serie(){

        return $this->belongsTo(Serie::class);
    }

    public function getEpisodiosAssistidos(): collection{
        return $this->episodios->filter(function (Episodio $episodio){
            return $episodio->assistido;
        });
    }
}
