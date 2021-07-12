<html>
    <head> 
        <meta charset="utf-8">
        <title Associazioni donazioni sangue Currao></title>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Merriweather+Sans&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='{{url("css/head&foot.css")}}'>
        <link rel="stylesheet" href='{{url("css/pers.css")}}'>
        <script src='{{url("js/don.js")}}' defer></script>
    </head>
    
    <body>
        <header>
                <nav>
                    <div id="logo">
                        <div id= "img">
                            <a href='{{url("/")}}'><img src="{{url('immagini/logo.png')}}" ></a>
                        </div>
                        <a href= '{{url("/")}}'>Cads</a>
                    </div>
                    <a class="buttom" href = '{{url("locali")}}'>
                        Trova sedi vicine 
                    </a>
                    <div id="links">
                        <a href='{{url("/")}}'>Home</a>
                        <a href = '{{url("logout")}}'>Logout</a>
                    </div>
                    <div id="menù">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </nav>

                <h1>
                    <strong>Associazione </br>donazione sangue</strong>
                </h1>
            </header>
            <section id="main">
            <section id="lato">
                <div class="link" id ="mdati">
                    <a>Modifica informazioni personali</a> <img src="{{url('immagini/person.png')}}">
                </div>
                <div class="link" id="pren">
                    <a>Prenota una donazione</a> <img src="{{url('immagini/hospital.png')}}">
                </div>
                <div class = "hidden" id = "home"> 
                <a>Home</a> <img src="{{url('immagini/home.png')}}">
                </div>
            </section>
            <section id="centro">
                <div class="don" id="don">
                    <h3>Donazioni effettuate</h3>
                    <div id= "cal">
                     <div id="tipo">
                     </div>
                     <div id="quantità">
                     </div>
                     <div id="data">
                     </div>
                    </div>
                </div>

                <div class ="prenotazione hidden" id="prenotazione">
                    <div id=mpren>
                        <h3>Le tue prenotazioni</h3>
                        <div id="mypren">
                            <div id="codice">
                            </div>
                            <div id="pcittà">
                            </div>
                            <div id="pdata">
                            </div>
                        </div>
                    </div>
                    <div id="fpren">
                        <h3>Prenota una donazione</h3>
                        <div id = "effpren"></div>
                    </div>
                </div>
                <div class="form hidden" id= "form">
                    <h3>Modifica i tuoi dati personali</h3>
                    <form name="modificaDati" method= "post" action="{{url('/donatori/mod_dati')}}">
                        {{csrf_field()}}
                        <div class="telefono">
                            <div><label for='telefono'>Telefono</label></div>
                            <div><input type='number' name='telefono'></div>
                            <span class="hide">Inserisci un numero valido</span>
                        </div>
                        <div class="data">
                            <div><label for='data'>Data di nascita</label></div>
                            <div><input type='date' name='data'></div>
                            <span class="hide">Inserisci una data valida</span>
                        </div>
                        <div class="città">
                            <div><label for='città'>Città</label></div>
                            <div><input type='text' name='città'></div>
                            <span class="hide">Inserisci una città valida</span>
                        </div>
                        <div class="via">
                            <div><label for='via'>Via/piazza</label></div>
                            <div><input type='text' name='via'></div>
                            <span class="hide">Inserisci una via valida</span>
                        </div>
                        <div class="peso">
                            <div><label for='peso'>Peso</label></div>
                            <div><input type='text' name='peso'></div>
                            <span class="hide">Inserisci un peso valido</span>
                        </div>
                        <div>
                            <input type="submit" value="Salva i nuovi dati" id="submit"> 
                        </div>
                    </form>
                </div>
            </section>
        </section>
        <footer>
            <address>Currao Giuseppe - 1000007919</address>
            <h1>Progetto di WebProgramming</h1>
        </footer>
    </body>
</html>
