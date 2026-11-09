@extends('layout')

@section('title', 'PrimaPagina')


@section('extra_head')
    <link rel="stylesheet" href="{{url('css\index.css')}}" />
    <script src="{{url('js\index.js')}}" defer></script>
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

                <a id="mostra_api" href="{{url('RestApi')}}" target="_blank">Clicca qui per effetture ricerche</a>                


              


                <div class="div_section">
                    <h2>
                       Buongiorno


                    </h2>
                    <p>Ogni giorno, alle 7 del mattino, una rassegna di buone notizie nella tua casella di posta.</p>
                    <a class="a_button" href="https://www.mulinobianco.it/newsletter">Iscriviti</a>
                
                </div>
                <div id="flex_sorprese">
                    
                    <div id="div_sorpresa">
                        <a href="https://ar.mulinobianco.it/tiro-alla-sorpresina?_ga=2.189837230.4848172.1710517048-1059205259.1710517048">
                            <p>Tiro alla Sorpresina</p>
                            <span>Scopri le sorpresine</span>
                        </a>
                    </div>
                    <div id="div_mousse">
                        <a href="https://www.mulinobianco.it/ricette/mousse-di-mele-con-frollini-senza-zuccheri-aggiunti">
                            <p>Mousse di mele con frollini senza zuccheri aggiunti</p>
                            <span>Scopri la Ricetta</span>
                        </a>
                    </div>
                </div>
                <div class="div_section">
                    <h2>Le promozioni del Mulino</h2>
                    <p>Tutte le promozioni che abbiamo pensato per premiare te che ogni giorno scegli i prodotti Mulino Bianco.</p>
                </div>
                <div class="div_section">
                    <div class="flex-container">
                        <div class="flex-container_per_colonne">
                            <img src="images\img013.png" />
                            <h2>Un morso di felicità</h2>
                            <p>Dal 19 settembre al 17 dicembre crea il tuo Morso di Felicità e prova a vincere una delle 1.000 Sandwich Bag Mulino Bianco</p>
                            <a class="a_button" href="https://www.mulinobianco.it/promozioni/dedica-un-morso-di-felicita">Scopri di più</a>
                        </div>
                        <img src="images/img001.png" />
                    </div>
                </div>
                <div class="div_section">
                    
                    <div class="flex-container">
                        <img src="images/img002.png" />
                        <div class="flex-container_per_colonne">
                            <img src="images/img014.png" />
                            <h2>Con le merende vinci una stampante portatile</h2>
                            <p>Dal 9 gennaio al 10 marzo 2024 acquista almeno 1 confezione Mulino Bianco tra i prodotti che partecipano all’iniziativa, gioca lo scontrino e prova a vincere 1 Kodak Step Printer slim e 1 confezione da 20 fogli di carta Kodak Zink.</p>
                            <a class="a_button" href="https://www.mulinobianco.it/promozioni/concorso-stampante-kodak-2024">Vai al concorso</a>
                        </div>
                        
                    </div>
                </div>
                <div class="div_section">
                    <div>
                        <div class="flex-container">
                        <div class="flex-container_per_colonne">
                            <img src="images/img015.png" />
                            <h2>L'Appetito vien farcendo</h2>
                            <p>Dal 9 gennaio al 2 aprile 2024 acquista almeno 2 confezioni di Pani Mulino Bianco che partecipano all’iniziativa, gioca lo scontrino e prova a vincere 1 set per farcire.</p>
                            <a class="a_button" href="https://www.mulinobianco.it/promozioni/appetito-vien-farcendo">Partecipa al concorso</a>
                        </div>
                        <img src="images/img003.png" />
                        </div>
                    </div>
                </div>
                
                


               
                <div id="div_2">
                
                    <div id="div_ingresso">
                        <img src="https://www.mulinobianco.it/origin0/v3/upl/entities/consumptionMomentTimeSlot/momentodiconsumo_01_colazione.png" />
                        <div>
                            <h2>Lasciati ispirare!</h2>
                            <p>Ecco alcune idee per la tua colazione.</p>
                           
                        </div>
                        
                    
                    </div>
                    <div id="pulsanti_orari">
                        <a data-index="1">7:00</a>
                        <a data-index="2">12:00</a>
                        <a data-index="3">16:00</a>
                        <a data-index="4">20:00</a>
                    </div>
                    <div class="container-biscotti" data-prodotto="1" >
                        <div class="div_biscotti">
                            <span>Suggerito dal mulino</span>
                            <h3>Ritronelli</h3>
                            <a href="https://www.mulinobianco.it/ritornelli"><img src="https://static.mulinobianco.it/v3/upl/entities/product/biscotti/nudo_biscotto_ritornelli.png" /></a>
                            <p class="p_riquadro">4 RITORNELLI (48,8 G) + 1 CAPPUCCINO (125 ML DI LATTE INTERO + CAFFÈ) + 1 COPPETTA DI FRUTTI DI BOSCO (150 G) = 1580 KJ / 378 KCAL</p>
                        </div>
                        <div class="div_biscotti">
                            <span>Suggerito dal mulino</span>
                            <h3>Fette Biscottate ai Cereali</h3>
                            <a href="https://www.mulinobianco.it/le-cereali"><img src="https://www.mulinobianco.it/origin0/v3/upl/entities/product/nudo_pani_fettecereali.png" /></a>
                            <p class="p_riquadro">4 FETTE BISCOTTATE AI CEREALI (39,2G)+ 4 CUCCHIAINI DI MARMELLATA DI FRUTTI DI BOSCO (40G)+ 1 CAPPUCCINO (125 ML DI LATTE INTERO + CAFFÈ)= CIRCA 1.370 KJ / 327 KCAL</p>
                        </div>
                        <div class="div_biscotti">
                            <span>Preferiti dalla community</span>
                            <h3>Baiocchi</h3>
                            <a href="https://www.mulinobianco.it/baiocchi"><img src="https://static.mulinobianco.it/v3/upl/entities/product/Baiocchi.png" /></a>
                            <p class="p_riquadro">4 BAIOCCHI (37,2 G) + 1 CAPPUCCINO (125 ML) + ZUCCHERO (5 G) + 1 ARANCIA (150 G) = 1440 KJ / 344 KCAL </p>
                        </div>
                    </div>
                    <div class="container-biscotti" data-social="1">

                        <div class="div_yougurt">
                            <img src="https://static.mulinobianco.it/v3/upl/entities/consumptionMomentTimeSlot/tips_01.png" />
                            <h3>Yogurt</h3>
                            <p>Lo yogurt è il miglior alleato per il benessere della pelle e dell’intestino. Ottimo insieme a un Plumcake Integrale!</p>
                        </div>

                        <div class="div_biscotti">
                            <a href="https://www.instagram.com/p/BQNUVU-AUmc/?taken-by=mulinobianco" target="_blank"><img src="https://static.mulinobianco.it/v3/upl/entities/socialItem/fioridilatte_70217.jpg" /></a>
                            <p class="p_social"><strong>Fiori di latte:</strong> la semplicità degli ingredienti, la leggerezza della 
                                cottura al vapore. Il gusto pieno del latte in un frollino con il 40% di grassi in meno. #mulinobianco
                            </p>
                        </div>


                        <div class="div_biscotti">
                            <a  href="https://www.facebook.com/MulinoBianco/photos/a.263399717251.143638.16995627251/10154496296052252/?type=3&theater" target="_blank"><img src="https://static.mulinobianco.it/v3/upl/entities/socialItem/cornettiintegrali_0317.jpg" /></a>
                            <p class="p_social"><strong>Cornetti Integrali:</strong> 
                                un soffice risveglio per iniziare la giornata con energia. #mulinobianco
                            </p>
                        </div>

                    </div>

                    <div class="hidden" data-prodotto="2" >
                        <div class="div_biscotti">
                            <span>Suggerito dal mulino</span>
                            <h3>Pan Bauletto Integrale</h3>
                            <a href="https://www.mulinobianco.it/pan-bauletto-integrale"><img src="https://static.mulinobianco.it/v3/upl/entities/product/FB_AW_1297_NEW_MB_PANBAULETTO_INTEGRALI_400g_v2_MORSO_FELICITA.png" /></a>
                            <p class="p_riquadro">2 FETTE DI PAN BAULETTO INTEGRALE (47,2 G)+ SALMONE AFFUMICATO (25 G)+ CAPRINO (80 G)= 1498 KJ / 358 KCAL</p>
                        </div>
                        <div class="div_biscotti">
                            <span>Suggerito dal mulino</span>
                            <h3>Piadelle Integrali</h3>
                            <a href="https://www.mulinobianco.it/piadelle-integrali"><img src="https://static.mulinobianco.it/v3/upl/entities/product/nudo_pani_piadelleintegrali.png" /></a>
                            <p class="p_riquadro">1 PIADELLA INTEGRALE (75 G)+ POMODORINI (100 G)+ ZUCCHINE GRIGLIATE (100 G) + MOZZARELLA (50 G)= 1732 KJ / 415 KCAL</p>
                        </div>
                        <div class="div_biscotti">
                            <span>Preferiti dalla community</span>
                            <h3>Pan Bauletto Bianco</h3>
                            <a href="https://www.mulinobianco.it/pan-bauletto-bianco"><img src="https://static.mulinobianco.it/v3/upl/entities/product/FB_AW_1294_NEW_MB_PANBAULETTO_BIANCO_400g_v2_MORSO_FELICITA.png" /></a>
                            <p class="p_riquadro">1 FETTA DI PAN BAULETTO BIANCO (23,6 G)+ ZUCCHINE GRIGLIATE (25 G)+ MOZZARELLA (50 G)= 803 KJ / 192 KCAL </p>
                        </div>
                    </div>

                    <div class="hidden" data-social="2">

                        <div class="div_yougurt">
                            <img src="https://static.mulinobianco.it/v3/upl/entities/consumptionMomentTimeSlot/tips_03.png" />
                            <h3>La frutta di stagione</h3>
                            <p>Per fare il pieno di nutrienti, vitamine e fibre completa il tuo pranzo con frutta di stagione. Mela e kiwi, ad esempio, sono equilibrati nel sapore e ricchi di sali minerali.</p>
                        </div>

                        <div class="div_biscotti">
                            <a href="https://www.instagram.com/p/BQ7mnZcBnYW/?taken-by=mulinobianco" target="_blank"><img src="https://static.mulinobianco.it/v3/upl/entities/socialItem/piadelleintregrali_250217.png" /></a>
                            <p class="p_social"><strong>Piadelle Integrali</strong>con pomodorini secchi, caprino, olive e pinoli. #mulinobianco
                            </p>
                        </div>


                        <div class="div_biscotti">
                            <a href="https://www.facebook.com/MulinoBianco/photos/a.263399717251.143638.16995627251/10154993661647252/?type=3&theater" target="_blank"><img src="https://static.mulinobianco.it/v3/upl/entities/socialItem/unnamed.jpg" /></a>
                            <p class="p_social">Sushi con il <strong>Cuor di pane</strong>? Veloce da preparare e buonissimo! #mulinobianco
                            </p>
                        </div>

                    </div>



                    <div class="hidden" data-prodotto="3">
                        <div class="div_biscotti">
                            <span>Suggerito dal mulino</span>
                            <h3>Flauti Stracciatella</h3>
                            <a href="https://www.mulinobianco.it/flauti-stracciatella"><img src="https://static.mulinobianco.it/v3/upl/entities/product/thumb_flautostracc%20-%20Copy%20(1).png" /></a>
                            <p class="p_riquadro">1 FLAUTO STRACCIATELLA (35 G)+ 1 MELA (150 G)= 821 KJ / 196 KCAL</p>
                        </div>
                        <div class="div_biscotti">
                            <span>Suggerito dal mulino</span>
                            <h3>Pan Goccioli</h3>
                            <a href="https://www.mulinobianco.it/pan-goccioli"><img src="https://static.mulinobianco.it/v3/upl/entities/product/nudo_merende_pangoccioli_def.png" /></a>
                            <p class="p_riquadro">1 PAN GOCCIOLO + 1 SPREMUTA D'ARANCIA FRESCA (200 ML) = 866 KJ / 206 KCAL</p>
                        </div>
                        <div class="div_biscotti">
                            <span>Preferiti dalla community</span>
                            <h3>Baiocchi</h3>
                            <a href="https://www.mulinobianco.it/plumcake-classico"><img src="https://static.mulinobianco.it/v3/upl/entities/product/gallery_plumcake_classico.png" /></a>
                            <p class="p_riquadro">1 PLUMCAKE CLASSICO (33G)+ 1 CAPPUCCINO (125ML)+ 1 BANANA (150G) = 1314 KJ / 314 KCAL</p>
                        </div>
                    </div>

                    <div class="hidden" data-social="3">

                        <div class="div_yougurt">
                            <img src="https://static.mulinobianco.it/v3/upl/entities/consumptionMomentTimeSlot/tips_04.png" />
                            <h3>Spremuta d’arancia</h3>
                            <p>Il succo d’arancia è un concentrato di vitamine e di sali minerali come calcio e fosforo. Ricordarti di consumarlo appena spremuto perché le vitamine tendono a ossidarsi.</p>
                        </div>

                        <div class="div_biscotti">
                            <a href="https://www.instagram.com/p/BYqWfQtnW2F/?taken-by=mulinobianco" target="_blank"><img src="https://static.mulinobianco.it/v3/upl/entities/socialItem/mb_pangoccioli_tartaruga.jpg" /></a>
                            <p class="p_social"><strong>Pan Goccioli:</strong>sorprendi i tuoi bimbi con una merenda divertente! #mulinobianco
                            </p>
                        </div>


                        <div class="div_biscotti">
                            <a href="https://www.instagram.com/p/BYYRplEHu-p/?taken-by=mulinobianco" target="_blank"><img src="https://static.mulinobianco.it/v3/upl/entities/socialItem/mb_gelato_buongrano.jpg" /></a>
                            <p class="p_social">Ghiaccioli con granella di <strong>Buongrano</strong>, yogurt e frutti di bosco: il gelato perfetto per una merenda divertente e colorata. #piuchebuonibuongrano
                            </p>
                        </div>

                    </div>



                    <div class="hidden" data-prodotto="4">
                        <div class="div_biscotti">
                            <span>Suggerito dal mulino</span>
                            <h3>Piadelle Integrali</h3>
                            <a href="https://www.mulinobianco.it/piadelle-integrali"><img src="https://static.mulinobianco.it/v3/upl/entities/product/nudo_pani_piadelleintegrali.png" /></a>
                            <p class="p_riquadro">1 PIADELLA INTEGRALE (75 G)+ POMODORINI (100 G)+ ZUCCHINE GRIGLIATE (100 G) + MOZZARELLA (50 G)= 1732 KJ / 415 KCAL</p>
                        </div>
                        <div class="div_biscotti">
                            <span>Suggerito dal mulino</span>
                            <h3>Gran Bauletto Rustico</h3>
                            <a href="https://www.mulinobianco.it/gran-bauletto-rustico"><img src="https://static.mulinobianco.it/v3/upl/entities/product/FB_AW_18364_NEW_MB_GRANBAULE_RUSTICO.png" /></a>
                            <p class="p_riquadro">2 FETTE DI GRAN BAULETTO RUSTICO (77 G)+ PROSCIUTTO CRUDO (25 G)+ FONTINA (25 G) + POMODORO (50 G) = 1454 KJ / 348 KCAL</p>
                        </div>
                        <div class="div_biscotti">
                            <span>Preferiti dalla community</span>
                            <h3>Pan Bauletto Bianco</h3>
                            <a href="https://www.mulinobianco.it/pan-bauletto-bianco"><img src="https://static.mulinobianco.it/v3/upl/entities/product/FB_AW_1294_NEW_MB_PANBAULETTO_BIANCO_400g_v2_MORSO_FELICITA.png" /></a>
                            <p class="p_riquadro">1 FETTA DI PAN BAULETTO BIANCO (23,6 G)+ ZUCCHINE GRIGLIATE (25 G)+ MOZZARELLA (50 G)= 803 KJ / 192 KCAL </p>
                        </div>
                    </div>

                    <div class="hidden" data-social="4">

                        <div class="div_yougurt">
                            <img src="https://static.mulinobianco.it/v3/upl/entities/consumptionMomentTimeSlot/tips_06.png" />
                            <h3>Farina Integrale</h3>
                            <p>Per la tua cena, scegli integrale. La farina integrale contiene tutti i nutrienti del seme: i sali minerali, gli amminoacidi e le vitamine. Dal punto di vista nutrizionale è quindi un alimento prezioso.</p>
                        </div>

                        <div class="div_biscotti">
                            <a href="https://www.instagram.com/p/BUMlpdxh58A/?taken-by=mulinobianco" target="_blank"><img src="https://static.mulinobianco.it/v3/upl/entities/socialItem/mb_ricetta_bauletti01.jpg" /></a>
                            <p class="p_social"><strong>Pan Bauletto Classico</strong> con bresaola, zucchine, stracchino e pomodoro o <strong>Gran Bauletto Rustico</strong>con gorgonzola, mela verde, noci e sedano: qual è il vostro panino preferito?
                            </p>
                        </div>


                        <div class="div_biscotti">
                            <a href="https://www.instagram.com/mulinobianco/p/BXm8CfchqeK/"><img src="https://static.mulinobianco.it/v3/upl/entities/socialItem/mb_pancagnetti.jpg" /></a>
                            <p class="p_social">Il bello di cucinare per loro e vederli sorridere: un hot dog che i tuoi bambini adoreranno. #pagnottelle
                            </p>
                        </div>

                    </div>




                </div>
                

                <div class="div_larghezza_ridotta">
                    <h2>Con il “TrovaBontà” è facile</h2>
                    <p>Il nostro impegno è da sempre quello di fare i prodotti più buoni pensando ai gusti e alle <strong>esigenze del maggior
                        numero possibile di persone</strong>, l’ampia gamma di prodotti Mulino Bianco ne è una dimostrazione.
                        Scopri il <strong>prodotto più adatto</strong> alle tue esigenze alimentari nei vari <strong>momenti della giornata.</strong></p>
                    <h3>Cosa ti piacerebbe oggi?</h3>
                    <img class="img_menu" src="images/img006.png" />
                </div>
                <img id="img_ballerina" src="images/img007.png" />
                <div class="div_larghezza_ridotta">
                    <h2>Al Mulino ricerchiamo la Qualità</h2>
                    <p>Nelle sei fabbriche presenti in Italia, disponiamo di macchinari ad alta tecnologia che riproducono l'esatto ciclo produttivo casalingo con una precisa capacità di controllo della qualità.</p>
                </div>
                <div class="div_larghezza_ridotta flex-container">
                    <div>
                        <img src="https://www.mulinobianco.it/origin0/v3/upl/entities/page/spighette.png" />
                        <span>120</span>
                        <p>analisi al giorno sulla farina</p>
                    </div>
                    <div>
                        <img src="https://www.mulinobianco.it/origin0/v3/upl/entities/page/miele.png" />
                        <span>4</span>
                        <p>analisi al minuto su materie prime, prodotti e imbalaggi</p>
                    </div>
                    <div>
                        <img src="https://www.mulinobianco.it/origin0/v3/upl/entities/page/latte.png" />
                        <span>6000</span>
                        <p>controlli all’anno sul latte</p>
                    </div>
                    
                </div>
               
                <div class="div_larghezza_ridotta"><a class="a_button" href="https://www.mulinobianco.it/natura/filiera">Scopri la filiera</a></div>
                
               



                <div id="div4">
                    <div>
                        <div class="div_per_colonne">
                            <a href="https://www.mulinobianco.it/prodotti/biscotti-e-dolcetti">
                                <img src="https://www.mulinobianco.it/origin0/v3/upl/entities/productCategory/biscotti_menu.png" />
                                <p>BISCOTTI E DOLCETTI</p>
                            </a>
                        </div>
                        <div class="div_per_colonne">
                            <a href="https://www.mulinobianco.it/prodotti/fette-biscottate" >
                                <img src="https://www.mulinobianco.it/origin0/v3/upl/entities/productCategory/fette_menu_ok.png" />
                                <p>FETTE BISCOTTATE</p>
                            </a>
                        </div>
                        <div class="div_per_colonne">
                            <a href="https://www.mulinobianco.it/prodotti/merendine-e-torte">
                                <img src="https://www.mulinobianco.it/origin0/v3/upl/entities/productCategory/torte_e_crostatine_menu.png" />
                                <p>MERENDINE E TORTE</p>
                            </a>
                        </div>
                        <div class="div_per_colonne">
                            <a href="https://www.mulinobianco.it/prodotti/merendine-e-torte" >
                                <img src="https://www.mulinobianco.it/origin0/v3/upl/entities/productCategory/panimorbidi_menu.png" />
                                <p>PANI MORBIDI E PANINI</p>
                            </a>
                        </div>
                        <div class="div_per_colonne">
                            <a href="https://www.mulinobianco.it/prodotti/pani-croccanti-e-cracker">
                                <img src="https://www.mulinobianco.it/origin0/v3/upl/entities/productCategory/panicroccanti_menu.png" />
                                <p>PANI CROCCANTI E CRACKER</p>
                            </a>
                        </div>
                        <div class="div_per_colonne">
                            <a href="https://www.mulinobianco.it/gelati">
                                <img src="https://www.mulinobianco.it/origin0/v3/upl/entities/productCategory/baiocchi_gelato.png" />
                                <p>GELATI</p>
                            </a>
                        </div>
                    </div>
                    <div class="white_div">
                        <h2>Ogni mattina, tre belle notizie!</h2>
                        <p>Iscriviti gratuitamente alla nuova <strong>newsletter Tre Notizie a Colazione.</strong> Ogni giorno, alle 7 del mattino,
                        una <strong>rassegna di buone notizie</strong> a cura della redazione giornalistica di Good Morning Italia.</p>
                        <a class="a_button" href="https://www.mulinobianco.it/login?urlBack=/newsletter">Iscriviti</a>
                    </div>
                </div> 
                
            </section>


@endsection

