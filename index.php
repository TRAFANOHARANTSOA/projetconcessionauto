<?php include 'header.php'?>
<link rel="stylesheet" href="pageaccueil.css">

<section class=" videoaccueil">
  <video src="video\car.mp4" autoplay muted loop class="w-100">
  </video>
</section>

<section >
          <form class="findcar">
              <h2 class="text-uppercase trouvervehicule"><span class="text-underline">TROUVEZ VOTRE VEHICULE</span></h2>
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
                      <button class="btn  text-uppercase formbutton" type="submit">Rechercher</button>
                  </div>
              </div>
          </form>
        </section>

      <section >
              <div class="container pr-0 pl-0 pt-0 pb-0 concession">
                <h1 class="concessiontitle"> CONCESSION AUTOMOBILE EN ALSACE </h1>
                <div class="mask">
                  <img src="images/Voiture.jpg" alt="des voitures" class="w-100">
                </div>
              </div>

              <div class="container pr-0 pl-0 pt-0 pb-0 concession2" >
                <div class="mask2">
                  <img src="images/Voiture.jpg" alt="des voitures" class="w-100">
                </div>
                  <div class="row concessionparagprahe">
                    <div class="col ">
                      <a> <img src="icones\iconequipe.png" alt="equipe" class="imgfloatleft"></a>
                      <div class="row">
                        <h3 class=""> ACCUEIL & CONSEILS DE PROFESSIONNELS</h3>
                        <p>Une équipe de professionnels vous accueille pour l’achat de votre véhicule neuf ou d’occasion et pour tous conseils d’après-vente (pose d’attelage, carrosserie, pièces détachées, pneumatiques…).</p>
                      </div>
                          <a> <img src="icones\iconpig.png" alt="pig" class="imgfloatleft"></a>
                      <div class="row">
                        <h3 class=""> FINANCEMENT </h3>
                        <p>Nous vous proposons des solutions de financement adaptées à votre besoin : en crédit classique location option d’achat, location longue durée, avec ou sans apport.</p>
                        <a> </a>
                      </div>
                      <a> <img src="icones\iconvalidate.png" alt="validate" class="imgfloatleft"></a>
                      <div class="row ">
                        <h3 class=""> ASSURANCE</h3>
                        <p>Pour profiter d’une sérénité totale, demandez des renseignements sur les produits assurance automobile, faîtes établir un devis gratuit !</p>
                        <a> </a>
                      </div>
                    </div>
                  </div>
              </div>

      </section>

      <section id="nosdernieresmodeles">
            <div class="container nosdernieresmodelescontainer">
                <div class="page-header text-left text-white">
                  <h1>NOS DERNIERES MODELES</h1>
                </div>
                <div id="carousel" class="carousel slide nosdernieresmodelescarousel" data-interval="3000" data-ride="carousel" >
                    <div class="carousel-inner ">
                      <div class="carousel-item active carouselimg ">
                        <p class="text-white">ALFA ROMEO Guilietta Serie 2 1.4 TB MultiAir 170 ch S&S TCT Super </p>
                        <p class="text-danger">23650€</p>
                        <img src="images/voiture-neuf-2.png" class="d-block img-fluid"  alt="voitureneuve2">
                      </div>
                      <div class="carousel-item carouselimg">
                        <p class="text-white">Audi Q3 1.4 TFSI COD 150 ch S tronic 6 Ambiente</p>
                        <p class="text-danger">31900€</p>
                        <img src="images/voiture-neuve-3.png" class="d-block img-fluid" alt="voitureneuve3">
                      </div>
                      <div class="carousel-item carouselimg">
                        <p class="text-white ">Audi Q3 1.4 TFSI COD 150 ch S tronic 6 Ambiente</p>
                        <p class="text-danger">32600€</p>
                        <img src="images/vehicule-neuf-1.png" class="d-block img-fluid vehicule1" alt="vehicule1">
                      </div>
                    </div>

                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                    <div class="essai">
                      <p>Essayez la !Vous pouvez dès à présent réserver un essai sur notre site. </p>
                        <button class="btn  text-uppercase formbutton" type="submit">Rechercher</button>
                    </div>
              </div>
      </section>
<section class="">
<div class="mask4">

</div>
</section>
      <!--<section class="nosservices mask4">
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

      <section id="toutesnosmarques">
            <div class="container toutesnosmarquescontainer">
                <div class="page-header text-left text-white">
                  <h1 >TOUTES NOS MARQUES</h1>
                </div>
                <div id="carousel2" class="carousel slide nosdernieresmodelescarousel" data-interval="3000" data-ride="carousel" >
                    <div class="carousel-inner ">
                      <div class="carousel-item active carouselimg ">
                        <img src="images/logo/kia.png" class="d-block img-fluid"  alt="logokia">
                      </div>
                      <div class="carousel-item carouselimg">
                        <img src="images/logo/jeep1.png" class="d-block img-fluid"  alt="logojeep">
                      </div>
                      <div class="carousel-item carouselimg">
                        <img src="images/logo/suzuki.png" class="d-block img-fluid"  alt="logosuzuki">
                      </div>
                      <div class="carousel-item carouselimg">
                        <img src="images/logo/nissan.png" class="d-block img-fluid"  alt="logonissan">
                      </div >
                      <div class="carousel-item carouselimg">
                        <img src="images/logo/hyundai.png" class="d-block img-fluid"  alt="logohyundai">
                      </div >
                    </div>

                    <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
              </div>
      </section>

          <!--<section class="toutesnosmarques">
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
          </section>-->



<?php include 'footer.php'?>
