<link rel="stylesheet" href="pageaccueil.css">
<?php include 'header.php'?>


    <section class="banner">
        <div class="bannervideo ">
          <video autoplay muted loop>
          <source src="video\Car-61.mp4" type="video/mp4" width=100%>
          </video>
        </div>
    </section>
    <section class="bannerfilter">
        <div class="container text-secondary pt-5 pb-4">
            <h2 class="text-uppercase pt-5 pb-5"><span class="text-underline">TROUVEZ VOTRE VEHICULE</span></h2>
        </div>
        <div class="container  ">
          <form>
              <div class="row text-white formgroup">
                  <div class="col-6">
                  <input type="text" class="form-control" placeholder="Marque">
                  </div>
                  <div class="col-6">
                  <input type="text" class="form-control" placeholder="Modèle">
                  </div>
              </div>
              <div class="row text-white formgroup">
                  <div class="col-6">
                  <input type="text" class="form-control" placeholder="Catégorie">
                  </div>
                  <div class="col-6">
                  <input type="text" class="form-control" placeholder="Prix">
                  </div>
              </div>
              <div class="row text-white formgroup">
                  <div class="col-6">
                  <input type="text" class="form-control" placeholder="Carburant">
                  </div>
                  <div class="col-6">
                  <input type="text" class="form-control" placeholder="Boite de vitesses">
                  </div>
              </div>
              <div class="row text-white formgroup">
                  <div class="col-6">
                  <input type="text" class="form-control" placeholder="Puissances fiscales">
                  </div>
                  <div class="col-6">
                  <input type="text" class="form-control" placeholder="En stock">
                  </div>
              </div>

                  <div class="row text-white formgroup">
                    <div class="col">
                      <button class="btn btn-primary text-uppercase" type="submit">Rechercher</button>
                    </div>
                  </div>
          </form>
        </section>
        <section class="concessionautomobilealsace">
          <div class="container-fluid">
              <div class="container">
                <h1> CONCESSION AUTOMOBILE EN ALSACE </h1>
            </div>
              <div class="concessionautomobilealsaceimage">
                <img src="images/Voiture.jpg" alt="des voitures" >
              </div>
          </div>
        </section>

        <section class="nosdernieresmodeles">
          <div class="container">
            <h1>NOS DERNIERES MODELES </h1>
          </div>
          <div class="container">
            <p>ALFA ROMEO Guilietta Serie 2 1.4 TB MultiAir 170 ch S&S TCT Super </p>
            <p>23650€</p>
            <p>Audi Q3 1.4 TFSI COD 150 ch S tronic 6 Ambiente</p>
            <p>31900€</p>
            <p>Audi Q3 1.4 TFSI COD 150 ch S tronic 6 Ambiente</p>
            <p>32600€</p>
          </div>
          <div class="container concessionautomobilealsaceimage">
            <img src="images/voiture-neuf-2.jpg" alt="des voitures">
            <img src="images/voiture-neuve-3.jpg" alt="des voitures">
            <img src="images/vehicule-neuf-1.jpg" alt="des voitures">
          </div>
          <div class="container">
            <h3>Essayez la! </p>
            <p>Vous pouvez dès à présent réserver un essai sur notre site</p>
            <div class="row text-white formgroup">
              <div class="col">
                <button class="btn btn-primary text-uppercase" type="submit">Réserver</button>
              </div>
            </div>
          </div>

        </section>

        <section class="nosservices">
            <div class="container">
              <h1> NOS SERVICES </h1>
            </div>
            <div class="container">
              <h2> REPRISE DE VOTRE VEHICULE </h2>
            </div>
            <div class="container">
              <h2>  SERVICE CARTE GRISE</h2>
            </div>
            <div class="container">
              <h2> GARANTIE SERENITE </h2>
            </div>
            <div class="container concessionautomobilealsaceimage">
              <a> <img src="icones/money.png" alt="money" class="bg-dark"> </a>
              <a> <img src="icones/filesandfolders.png" alt="filesandfolders" class="bg-dark"> </a>
              <a> <img src="icones/key.png" alt="key" class="bg-dark"> </a>
            </div>
            <div>
              <a> <img src="icones/money.png" alt="money" class="bg-dark" > </a>
              <h1>REPRISE DE VOTRE VEHICULE</h1>
              <p> Comme en concession, nous sommes en mesure de vous faire une offre de reprise sur votre véhicule. Fini le casse-tête de la vente, lorsque vous prenez possession de votre nouveau véhicule nous vous reprenons l’ancien (en fonction de l’offre établie selon les modalités de reprise).</p>
              <a> <img src="images/reprise.jpg" alt="remisedeclés"> </a>
            </div>
              <div class="row text-white formgroup">
                <div class="col">
                  <button class="btn btn-primary text-uppercase" type="submit">En savoir plus sur nos services</button>
                </div>
              </div>
            </div>
          </section>

          <section class="toutesnosmarques">
            <div class="container">
              <h1>TOUTES NOS MARQUES</h1>
              <img src="images/logo/kia.png" alt="logokia">
              <img src="images/logo/jeep1.png" alt="logojeep1">
              <img src="images/logo/suzuki.png" alt="logosuzuki">
              <img src="images/logo/nissan.png" alt="logonissan">
              <img src="images/logo/hyundai.png" alt="logohyundai">
            </div>
          </section>
          <section class="toutesnosmarques">
            <div class="container">
              <h1>NOUS CONTACTER</h1>
              <p> 16 rue andré kiener 68000 colmar</p>
              <p> 03 89 24 93 03</p>
              <p> 07 84 38 68 15</p>
              <button class="btn btn-primary text-uppercase" type="submit">Afficher la carte</button>
            </div>
          </section>



<?php include 'footer.php'?>
