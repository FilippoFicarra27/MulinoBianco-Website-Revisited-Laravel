function validazione_password(event){
    const input_password_vecchia=document.querySelector('#p_vecchia');
    const input_value=encodeURIComponent(input_password_vecchia.value);
    if(input_value.length=== 0){
        event.preventDefault();

        console.log('lunghezza mancante');
        const mostra_mancanza_password_vecchia=document.querySelector('#p_vecchia_mancante');
        mostra_mancanza_password_vecchia.classList.remove('hidden');
    }
    const input_password_nuova=document.querySelector('#p_nuova');
    const value_password_nuova=encodeURIComponent(input_password_nuova.value);  
    if(value_password_nuova.length=== 0){
        event.preventDefault();
        console.log('lunghezza mancante');
        console.log(value_password_nuova.length);
        const mostra_mancanza_password_nuova=document.querySelector('#p_nuova_mancante');
        mostra_mancanza_password_nuova.classList.remove('hidden');
    }
    
    
    const input_password_conferma=document.querySelector('#p_conferma');
    const value_password_conferma=encodeURIComponent(input_password_conferma.value);
        if(value_password_conferma.length=== 0){
            event.preventDefault();
            console.log('lunghezza mancante');
            const mostra_mancanza_password_conferma=document.querySelector('#p_conferma_mancante');
            mostra_mancanza_password_conferma.classList.remove('hidden');
        }
    

    
}   

const form_registrazione = document.querySelector('#mio_profilo');
form_registrazione.addEventListener('submit', validazione_password);