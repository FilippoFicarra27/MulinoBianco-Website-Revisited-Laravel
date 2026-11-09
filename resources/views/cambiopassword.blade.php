@extends('layout')

@section('title', 'cambiopassword')


@section('extra_head')
    <link rel="stylesheet" href="{{url('css\home_page.css')}}">    
    <script src="{{url('js\validazione_password.js')}}" defer></script>
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
                        <h2>Cambio Password</h2>
                        <form id="mio_profilo" method="post">
                            @csrf
                            <p>Password attuale*</p>
                            <input id="p_vecchia" class="testo_form" type="password" name="password_vecchia" value='{{old("password_vecchia")}}'>
                            <h4 id="p_vecchia_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                            @if($errore=='non_corrispondenza_vecchia_password')
                                <h4>La vecchia password non corrisponde</h4>
                                
                            @endif
                            <p>Nuova password*</p>
                            <input id="p_nuova" class="testo_form" type="password" name="password_nuova" value='{{old("password_nuova")}}'>
                            

                                    @if($errore=='password_debole')
                                        <h4>Password troppo debole! Deve contenere almeno 8 caratteri e i seguenti elementi: una lettera maisucola, una minuscola
                                        un numero e un simbolo speciale</h4>
                                    @endif
                                    @if($errore=='uguaglianza_password')
                                        <h4>la password nuova non può essere uguale alla password vecchia</h4>
                                    @endif

                            
                            <h4 id="p_nuova_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                            <h4 id="p_piccola" class="hidden">Lunghezza non valida, deve essere di almeno 8 caratteri</h4>
                            <p>Conferma nuova password*</p>
                            <input id="p_conferma" class="testo_form" type="password" name="conferma_password" value='{{old("conferma_password")}}'>
                            <h4 id="p_conferma_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                            

                                @if($errore=='due_password_non_uguali')
                                    <h4>le nuova password non corrisponde con la password confermata</h4>
                                @endif
                            
                            
                           <input class="a_button sfondo_grigio" type="submit" value="Aggiorna Password">
                           
                                @if($errore=='successo')
                                    <h4>Password aggiornata con successo</h4>
                                @endif
                                
                                
                                
                                
                        
                        </form>
                        <a class="sottolineato" href="{{url('home_session')}}"><p>Torna al profilo</p></a>
                        
            </section>
@endsection

