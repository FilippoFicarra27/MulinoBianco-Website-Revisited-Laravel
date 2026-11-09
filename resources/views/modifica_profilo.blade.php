@extends('layout')

@section('title', 'ModificaProfilo')


@section('extra_head')
    <link rel="stylesheet" href="{{url('css\home_page.css')}}">
    <script src="{{url('js\validazione_modifica.js')}}" defer></script>

@endsection


@section('content')
    <section>
                        <img id="immagine_omino" src="https://t4.ftcdn.net/jpg/01/93/29/59/360_F_193295910_NtF2kPvo4hsDv8VjHulzAhn2nN0444EI.jpg" />

                        <img id="mulino_home" src="https://www.mulinobianco.it/fe-web/img/icons/avatar_placeholder.jpg">
                        <h2>Buongiorno {{ $user->Nome }}</h2>
                        <div id="container_modifica_logout">
                            <a class="modifica_logout" href="{{url('home_session')}}">Torna al Profilo</a>
                            <a class="modifica_logout" href="{{url('logout')}}">Logout</a>
                        </div>
                        <h2>Il Mio profilo</h2>
                        <form id="mio_profilo" method="post">
                            @csrf
                            <p>Nome*</p>
                            <input id="nome_u" class="testo_form" type="text" name="nome_utente" value="{{$user->Nome}}">
                            
                                
                                @if($errore=='nome_piccolo')
                                    <h4>Lunghezza non valida, deve essere di almeno 2 caratteri</h4>
                        
                                @endif
                                    

                            
                            <h4 id="nome_utente" class="hidden">Questo campo è obbligatorio!</h4>

                            <p>Cognome*</p>
                            <input id="cognome_u" class="testo_form" type="text" name="cognome_utente" value="{{$user->Cognome}}">
                            
                                    
                                @if($errore=='cognome_piccolo')
                                    <h4>Lunghezza non valida, deve essere di almeno 2 caratteri</h4>
                        
                                @endif
                                    

                            
                            <h4 id="cognome_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                            <p>Email*</p>
                            <input id="mail_u" class="testo_form" type="text" name="email_utente" value="{{$mail}}">
                            
                               
                                @if($errore=='utente_esistente')
                                    <h4>Errore! Un utente con questa mail è già presente</h4>
                                 @endif
                                
                                 @if($errore=='mail_invalida')
                                    <h4>Errore! Mail non valida</h4>
                                 @endif
                                

                            
                            <h4 id="mail_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                            
                            <p>Data di nascita*</p>
                            <input id="data_u" class="testo_form" type="date" name="data_utente" value="{{$user->Data_Nascita}}">
                            <h4 id="data_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                           <input class="a_button sfondo_grigio" type="submit" value="Salva">
                           

                                @if($errore=='successo_aggiornamento')
                                    <h4>il tuo profilo è stato aggiornato con successo</h4>
                                @endif

                        
                            
                        </form>
                        <a class="sottolineato" href="{{url('cambiopassword')}}"><p>Cambia La password</p></a>
                        <a class="sottolineato" href="{{url('cancellaprofilo')}}">
                        <p>Cancella profilo</br>
                           Verrai cancellato da tutti i siti Barilla
                        </p>
                        </a>
                        
    </section>       

@endsection

