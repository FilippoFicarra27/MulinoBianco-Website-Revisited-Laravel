<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function news(){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://news-api14.p.rapidapi.com/top-headlines?language=it",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: news-api14.p.rapidapi.com",
                "X-RapidAPI-Key: 05ccf752c1msh518fe3c44ef2566p1a9d21jsnfe4c5c0dff56"
            ],
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
        
    }

    public function spotify($autore){
        $client_id = "d6e714fea40b4a6da1f437e49c8afe80";
        $client_secret = "413efddbe3194b73addf82cfcd0bc80f";



        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://accounts.spotify.com/api/token' );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials'); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret))); 
        $token=json_decode(curl_exec($ch), true);
        curl_close($ch);    

       
        $url = 'https://api.spotify.com/v1/search?type=track&q='.urlencode($autore);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token['access_token'])); 
        $res=curl_exec($ch);
        curl_close($ch);

        return $res;

    }

    public function cocktail($num){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://the-cocktail-db3.p.rapidapi.com/".$num,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: the-cocktail-db3.p.rapidapi.com",
                "X-RapidAPI-Key: 05ccf752c1msh518fe3c44ef2566p1a9d21jsnfe4c5c0dff56"
            ],
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            return"cURL Error #:" . $err;
        } else {
            return $response;
        }
        

    }

    public function voli($volo){
        $client_id = "gdm40Ol9CLcBDDbhRjRNVtvA6A2wlJBn";
        $client_secret = "wpKOfAVAblcyCHMZ";
    
    
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://test.api.amadeus.com/v1/security/oauth2/token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials'); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret))); 
        $token=json_decode(curl_exec($ch), true);
        curl_close($ch);    
    
    
        
        $url = 'https://test.api.amadeus.com/v1/shopping/flight-destinations?origin=PAR&maxPrice='.$volo;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token['access_token'])); 
        $res=curl_exec($ch);
        curl_close($ch);
    
        return $res;
    
    }
}
