function OnJson(json){
    console.log('json ricevuto');
    console.log(json);
    const lunghezza=json.length;
    if(lunghezza!=0){
        const sezione=document.querySelector('#prodotti_preferiti');
        sezione.innerHTML='';
        const div_prodotti=document.querySelector('#visualizza_prodotti_mulino');
        div_prodotti.innerHTML='';
        for(let i=0;i<lunghezza;i++){
        
            const titolo=document.createElement('p');
            const container=document.createElement('div');
            const image=document.createElement('img');
            


            const elimina=document.createElement('img');
            elimina.src="https://e7.pngegg.com/pngimages/374/900/png-clipart-computer-icons-christian-cross-icon-design-christian-cross-angle-logo.png";
            elimina.classList.add('immagine_cuore');
            titolo.textContent=json[i].Nome;
            console.log(titolo);
            image.src=json[i].Url_immagine;
            image.classList.add('immagine_prodotto');
            container.classList.add('div_da_visualizzare_prodotti');


            elimina.addEventListener('click', function(){
                fetch(BASE_URL+'rimuovi/'+json[i].Id);
                div_prodotti.removeChild(container);
                
            });
           


            container.appendChild(elimina);
            container.appendChild(image);
            container.appendChild(titolo);
            div_prodotti.appendChild(container);

        }
    }
}

function OnResponse(response){
    return response.json();

}



fetch(BASE_URL+'vedi_preferiti').then(OnResponse).then(OnJson);