@extends('layout')

@section('title', 'HomePage')



@section('extra_head')
    <link rel="stylesheet" href="{{url('css\home_page.css')}}">
    <script src="{{url('js\prodotti_preferiti.js')}}" defer></script>
    <script>
        const BASE_URL="{{ url('/')}}/";

    </script>
@endsection

@section('content')
    <section>
                <img id="immagine_omino" src="https://t4.ftcdn.net/jpg/01/93/29/59/360_F_193295910_NtF2kPvo4hsDv8VjHulzAhn2nN0444EI.jpg" />

                <img id="mulino_home" src="https://www.mulinobianco.it/fe-web/img/icons/avatar_placeholder.jpg">
                <h2>Buongiorno {{ $nome }}</h2>
                <div id="container_modifica_logout">
                    <a class="modifica_logout" href="{{url('modifica_profilo')}}">Modifica Profilo</a>
                    <a class="modifica_logout" href="{{url('logout')}}">Logout</a>
                </div>
                    
                <div id="prodotti_e_recensioni">
                    <h2>I tuoi Prodotti Preferiti</h2>
                    <div id="visualizza_prodotti_mulino"></div>
                    <div id="prodotti_preferiti" class="container_bianco">
                        <h3>I Tuoi Prodotti Preferiti</h3>
                        <p>Clicca il cuoricino sui prodotti che ami di più per aggiungerlo ai
                            tuoi preferiti. Ricevi notifiche su nuovi coupon e promozioni che lo riguardano.
                        </p>

                    </div>
                    <a  class="a_button sfondo_blu" href="{{url('vedi_prodotti')}}">Guarda tutti i prodotti</a>
                        
                </div>


                   
                  
    </section>

@endsection

