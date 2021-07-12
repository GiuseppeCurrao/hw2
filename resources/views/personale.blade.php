<html>
    <head> 
        <meta charset="utf-8">
        <title Associazioni donazioni sangue Currao></title>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Merriweather+Sans&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='{{url("css/head&foot.css")}}'>
        <link rel="stylesheet" href='{{url("css/dip.css")}}'>
        <script src='{{url("js/dip.js")}}' defer></script>
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
                        <a href = '{{url("logout")}}'>logout</a>
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
                <div class="link" id ="analisi">
                    <a>Carica analisi</a> <img src="{{url('immagini/person.png')}}">
                </div>
                <div class="link" id="Tdip">
                    <a>Cerca dipendente</a> <img src='{{url("immagini/hospital.png")}}'>
                </div>
                <div class = "hidden" id = "home"> 
                <a>Home</a> <img src='{{url("immagini/home.png")}}'>
                </div>
            </section>
            <section id="centro">
                <div class="dip" id="dip">
                    <h3>Dove lavori</h3>
                    <div id="dati">
                        <div id="Nome">
                        </div>
                        <div id="luogo">
                        </div>
                        <div id="giorno">
                        </div>
                    </div>
                </div>

                <div class="an" id="an">
                    <h3>Carica valori analisi</h3>
                        <form name="Analisi" method= "post" action ="{{url('/personale/carica')}}">
                            {{csrf_field()}}
                            <div class="coddona">
                                <div><label for='coddona'>Codice donazione</label></div>
                                <div><input type='number' name='coddona' <?php if(isset($_POST["coddona"])){echo "value=".$_POST["coddona"];} ?>></div>
                            </div>
                            <div class="malinf">
                                <div><label for='malinf'>Malattie infettive</label></div>
                                <div><input type='text' name='malinf' <?php if(isset($_POST["malinf"])){echo "value=".$_POST["malinf"];} ?>></div>
                            </div>
                            <div class="valemo">
                                <div><label for='valemo'>Valore emoglobina</label></div>
                                <div><input type='number' name='valemo' <?php if(isset($_POST["valemo"])){echo "value=".$_POST["valemo"];} ?>></div>
                            </div>
                            <div>
                                <input type="submit" value="Carica" id="submit"> 
                            </div>
                        </form>
                </div>

                <div class="trova" id="trova">
                    <h3>Cerca un dipendente tramite il suo nome e cognome</h3>
                    <form id = "Tr" name="Trova">
                            <div class="nome">
                                <div><input type='text' name='cognome' <?php if(isset($_POST["cognome"])){echo "value=".$_POST["cognome"];} ?>></div>
                            </div>
                            <div>
                                <input type="submit" value="Cerca" id="Tsubmit"> 
                            </div>
                            <div id="result">
                                <div id="name"></div>
                                <div id="tel"></div>
                                <div id="type"></div>
                            </div>
                    </form>
                </div>
            </section>
        </section>
    </body>
</html>
