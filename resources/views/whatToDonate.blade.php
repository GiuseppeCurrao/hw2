<html>
    <head>
        <link rel='stylesheet' href='{{url("css/head&foot.css")}}'>
        <link rel='stylesheet' href='{{url("css/home.css")}}'>
    </head>
    <body>
        <header>
            <nav>
                <div id="logo">
                    <div id= "img">
                         <a href='{{url("/")}}'><img src='{{url("immagini/logo.png")}}' ></a>
                    </div>
                    <a href='{{url("/")}}'>Cads</a>
                </div>
                <a class="buttom" href = '{{url("locali")}}'>
                    Trova sedi vicine 
                </a>
                <div id="links">
                    <a href='{{url("/")}}'>Home</a>
                    <a href ='{{url("login")}}'>Accedi</a>
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
        <section>
            <div id="main">
                <h1> Cosa posso donare</h1>
                <div>
                    <img src='{{url("immagini/main.jpg")}}'></br>
                    <a class="details"> Esistono diverse tipologie di donazione: quella di sangue intero, quella di plasma (plasmaferesi), 
                        oppure di piastrine (piastrinoaferesi), e la donazione multipla di emocomponenti.
                    </a> </br>               
                </div>
            </div>
            <div id = "first">
                <div>
                    <h1>Ogni quanto posso donare</h1> </br>
                    <a class= "details"> A seconda del tipo di donazione che vuoi effettuare, dovrai aspettare più o meno tempo per permettere al tuo
                        corpo di recuperare. Tra due donazioni del sangue bisogna aspettare 90 giorni, tra una donazione di sangue e un'aferesi/piastrinoferesi 
                        30 giorni, per il resto 14 giorni. 
                    </a></br>
                </div>
                <img src='{{url("immagini/donazione.png")}}'> 
            </div>
        </section>
        <footer>
            <address>Currao Giuseppe - 1000007919</address>
            <h1>Progetto di WebProgramming</h1>
        </footer>
    </body>
</html>
