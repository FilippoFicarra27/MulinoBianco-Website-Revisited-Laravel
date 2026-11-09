<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;

class Registrazione_Login extends Controller
{
    public function vedi_registrazione(){
        if(Session::get('mail')){
            return redirect('home_session');
        }
        $errore=Session::get('errore');
        
        Session::forget('errore');
        return view('registrazione')->with('errore', $errore);
    }
    public function registra(){
        if(strlen(request("nome_utente"))<2){
            Session::put('errore', 'nome_piccolo');
            return redirect('registrazione')->withInput();
        }
        else if(strlen(request("cognome_utente"))<2){
            Session::put('errore', 'cognome_piccolo');
            return redirect('registrazione')->withInput();
        }
        else if(!filter_var(request('email_utente'), FILTER_VALIDATE_EMAIL)){
            Session::put('errore', 'mail_invalida');
            return redirect('registrazione')->withInput();
        }


        else if(User::where('Email', request('email_utente'))->first()){
            Session::put('errore', 'utente_esistente');
            return redirect('registrazione')->withInput();
        }

        else if(!preg_match('/^(?=.*[A-Z])(?=.*[\W_]).+$/', request('password_utente'))){
            Session::put('errore', 'password_invalida');
            return redirect('registrazione')->withInput();
        }


        else if(request("password_utente")!=request("conferma_password")){
            Session::put('errore', 'password_non_corrispondenti');
            return redirect('registrazione')->withInput();
        }
        
        else if(request('marketing') != 'si'){
            Session::put('errore', 'consenso_non_dato_marketing');
            return redirect('registrazione')->withInput();
        }
        
        else if(request('profilazione') != 'si'){
            Session::put('errore', 'consenso_non_dato_profilazione');
            return redirect('registrazione')->withInput();
        }


        $user=new User;
        $user->Email=request('email_utente');
        
        $user->Nome=request('nome_utente');
        
        $user->Cognome=request('cognome_utente');
        $user->Data_Nascita=request('data_utente');
        $user->Password_utente= password_hash(request('password_utente'), PASSWORD_BCRYPT);
        $user->save();

        
        Session::put('mail', request('email_utente'));
        
        
        
        return redirect('home_session');

    }
    public function vedi_login(){

        if (Session::get('mail')) {
            return redirect('home_session');
        }
    
        $errore = Session::get('errore');
        Session::forget('errore');
        return view('login')->with('errore', $errore);

    }

    public function login(){
        
       
       
        $user = User::where('Email', request('Email'))->first();
        
        if(!$user || !password_verify(request('password'), $user->Password_utente))
        {
            Session::put('errore', 'credenziali_invalide');
            return redirect('login')->withInput();
        }
        
        Session::put('mail', request('Email'));
        

       
        return redirect('home_session');
    }

    public function logout(){
        Session::flush('mail');
        return redirect('login');
    }

}
