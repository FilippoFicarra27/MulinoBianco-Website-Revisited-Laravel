function OnJson(json){
    console.log('json ricevuto');
    const notizie=document.querySelector('#visualizza_notizie');
    notizie.innerHTML='';
    console.log(json);
    const lunghezza=json.articles.length;
    console.log(lunghezza);
    for(let i=0;i<lunghezza;i++){
        
        const notizia=json.articles[i];
        
        
        
        
            
            
            const title=document.createElement('h2');
            title.textContent=notizia.title;
            
            const immagine=document.createElement('img');
            immagine.src='https://www.metropolitanadinapoli.it/wp-content/uploads/2018/05/news2.jpg';
            const descrizione=document.createElement('p');
            descrizione.textContent='Pubblicato da: '+notizia.publisher.name;


            const url=document.createElement('a');
            url.textContent='Clicca qui per vedere la notizia';
            url.href=notizia.url;
            url.target='_blank';
            const contenitore=document.createElement('div');
            contenitore.appendChild(title);
            contenitore.appendChild(immagine);
            contenitore.appendChild(descrizione);
            contenitore.appendChild(url);
            contenitore.classList.add('item_div_senza_oauth2');

            const spazio=document.querySelector('#visualizza_notizie');
            spazio.appendChild(contenitore);
            
            
    
        
        
    }
        
   
   
}

function onResponse(response){
    
    return response.json();
    
}


function notizie(event){
    event.preventDefault();

    fetch(BASE_URL+'news').then(onResponse).then(OnJson);


}



const innesco_notizie=document.querySelector('#notizie_api');
innesco_notizie.addEventListener('submit', notizie);



function generaNumeroCasuale(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }


function onJson_Spotify(json){
    console.log('json ricevuto');
    console.log(json);
    
    const limite_ricerche=json.tracks.limit;
    console.log(limite_ricerche);
      
 

    const lunghezza = generaNumeroCasuale(1, limite_ricerche);
    console.log("devo ricercare: "+lunghezza+" brani o album su "+limite_ricerche+" disponibili");

    const paragrafo=document.createElement('p');
    paragrafo.textContent='clicca sull immagine per ascoltare l album su spotify';


    const sezione_spotify=document.querySelector('#visualizza_spotify');
    sezione_spotify.innerHTML='';
    const numero_ricerche=document.createElement('p');
    numero_ricerche.classList.add('visualizza_risultati');
    numero_ricerche.textContent='Sto ricercando '+lunghezza+ ' risultati su '+limite_ricerche+' disponibili';
    sezione_spotify.appendChild(numero_ricerche);
    for(let i=0;i<lunghezza;i++){
        const album_corrente=json.tracks.items[i];
        console.log(album_corrente);
        

        const nome_album=document.createElement('a');
        nome_album.classList.add('titolo_spotify');

        const image=document.createElement('img');


        const nome_artisti=document.createElement('div');
        nome_artisti.classList.add('div_di_artisti');

        const data_pubblicazione=document.createElement('p');
       

        const div_album=document.createElement('div');

        nome_album.textContent=album_corrente.name;
        
        image.src=album_corrente.album.images[0].url;
        nome_album.href=album_corrente.external_urls.spotify;
        nome_album.target= '_blank';
        const lunghezza_artisti=album_corrente.artists.length;
        for(let j=0;j<lunghezza_artisti;j++){
            const artista_corrente=album_corrente.artists[j];
            const artista_da_inserire=document.createElement('a');
            artista_da_inserire.textContent=artista_corrente.name;
            artista_da_inserire.href=artista_corrente.external_urls.spotify;
            artista_da_inserire.target= '_blank';
            artista_da_inserire.classList.add('artisti_spotify');
            nome_artisti.appendChild(artista_da_inserire);

        }

        data_pubblicazione.textContent='Pubblicazione: '+album_corrente.album.release_date;
        
        div_album.appendChild(nome_album);
        div_album.appendChild(image);
        div_album.appendChild(nome_artisti);
        div_album.appendChild(data_pubblicazione);
        
        div_album.classList.add('div_da_visualizzare_oauth2');

        sezione_spotify.appendChild(div_album);



    }
}


function cancella_sezione_spotify(event){
    event.preventDefault();
    const sezione_da_eliminare=document.querySelector('#visualizza_spotify');
    sezione_da_eliminare.innerHTML='';

}

const innesco_cancella=document.querySelector('#pulisci_spotify');
innesco_cancella.addEventListener('click', cancella_sezione_spotify);


function onResponse_Spotify(response){
    
    return response.json();
    
}




function Cerca_brano(event) {
    event.preventDefault();
    const input_brano = document.querySelector('#valore_spotify');
    const brano_valore = encodeURIComponent(input_brano.value);

    fetch(BASE_URL+'spotify/'+brano_valore).then(onResponse_Spotify).then(onJson_Spotify);
}





const form = document.querySelector('#spotify');
form.addEventListener('submit', Cerca_brano);

function onJson_volo(json){
    console.log('json ricevuto');
    console.log(json);

    const sezione=document.querySelector('#visualizza_voli');
    sezione.innerHTML='';


    const input_volo=document.querySelector('#valore_volo');
    const volo_valore=encodeURIComponent(input_volo.value);

    if(volo_valore<101.21){
        const errore=document.createElement('p');
        errore.textContent='Non ci sono voli inferiori a questo costo';
        sezione.appendChild(errore);
    }

    else{
        const lunghezza=json.data.length;
        console.log(lunghezza);

    
    
        for(let i=0;i<lunghezza;i++){
            const volo_corrente=json.data[i];

            const data_partenza=document.createElement('p');
         data_partenza.textContent='Data partenza: '+volo_corrente.departureDate;

            const aereoporto_partenza=document.createElement('p');
            aereoporto_partenza.textContent='Aeroporto di Partenza: '+volo_corrente.origin;

            const image=document.createElement('img');
            image.src="https://staticgeopop.akamaized.net/wp-content/uploads/sites/32/2024/02/aereo-supersonico-linea.jpg";

            const aereoporto_destinazione=document.createElement('p');
            aereoporto_destinazione.textContent='Aeroporto di Arrivo: '+volo_corrente.destination;

            const data_ritorno=document.createElement('p');
            data_ritorno.textContent='Data ritorno: '+volo_corrente.returnDate;

            const prezzo=document.createElement('p');
            prezzo.textContent='Prezzo: '+volo_corrente.price.total;

            const container=document.createElement('div');
            container.appendChild(data_partenza);
            container.appendChild(aereoporto_partenza);
             container.appendChild(image);
            container.appendChild(aereoporto_destinazione);
            container.appendChild(data_ritorno);
            container.appendChild(prezzo);

            container.classList.add('div_da_visualizzare_oauth2');
            sezione.appendChild(container);
        }
        

    }
        
    
}


function onResponse_volo(response){
    return response.json();
}




function Cerca_volo(event){
    event.preventDefault();
    const input_volo=document.querySelector('#valore_volo');
    const volo_valore=encodeURIComponent(input_volo.value);
    console.log('sto eseguendo ricerche sul volo '+volo_valore)

    fetch(BASE_URL+'voli/'+volo_valore).then(onResponse_volo).then(onJson_volo);
}


const innesco_volo = document.querySelector('#volo');
innesco_volo.addEventListener('submit', Cerca_volo);

function cancella_sezione_voli(event){
    event.preventDefault();
    const sezione_da_eliminare=document.querySelector('#visualizza_voli');
    sezione_da_eliminare.innerHTML='';

}

const cancella_voli=document.querySelector('#pulisci_voli');
cancella_voli.addEventListener('click', cancella_sezione_voli);



function OnJson_torta(json){
    console.log('json ricevuto');
    console.log(json);
   

    const libreria=document.querySelector('#visualizza_torte');
    libreria.innerHTML='';

    const sezione=document.createElement('div');
    


    const data_input=document.querySelector('#valore_id');
    const data_value=encodeURIComponent(data_input.value);

    if(data_value>59){
        const errore=document.createElement('p');
        errore.textContent="numero troppo alto. Inserire un numero minore o uguale a 59";
        libreria.appendChild(errore);
    }
    else{
        const titolo=document.createElement('h2');
        titolo.textContent=json.title;

        const image=document.createElement('img');
        image.src=json.image;

        const difficolta=document.createElement('p');
        difficolta.textContent='Difficoltà: '+json.difficulty;

        const porzioni=document.createElement('p');
        porzioni.textContent='Per quante persone? '+json.portion;


        const messaggio=document.createElement('p');
        messaggio.textContent='Ingredienti:';

        const div_ingredienti=document.createElement('div');
        const lunghezza_ingredienti=json.ingredients.length;
        console.log(lunghezza_ingredienti);
        for(let i=0;i<lunghezza_ingredienti;i++){
            const ingrediente_da_inserire=document.createElement('p');
            let num=i+1;
            ingrediente_da_inserire.textContent=num+') '+json.ingredients[i];
            div_ingredienti.appendChild(ingrediente_da_inserire);
        }

        div_ingredienti.classList.add('ingredienti_torta');
    
        sezione.classList.add('item_div_senza_oauth2');

        sezione.appendChild(titolo);
        sezione.appendChild(image);
        sezione.appendChild(difficolta);
        sezione.appendChild(porzioni);
        sezione.appendChild(messaggio);
        sezione.appendChild(div_ingredienti);

        

        

        

        libreria.appendChild(sezione);
    }
}

function onResponse_torta(response){
    
    return response.json();
    
}


function torte(event) {
    event.preventDefault();
    const data_input = document.querySelector('#valore_id');
    const data_value = encodeURIComponent(data_input.value);

    console.log('sto eseguendo ricerche sulla data ' + data_value);

    fetch(BASE_URL+'cocktail/'+data_value).then(onResponse_torta).then(OnJson_torta);
        
}


const innesco_torta=document.querySelector('#torta');
innesco_torta.addEventListener('submit', torte);



function cancella_sezione_notizie(event){
    event.preventDefault();
    
    const sezione_da_eliminare=document.querySelector('#visualizza_notizie');
    sezione_da_eliminare.innerHTML='';

}

const cancella_notizie=document.querySelector('#pulisci_notizie');
cancella_notizie.addEventListener('click', cancella_sezione_notizie);

function cancella_sezione_torte(event){
    event.preventDefault();
    const sezione_da_eliminare=document.querySelector('#visualizza_torte');
    sezione_da_eliminare.innerHTML='';

}

const cancella_torte=document.querySelector('#pulisci_torte');
cancella_torte.addEventListener('click', cancella_sezione_torte);
