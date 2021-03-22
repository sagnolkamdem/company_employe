<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    
    public $timestamps = true;

    protected $fillable = ['nom', 'email', 'logo', 'site_web', 'created_at'];

    public function employe()
    { 
        return $this->belongsTo(Employe::class); 
    }
}
