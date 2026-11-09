<?php

namespace App\Http\Controllers;
use App\Models\Prodotto;
use App\Models\Afferenza;
use Illuminate\Http\Request;
use Session;
use DB;


class Prodotti extends Controller
{
    public function visualizza_pagina(){
        if (!Session::get('mail')) {
            return redirect('login');
        }  
        return view('vedi_prodotti');
    }

    public function visualizza_prodotti(){
        if (!Session::get('mail')) {
            return redirect('login');
        }  
        $prodotti=Prodotto::all();
        return $prodotti;
    }


    public function visualizza_afferenza(){
        if (!Session::get('mail')) {
            return redirect('login');
        }  
        $afferenza= Afferenza::where('Mail',Session::get('mail'))->get();
        return $afferenza;
    }

    public function aggiungi_prodotto($id_prodotto){
        
        $afferenza=new Afferenza;
        $afferenza->Mail=Session::get('mail');
        $afferenza->Prodotto=$id_prodotto;
        $afferenza->save();

    

    }
    public function rimuovi_prodotto($id_prodotto){
        $mail=Session::get('mail');
       
        
        DB::table('Afferenza')->where('Mail', $mail)->where('Prodotto', $id_prodotto)->delete();

    }
}
