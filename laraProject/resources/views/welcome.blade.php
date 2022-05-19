<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylehome.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <title>HomeAway | @yield('title', 'Home')</title>
</head>
<body>
    <header> 
            <a href=" # " class="logo"><span>Home</span>Away</a>
        <div id="menu">
             @include('layouts/_navpublic')
        </div>
      </header>
 
     @include('layouts/_cover')
                    <div class="texto">
                            <h1>Ultimi annunci</h1>
                            <h3>Annunci che potrebbe interessarti</h3>

                    </div>
      
      <section class="banner ">
          <div class="banner_image"></div>
              <div class="banner_copy">
                  <div class="banner_copy_text">
                    <h3>Camera in Ancona</h3>
                    <p>Camere in affito in Ancona in via brecce bianche, la camera si trova in un'appartamento 
                        di cinque locali vicino all'università, e ha 3 fermate dell'autobus, una fermata della mensa universitaria.
                        Camere in affito in Ancona in via brecce bianche, la camera si trova in un'appartamento 
                        di cinque locali vicino all'università, e ha 3 fermate dell'autobus, una fermata della mensa universitaria.
                    </p>
                    <div class="prezzo">
                          <h4>1 locale</h4>
                         <h4>3 camere da letto</h4>
                         <h4>60m°</h4>
                         <h4>Prezzo: 300 €</h4>
                        
                      <a href="" class="button">Vedi l'annuncio</a>
                    </div>
                   
                    <h5></h5>
              </div>
          </div>
      </section>

      <section class="banner ">
        <div class="banner_image"></div>
            <div class="banner_copy">
                <div class="banner_copy_text">
                  <h3>Camera in Ancona</h3>
                  <p>Camere in affito in Ancona in via brecce bianche, la camera si trova in un'appartamento 
                      di cinque locali vicino all'università, e ha 3 fermate dell'autobus, una fermata della mensa universitaria.
                      Camere in affito in Ancona in via brecce bianche, la camera si trova in un'appartamento 
                      di cinque locali vicino all'università, e ha 3 fermate dell'autobus, una fermata della mensa universitaria.
                  </p>
                  <div class="prezzo">
                        <h4>1 locale</h4>
                       <h4>3 camere da letto</h4>
                       <h4>60m°</h4>
                       <h4>Prezzo: 300 €</h4>
                      
                    <a href="" class="button">Vedi l'annuncio</a>
                  </div>
                 
                  <h5></h5>
            </div>
        </div>
    </section>


    <section class="banner ">
        <div class="banner_image"></div>
            <div class="banner_copy">
                <div class="banner_copy_text">
                  <h3>Camera in Ancona</h3>
                  <p>Camere in affito in Ancona in via brecce bianche, la camera si trova in un'appartamento 
                      di cinque locali vicino all'università, e ha 3 fermate dell'autobus, una fermata della mensa universitaria.
                      Camere in affito in Ancona in via brecce bianche, la camera si trova in un'appartamento 
                      di cinque locali vicino all'università, e ha 3 fermate dell'autobus, una fermata della mensa universitaria.
                  </p>
                  <div class="prezzo">
                        <h4>1 locale</h4>
                       <h4>3 camere da letto</h4>
                       <h4>60m°</h4>
                       <h4>Prezzo: 300 €</h4>
                      
                    <a href="" class="button">Vedi l'annuncio</a>
                  </div>
                 
                  <h5></h5>
            </div>
        </div>
    </section>



    <section class="cards clearfix">
        <div class="card">
            <img class="card_image" src="../public/css/images/chisiamo.jpg/"  alt="Nature">
            <div class="card_modello">
                <h3>Chi siamo</h3>
                <p>La propriété « max-width » appliquera à l’image cible la largeur maximale de son conteneur, le problème est que 
                    la hauteur de l’image ne sera pas adaptée et le ratio de l’image sera donc modifié.
                    Pour résoudre ce problème, il faudra ajouter une propriété « height » avec 
                    la valeur « auto » à l’image pour que la hauteur de l’image s’ajuste en fonction de 
                    la largeur en conservant le ratio initial de l’image.</p>
            </div>
        
        </div>

        <div class="card ">
            <img class="card_image" src="../public/css/images/servizi.jpg"); alt="Nature">
            <div class="card_modello">
                <h3>Nostri servizi</h3>
                <p>La propriété « max-width » appliquera à l’image cible la largeur maximale de son conteneur, le problème est que 
                    la hauteur de l’image ne sera pas adaptée et le ratio de l’image sera donc modifié.
                    Pour résoudre ce problème, il faudra ajouter une propriété « height » avec 
                    la valeur « auto » à l’image pour que la hauteur de l’image s’ajuste en fonction de 
                    la largeur en conservant le ratio initial de l’image.</p>
            </div>
        
        </div>

        <div class="card">
            <img class="card_image" src="../public/css/images/download.png"  alt="Nature">
            <div class="card_modello">
                <h3>Vantaggi</h3>
                <p>La propriété « max-width » appliquera à l’image cible la largeur maximale de son conteneur, le problème est que 
                    la hauteur de l’image ne sera pas adaptée et le ratio de l’image sera donc modifié.
                    Pour résoudre ce problème, il faudra ajouter une propriété « height » avec 
                    la valeur « auto » à l’image pour que la hauteur de l’image s’ajuste en fonction de 
                    la largeur en conservant le ratio initial de l’image.</p>
            </div>
        
        </div>
    </section>


    <!--<section class="section_footer"> -->
        <footer>
            @include('layouts/_footer')
        </footer>
        </section>
<scrip src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


</body>
</html>
