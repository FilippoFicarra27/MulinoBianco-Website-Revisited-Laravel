function MostraMenuTendina(){
   
    const article=document.querySelector('article');
    const menu=document.querySelector('#menu_tendina');

    article.classList.add('hidden');
    
    menu.classList.remove('hidden');
   
}

const innesco_tendina=document.querySelector('#mostra_menu_tendina');
innesco_tendina.addEventListener('click',MostraMenuTendina);


function RimuoviMenuTendina(){
    const article=document.querySelector('article');
    const menu=document.querySelector('#menu_tendina');

    article.classList.remove('hidden');
    menu.classList.add('hidden');
   
}

const innesco_rimuovi_tendina=document.querySelector('.croce_tendina');
innesco_rimuovi_tendina.addEventListener('click',RimuoviMenuTendina);
