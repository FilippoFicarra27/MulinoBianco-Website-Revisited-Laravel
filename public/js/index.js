


function cambiaImmagine(event){

   

    const image=event.currentTarget;
    image.src="https://www.gedistatic.it/content/gnn/img/lastampa/2021/12/23/192101954-3bb22ae6-e1fb-43cd-95c9-b9166b1953d8.jpg";

}

function ritornaImmagine(event){


    const image_original=event.currentTarget;
    image_original.src="images/img007.png";
}

const image=document.querySelector('#img_ballerina');
image.addEventListener('mouseover', cambiaImmagine);

const image_original=document.querySelector('#img_ballerina');
image_original.addEventListener('mouseout', ritornaImmagine);

function Colazione(){

    

    const container_img=document.querySelector('#div_ingresso img');
    container_img.src="https://www.mulinobianco.it/origin0/v3/upl/entities/consumptionMomentTimeSlot/momentodiconsumo_01_colazione.png";
    const container_p=document.querySelector('#div_ingresso p');
    container_p.textContent='Ecco alcune idee per la tua colazione';

    

    const divs = document.querySelectorAll('#div_2 [data-prodotto]');
    for (let i = 0; i < divs.length; i++) {
        divs[i].classList.add('hidden');
    }

    const divs_s = document.querySelectorAll('#div_2 [data-social]');
    for (let i = 0; i < divs_s.length; i++) {
        divs_s[i].classList.add('hidden');
    }

    

    const prodotto=document.querySelector('#div_2 [data-prodotto="1"]');
    prodotto.classList.remove('hidden');
    prodotto.classList.add('container-biscotti');
    const social=document.querySelector('#div_2 [data-social="1"]');
    social.classList.remove('hidden');
    social.classList.add('container-biscotti');
    
}



const innesco_colazione=document.querySelector('#pulsanti_orari [data-index="1"]');  
innesco_colazione.addEventListener('click', Colazione);

function Pranzo(){
    const container_img=document.querySelector('#div_ingresso img');
    container_img.src="https://static.mulinobianco.it/v3/upl/entities/consumptionMomentTimeSlot/momentodiconsumo_03_pranzo.png";
    const container_p=document.querySelector('#div_ingresso p');
    container_p.textContent='Ecco alcune idee per il tuo pranzo';
    
    const divs = document.querySelectorAll('#div_2 [data-prodotto]');
    for (let i = 0; i < divs.length; i++) {
        divs[i].classList.add('hidden');
    }

    const divs_s = document.querySelectorAll('#div_2 [data-social]');
    for (let i = 0; i < divs_s.length; i++) {
        divs_s[i].classList.add('hidden');
    }

    const prodotto=document.querySelector('#div_2 [data-prodotto="2"]');
    prodotto.classList.remove('hidden');
    prodotto.classList.add('container-biscotti');
    const social=document.querySelector('#div_2 [data-social="2"]');
    social.classList.remove('hidden');
    social.classList.add('container-biscotti');
}
const innesco_pranzo=document.querySelector('#pulsanti_orari [data-index="2"]');
innesco_pranzo.addEventListener('click', Pranzo);


function Merenda(){
    const container_img=document.querySelector('#div_ingresso img');
    container_img.src="https://static.mulinobianco.it/v3/upl/entities/consumptionMomentTimeSlot/momentodiconsumo_04_merenda.png";
    const container_p=document.querySelector('#div_ingresso p');
    container_p.textContent='Ecco alcune idee per la tua merenda';
    
    const divs = document.querySelectorAll('#div_2 [data-prodotto]');
    for (let i = 0; i < divs.length; i++) {
        divs[i].classList.add('hidden');
    }

    const divs_s = document.querySelectorAll('#div_2 [data-social]');
    for (let i = 0; i < divs_s.length; i++) {
        divs_s[i].classList.add('hidden');
    }

    const prodotto=document.querySelector('#div_2 [data-prodotto="3"]');
    prodotto.classList.remove('hidden');
    prodotto.classList.add('container-biscotti');
    const social=document.querySelector('#div_2 [data-social="3"]');
    social.classList.remove('hidden');
    social.classList.add('container-biscotti');



}
const innesco_merenda=document.querySelector('#pulsanti_orari [data-index="3"]');
innesco_merenda.addEventListener('click', Merenda);

function Cena(){
    const container_img=document.querySelector('#div_ingresso img');
    container_img.src="https://static.mulinobianco.it/v3/upl/entities/consumptionMomentTimeSlot/momentodiconsumo_06_cena%20-%20Copy%20(1).png";
    const container_p=document.querySelector('#div_ingresso p');
    container_p.textContent='Ecco alcune idee per la tua cena';
    
    const divs = document.querySelectorAll('#div_2 [data-prodotto]');
    for (let i = 0; i < divs.length; i++) {
        divs[i].classList.add('hidden');
    }

    const divs_s = document.querySelectorAll('#div_2 [data-social]');
    for (let i = 0; i < divs_s.length; i++) {
        divs_s[i].classList.add('hidden');
    }

    const prodotto=document.querySelector('#div_2 [data-prodotto="4"]');
    prodotto.classList.remove('hidden');
    prodotto.classList.add('container-biscotti');
    const social=document.querySelector('#div_2 [data-social="4"]');
    social.classList.remove('hidden');
    social.classList.add('container-biscotti');


}
const innesco_cena=document.querySelector('#pulsanti_orari [data-index="4"]');
innesco_cena.addEventListener('click', Cena);



