<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Afferenza;
use Illuminate\Http\Request;
use Session;
use DB;


class Home_page extends Controller
{
    public function visita(){
        if(!Session::get('mail')){
            return redirect('login');
        }
        $utente = User::where('Email', Session::get('mail'))->first();
        $nome=$utente->Nome;
        return view('home_session')->with('nome', $nome);
    }
   
    







    public function vedi_profilo(){
        if(!Session::get('mail')){
            return redirect('login');
        }
        $mail=Session::get('mail');
        
        $user = User::where('Email', Session::get('mail'))->first();
        
        $errore=Session::get('errore');
        Session::forget('errore');
        
        return view('modifica_profilo')->with('user', $user)->with('mail',$mail)->with('errore',$errore);
    }

    public function aggiorna_profilo(){
        $user=User::where('Email', Session::get('mail'))->first();
        $afferenze=Afferenza::where('Mail', Session::get('mail'))->get();
        

        
        if(strlen(request("nome_utente"))<2){
            Session::put('errore', 'nome_piccolo');
            return redirect('modifica_profilo')->withInput();
        }
        else if(strlen(request("cognome_utente"))<2){
            Session::put('errore', 'cognome_piccolo');
            return redirect('modifica_profilo')->withInput();
        }
        
        
        
        else if(User::where('Email', request('email_utente'))->where('Email', '<>', Session::get('mail'))->exists()){
            Session::put('errore', 'utente_esistente');
            return redirect('modifica_profilo')->withInput();
        }
        else if(!filter_var(request('email_utente'), FILTER_VALIDATE_EMAIL)){
            Session::put('errore', 'mail_invalida');
            return redirect('modifica_profilo')->withInput();
        }
        
        $nuova_mail=request('email_utente');
        
        Session::put('mail', request('email_utente'));
        
        $user->Email=request('email_utente');
        
        $user->Nome=request('nome_utente');
        
        $user->Cognome=request('cognome_utente');
        $user->Data_Nascita=request('data_utente');
       
        $user->save();

        foreach ($afferenze as $afferenza) {
            DB::table('Afferenza')
            ->where('Mail', $afferenza->Mail)
            ->where('Prodotto', $afferenza->Prodotto)
            ->update(['Mail' => $nuova_mail]);
        }

        
        
        Session::put('errore', 'successo_aggiornamento');
        
        
        return redirect('modifica_profilo');

    }


    public function vedi_password(){
        if(!Session::get('mail')){
            return redirect('login');
        }
        
        
        $user = User::where('Email', Session::get('mail'))->first();
        
        $errore=Session::get('errore');
        Session::forget('errore');
        
        return view('cambiopassword')->with('user', $user)->with('errore',$errore);
    }

    public function cambia_password(){
        $user=User::where('Email', Session::get('mail'))->first();
        $password=$user->Password_utente;
        if(!password_verify(request('password_vecchia'), $user->Password_utente)){
            Session::put('errore', 'non_corrispondenza_vecchia_password');
            return redirect('cambiopassword')->withInput();
        }

        if(password_verify(request('password_nuova'), $user->Password_utente)){
            Session::put('errore', 'uguaglianza_password');
            return redirect('cambiopassword')->withInput();
        }
        if(!preg_match('/^(?=.*[A-Z])(?=.*[\W_]).+$/', request('password_nuova'))){
            Session::put('errore', 'password_debole');
            return redirect('cambiopassword')->withInput();
        }

        if(request('conferma_password')!=request('password_nuova')){
            Session::put('errore', 'due_password_non_uguali');
            return redirect('cambiopassword')->withInput();
        }

        $user->Password_utente=password_hash(request('password_nuova'), PASSWORD_BCRYPT);
        $user->save();

        Session::put('errore', 'successo');
        
        
        return redirect('cambiopassword');


    }

    public function vedi_cancella_profilo(){
        if(!Session::get('mail')){
            return redirect('login');
        }
        
        
        $user = User::where('Email', Session::get('mail'))->first();
        
        
        return view('cancellaprofilo')->with('user', $user);
    }

    public function cancella_profilo(){
        $mail=Session::get('mail');
        $user = User::where('Email', Session::get('mail'))->first();
        $user->delete();
        DB::table('Afferenza')->where('Mail', $mail)->delete();
        Session::flush('mail');
        return redirect('login');
    }


    public function prodotti_preferiti(){
        $afferenza=Afferenza::where('Mail',Session::get('mail'))->join('Prodotti', 'Afferenza.Prodotto', '=', 'Prodotti.Id')
        ->select('Prodotti.Id','Prodotti.Nome', 'Prodotti.Url_immagine')
        ->get();
        return $afferenza;
    }
}
