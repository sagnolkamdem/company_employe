<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $table = 'employe';
    
    public $timestamps = true;

    protected $fillable = ['prenom', 'nom_de_famille', 'company_id', 'email', 'telephone', 'created_at'];

    public function companies() 
    { 
        return $this->hasMany(Company::class); 
    }
}
