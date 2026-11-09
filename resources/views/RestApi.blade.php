@extends('layout')


@section('title', 'RestApi')

@section('extra_head')
    <link rel="stylesheet" href="{{url('css\RestApi.css')}}">
    <script src="{{url('js\RestApi.js')}}" defer></script>
    <script>
            const BASE_URL="{{ url('/')}}/";

    </script>
@endsection


@section('content')
<section>
             <img id="immagine_omino" src="https://t4.ftcdn.net/jpg/01/93/29/59/360_F_193295910_NtF2kPvo4hsDv8VjHulzAhn2nN0444EI.jpg" />
                <div id="api">

                    
                   
                     <form id="volo">
                        <h3>Ricerca Voli</h3>
                        <p>inserisci un costo in modo da visualizzare i voli con costo minore del valore inserito</p>
                        <input id="valore_volo" type="text" />
                        <input type="submit" value="cerca">
                        <input id="pulisci_voli" type="button" value="pulisci sezione">
                     </form>
                     <div id="visualizza_voli">
 
                     </div>
 
 
                     <form id="spotify">
                        <h3>Ricerca album di Spotify</h2>
                        <p>Inserisci un artista per ottenere un numero casuale di brani</p>
                        <input id="valore_spotify" type="text"/>
                        <input type="submit" value="cerca">
                        <input id="pulisci_spotify" type="button" value="pulisci sezione">
                     </form>  
                
                     <div id="visualizza_spotify">
                     
                     </div>
 
                    

                     <form id="notizie_api">
                        <h3>Ricerca Notizie</h3>
                        <p>Clicca il pulsante per visualizzare le notizie di oggi</p>
                        <input type="submit" value="visualizza">
                        <input id="pulisci_notizie" type="button" value="pulisci sezione">
                     </form>
                     <div id="visualizza_notizie">
 
                     </div>
 
                    
                     <form id="torta">
                        <h3>Ricerca cocktail</h3>
                        <p>Inserisci un numero per ottenere il cocktail di quell'id</p>
                        <input id="valore_id" type="text" />
                        <input type="submit" value="cerca">
                        <input id="pulisci_torte" type="button" value="pulisci sezione">
                     </form>
                     <div id="visualizza_torte">
 
                     </div>
                 </div>

        </section>

@endsection
