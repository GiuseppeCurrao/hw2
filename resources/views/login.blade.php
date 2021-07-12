<html>
    <head> 
        <meta charset="utf-8">
        <title Associazioni donazioni sangue Currao></title>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Merriweather+Sans&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='{{url("css/head&foot.css")}}'>
        <link rel="stylesheet" href='{{url("css/login.css")}}'>
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
        <section id="center">
            <section class ="form">
                <form name="login" method= "post" action = "{{url('/login/pers')}}" >
                    <h3>Area dipendenti</h3>
                    {{csrf_field()}}
                    <div class="username">
                        <div><label for='id_dip'>ID personale</label></div>
                        <div><input type='text' name='id_dip' value = '{{old("id")}}' ></div>
                    </div>
                    <div class="password">
                        <div><label for='mpassword'>Password</label></div>
                        <div><input type='password' name='mpassword'></div>
                    </div>
                    <div>
                        <input type="submit" value="Accedi"> 
                    </div>
                </form>
                <img src='{{url("immagini/doc.png")}}'>
            </section>
            <section class ="form">
                <form name="login" method= "post" action= "{{url('/login/don')}}">
                    <h3>Area donatori</h3>
                    {{csrf_field()}}
                    <div class="cf">
                        <div><label for='cf'>Codice fiscale</label></div>
                        <div><input type='text' name='cf' value='{{old("cf")}}'></div>
                    </div>
                    <div class="password">
                        <div><label for='password'>Password</label></div>
                        <div><input type='password' name='password'></div>
                    </div>
                    <div>
                        <input type="submit" value="Accedi"> 
                    </div>
                    <div class="signup">Non hai un account? <a href='{{url("register")}}'>Registrati</a></div>
                </form>
                <img src='{{url("immagini/drop.png")}}'>
            </section>
        </section>
    </body>
</html>
