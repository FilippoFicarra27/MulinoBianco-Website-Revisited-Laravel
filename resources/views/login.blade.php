@extends('layout')


@section('title', 'Login')

@section('extra_head')
    <link rel="stylesheet" href="{{url('css/login_account.css')}}">

@endsection


@section('content')
<section>
                <img id="immagine_omino" src="https://t4.ftcdn.net/jpg/01/93/29/59/360_F_193295910_NtF2kPvo4hsDv8VjHulzAhn2nN0444EI.jpg" />
                <div id="div_registrazione_accesso">
                    <div id="div_registrazione">
                        <h2>Registrati</h2>
                        <p>per entrare nel mondo Mulino Bianco</p>
                        <a class="a_button sfondo_grigio" href="{{url('registrazione')}}">Prosegui</a>
                    </div>
                    <div id="div_accesso">
                        <h2>Accedi</h2>
                        <div class="riga_grigia">
                            <p>Accedi <strong>rapidamente</strong> con un <strong>codice temporaneo</strong></p>
                            <div id="credenziali_mail_telefono">
                                <a class="a_button sfondo_blu" href="https://www.mulinobianco.it/login?urlBack=/login?urlBack=/home">
                                    Via email
                                    <img src="images/img016.png">
                                </a>
                                <a class="a_button sfondo_blu" href="https://www.mulinobianco.it/login?urlBack=/home">
                                    Via cellulare
                                    <img src="images/img017.png">
                                </a>
                            </div>
                            <p>oppure inserisci i tuoi dati</p>
                            <form action="{{ url('login') }}" method="post">
                                @csrf
                                <p>Email</p>
                                <input class="testo_form" type="text" name="Email" value="{{old('Email')}}">
                                <p>Password</p>
                                <input class="testo_form" type="password" name="password" value='{{old("password")}}'>
                                
                                <input class="a_button sfondo_grigio" type="submit" value="Entra">
                                
                               
                            </form>
                            @if($errore=='credenziali_invalide')
                                <h4>Errore! Credenziali non valide</h4>
                            @endif
                            <p>Oppure accedi usando il tuo social</p>
                            <div id="social_login">
                                <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=810483797496217&kid_directed_site=0&app_id=810483797496217&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv17.0%2Fdialog%2Foauth%3Fresponse_type%3Dcode%26client_id%3D810483797496217%26redirect_uri%3Dhttps%253A%252F%252Fbda-cdc-it.mulinobianco.it%252FGS%252FGSLogin.aspx%26scope%3Demail%26state%3Dyc463l70n4055151h7tk1.X0TLYi5pTTsJvu4m3BmRc2IuwGxs-cC93o0sFhThojY.1715892151%26display%3Dpopup%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3Dc28a85e1-1a65-4310-b3af-d92d2c9ce321%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fbda-cdc-it.mulinobianco.it%2FGS%2FGSLogin.aspx%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Dyc463l70n4055151h7tk1.X0TLYi5pTTsJvu4m3BmRc2IuwGxs-cC93o0sFhThojY.1715892151%23_%3D_&display=popup&locale=it_IT&pl_dbl=0" target="_blank">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/cd/Facebook_logo_%28square%29.png">
                                </a>
                                <a href="https://accounts.google.com/o/oauth2/v2/auth/oauthchooseaccount?response_type=code&client_id=941533787888-kc4oo960roa5ulnnmpql9nv88quj1q5o.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Fbda-cdc-it.mulinobianco.it%2FGS%2FGSLogin.aspx%3F&scope=profile%20email&state=yc463l70n4055151h7.np.tk1..AtLtiypjZw.lAnsosCujOrgR0CHTm1WdgM-knlYncectLZTC-ni71I.gcSrKtuKOI9ph2mgrLhWiy5Fax1dEx9d1mhsIMVOynhNsHZnOd5U-036ueHO1JffY4DNXvAoimZh-KGExz6mXw.sc3&hl=it&service=lso&o2v=2&ddm=0&flowName=GeneralOAuthFlow"  target="_blank">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQafX9X4oVKEEpBfQvuaw-VyYNuaYCyzhRwght_1_JfmA&s">
                                </a>
                                <a href="https://api.twitter.com/oauth/authenticate?oauth_token=G8wuCwAAAAAAyMLVAAABj4MY4hk&lang=it" target="_blank">
                                     <img src="data:image/png;base64,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"  >
                                </a>
                               
                            </div>
                        </div>
                        
                    </div>
                </div>
                <p>Per conoscere come ci prendiamo cura dei tuoi dati personali, consulta la nostra <a class="sottolineato" href="https://www.mulinobianco.it/privacy" target="_blank">Privacy Policy</a></p>
            </section>


@endsection

