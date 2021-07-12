<html>
    <head> 
        <meta charset="utf-8">
        <title Associazioni donazioni sangue Currao></title>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Merriweather+Sans&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='{{url("css/head&foot.css")}}'>
        <link rel="stylesheet" href='{{url("css/reg.css")}}'>
        <script src='{{url("js/reg.js")}}' defer></script>
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
                        <a href = '{{url("login")}}'>Accedi</a>
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
        <section id="f">
            <div id="center">
                <div id="form">
                    <form name='signup' method='post' enctype="multipart/form-data" autocomplete="off">
                        {{csrf_field()}}
                        <div class="names">
                            <div class="name">
                                <div><label for='name'>Nome</label></div>
                                <div><input type='text' name='name' <?php if(isset($_POST["name"])){echo "value=".$_POST["name"];} ?> ></div>
                                <span class="hide">Inserisci il nome</span>
                            </div>
                            <div class="surname">
                                <div><label for='surname'>Cognome</label></div>
                                <div><input type='text' name='surname' <?php if(isset($_POST["surname"])){echo "value=".$_POST["surname"];} ?> ></div>
                                <span class="hide">Inserisci il cognome</span>
                            </div>
                        </div>
                        <div class="cf">
                            <div><label for='cf'>Codice fiscale</label></div>
                            <div><input type='text' name='cf' <?php if(isset($_POST["cf"])){echo "value=".$_POST["cf"];} ?>></div>
                            <span class="hide">Codice fiscale già registrato</span>
                        </div>
                        <div class="email">
                            <div><label for='email'>Email</label></div>
                            <div><input type='text' name='email' <?php if(isset($_POST["email"])){echo "value=".$_POST["email"];} ?>></div>
                            <span class="hide">Indirizzo email non valido</span>
                        </div>
                        <div class="password">
                            <div><label for='password'>Password</label></div>
                            <div><input type='password' name='password' <?php if(isset($_POST["password"])){echo "value=".$_POST["password"];} ?>></div>
                            <span class ="hide">Inserisci almeno 8 caratteri</span>
                        </div>
                        <div class="confirm_password">
                            <div><label for='confirm_password'>Conferma Password</label></div>
                            <div><input type='password' name='confirm_password' <?php if(isset($_POST["confirm_password"])){echo "value=".$_POST["confirm_password"];} ?>></div>
                            <span class="hide">Le password non coincidono</span>
                        </div>
                        <div class="allow"> 
                            <div><input type='checkbox' name='allow' value="1" <?php if(isset($_POST["allow"])){echo $_POST["allow"] ? "checked" : "";} ?>></div>
                            <div><label for='allow'>Acconsento all'utilizzo dei dati personali</label></div>
                        </div>
                        <div class="submit">
                            <input type='submit' value="Registrati" id="submit" disabled>
                        </div>
                    </form>
                    <div>Hai un account? <a href="{{url('login')}}">Accedi</a></div>
                </div>
                <img src='{{url("immagini/reg.jpg")}}'>
            </div>
        </section>
        <footer>
            <address>Currao Giuseppe - 1000007919</address>
            <h1>Progetto di WebProgramming</h1>
        </footer>
    </body>
</html>
