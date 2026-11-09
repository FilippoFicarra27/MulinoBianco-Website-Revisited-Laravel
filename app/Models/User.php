<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

    protected $table = 'UTENTE';
    protected $primaryKey = 'Email';
    public $timestamps = false;
    public $incrementing = false;  
    protected $keyType = 'string';
    


   
} 