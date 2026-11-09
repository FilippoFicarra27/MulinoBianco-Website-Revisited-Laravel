<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Afferenza extends Model{
    protected $table = 'Afferenza';
    protected $primaryKey = ['Mail','Prodotto'];
    public $timestamps = false;



    public $incrementing = false;  
    

   
} 