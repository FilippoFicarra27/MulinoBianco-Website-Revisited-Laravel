function validazione_registrazione(event){
    const input_nome=document.querySelector('#nome_u');
    const input_value=encodeURIComponent(input_nome.value)  
    if(input_value.length=== 0){
        event.preventDefault();
        console.log('lunghezza mancante');
        const mostra_mancanza_nome=document.querySelector('#nome_utente');
        mostra_mancanza_nome.classList.remove('hidden');
    }
    const input_cognome=document.querySelector('#cognome_u');
    const value_cognome=encodeURIComponent(input_cognome.value)  
    if(value_cognome.length=== 0){
        event.preventDefault();
        console.log('lunghezza mancante');
        const mostra_mancanza_cognome=document.querySelector('#cognome_mancante');
        mostra_mancanza_cognome.classList.remove('hidden');
    }
    const input_mail=document.querySelector('#mail_u');
    const value_mail=encodeURIComponent(input_mail.value)  
        if(value_mail.length=== 0){
            event.preventDefault();
            console.log('lunghezza mancante');
            const mostra_mancanza_mail=document.querySelector('#mail_mancante');
            mostra_mancanza_mail.classList.remove('hidden');
        }
    const input_data=document.querySelector('#data_u');
    const value_data=encodeURIComponent(input_data.value)  
        if(value_data.length=== 0){
            event.preventDefault();
            console.log('lunghezza mancante');
            const mostra_mancanza_data=document.querySelector('#data_mancante');
            mostra_mancanza_data.classList.remove('hidden');
        }


    const input_password=document.querySelector('#password_u');
    const value_password=encodeURIComponent(input_password.value)  
        if(value_password.length=== 0){
            event.preventDefault();
            console.log('lunghezza mancante');
            const mostra_mancanza_password=document.querySelector('#password_mancante');
            mostra_mancanza_password.classList.remove('hidden');
        }
    const input_conferma=document.querySelector('#conferma_u');
     const value_conferma=encodeURIComponent(input_conferma.value)  
        if(value_conferma.length=== 0){
            event.preventDefault();
            console.log('lunghezza mancante');
            const mostra_mancanza_conferma=document.querySelector('#conferma_mancante');
            mostra_mancanza_conferma.classList.remove('hidden');
        }
    
}   

const form_registrazione = document.querySelector('#form_registrazione');
form_registrazione.addEventListener('submit', validazione_registrazione);