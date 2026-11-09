@extends('layout')


@section('title', 'Prodotti')

@section('extra_head')
    <link rel="stylesheet" href="{{url('css\prodotti_mulino.css')}}">
    <script src="{{url('js\mostra_prodotti.js')}}" defer></script>
        <script>
            const BASE_URL="{{ url('/')}}/";

        </script>

@endsection


@section('inizio_div')
<div id="sfondo_header_e_nav">
@endsection

@section('fine_div')
</div>
@endsection






@section('content')
    <section>
                <img id="immagine_omino" src="https://t4.ftcdn.net/jpg/01/93/29/59/360_F_193295910_NtF2kPvo4hsDv8VjHulzAhn2nN0444EI.jpg" />
                <div class="div_section">
                    <h2>Per i tuoi piccoli momenti di felicità.</h2>
                    <p>Ogni giorno sono tante le <strong>occasioni in cui puoi gustare le nostre bontà: si
                         inizia con la colazione e poi ci si siede a tavola, a pranzo e a cena.</strong> Anche a <strong>merende</strong> e <strong>snack</strong> non 
                         si dice mai di no, a qualunque età. Scopri tutti i prodotti del Mulino e trova quello più adatto a te.
                    </p>
                
                </div>

                <div id="visualizza_prodotti_mulino">

                </div>


                <div class="div_larghezza_ridotta">
                    <h2>Con il “TrovaBontà” è facile</h2>
                    <p>Il nostro impegno è da sempre quello di fare i prodotti più buoni pensando ai gusti e alle <strong>esigenze del maggior
                        numero possibile di persone</strong>, l’ampia gamma di prodotti Mulino Bianco ne è una dimostrazione.
                        Scopri il <strong>prodotto più adatto</strong> alle tue esigenze alimentari nei vari <strong>momenti della giornata.</strong></p>
                    <h3>Cosa ti piacerebbe oggi?</h3>
                    <img class="img_menu" src="images/img006.png" />
                </div>
                <div id="div4">
                    <div class="white_div">
                        <h2>Ogni mattina, tre belle notizie!</h2>
                        <p>Iscriviti gratuitamente alla nuova <strong>newsletter Tre Notizie a Colazione.</strong> Ogni giorno, alle 7 del mattino,
                        una <strong>rassegna di buone notizie</strong> a cura della redazione giornalistica di Good Morning Italia.</p>
                        <a class="a_button" href="https://www.mulinobianco.it/login?urlBack=/newsletter">Iscriviti</a>
                    </div>
                </div>
                



    </section>
            
@endsection