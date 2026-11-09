@extends('layout')

@section('title', 'CancellaProfilo')


@section('extra_head')
    <link rel="stylesheet" href="{{url('css\home_page.css')}}">


@endsection

@section('content')
<section>
                        <img id="immagine_omino" src="https://t4.ftcdn.net/jpg/01/93/29/59/360_F_193295910_NtF2kPvo4hsDv8VjHulzAhn2nN0444EI.jpg" />

                        <img id="mulino_home" src="https://www.mulinobianco.it/fe-web/img/icons/avatar_placeholder.jpg">
                        <h2>Buongiorno {{$user->Nome}}</h2>
                        <div id="container_modifica_logout">
                            <a class="modifica_logout" href="{{url('home_session')}}">Torna al Profilo</a>
                            <a class="modifica_logout" href="{{url('logout')}}">Logout</a>
                        </div>
                        <div id="container_barilla">
                            <img src="https://bar-dm-screenset.azureedge.net/4/img/Barillagroup.jpg">
                            <p>
                            Cancellando il tuo account in modo definitivo, <strong>verrai eliminato da tutti i siti del Gruppo Barilla</strong> 
                            azzerando di conseguenza anche i prodotti inseriti tra i preferiti e i contatori di eventuali punteggi accumulati.
                            <strong>La cancellazione sarà completata entro 24 ore</strong>. Una eventuale login durante questo lasso di tempo, annullerà 
                            la cancellazione. Durante questo periodo potresti ancora ricevere comunicazioni promozionali.
                            </p>
                            
                            <div>
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-barilla.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-voiello.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-mulinobianco-v2.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-gocciole.png">
                                <img src="https://www.ringo.it/email-img/gigya/logo-ringo.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-pandistelle.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-granpavesi.png">
                                <img src="https://www.pavesini.it/wp-content/themes/pavesini-new/images/logo_desktop.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-pavesi.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-academiabarilla.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-grancereale.png">
                                <img src="https://images.ctfassets.net/trtof15e9y2s/3HKtbzBfTesQdydb4M6h4V/2fb35b162e46b4514ecf5949c3290283/logo.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-wasa.png">
                            </div>
                            <form method="post">
                                @csrf
                                <input class="a_button sfondo_grigio" type="submit" name="cancella" value="Conferma Cancellazione">
                            </form>
                            
                            <a class="sottolineato" href="{{url('home_session')}}"><p>Torna al profilo</p></a>
                        </div>
                        
                        
                        
</section>

@endsection
