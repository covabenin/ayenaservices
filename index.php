<?php
$page="Accueil";
include('includes/header.inc.php'); ?>

    
    <!-- begin:cta -->
    

    <!-- begin:about -->
    <div id="about" class="block-section image-block bg-white">
      <div class="container-fluid container-no-padding">
        <div class="row row-no-margin">
          <div class="image-block-item col-md-6 col-sm-5 col-xs-12">
                            <?php 
$dos="img";
$dir=opendir($dos);

while ($file=readdir($dir)) {

  
}


 ?>
            <div class="image-block-item-background" style="background-image: url('img/<?php echo $file; ?>');"></div>
          </div><!-- .image-block-item -->
        </div><!-- .row -->
      </div><!-- .container-fluid -->
      <?php 

if (!empty($_FILES)) {

//  print_r($_FILES);

  $img=$_FILES['img'];
  echo $img['name'];
  /*<img src="<?php $img['name'] ;?>">*/

$extension= strtolower(substr($img['name'], -3));
$allow_extension=array('pnp','jpg','gif' );

if (in_array($extension, $allow_extension)) {
    move_uploaded_file($img['tmp_name'], "img/".$img['name']);
    echo "Image uploadée avec succès !";

  }else{
    echo $error='Votre fichier n\'est pas une image';
  }

}

 ?>
                            <?php 
          if (isset($error)) {
            echo $error;
            
          }
 ?>
                     <?php 
$dos="img";
$dir=opendir($dos);

while ($file=readdir($dir)) {

  
}


 ?>

      <div class="container clear">
        <div class="row">
          <div class="col-md-5 col-md-offset-7 col-sm-6 col-sm-offset-6 col-xs-10 col-xs-offset-1 padd-80-top padd-60-btm">
            <div class="section-title">
              <h2>Pourquoi nous choisir ? </h2>
            </div>
            <p><?php echo "Nous sommes une entreprise r&eacute;gulière agr&eacute;&eacute;e par le Ministère des Mines, de l’Industrie et du D&eacute;veloppement Technologique, intervenant dans diverses activit&eacute;s et sp&eacute;cialis&eacute;e en travaux neufs et entretiens. Sur cette plate forme, l’optimisation du potentiel public est notre priorit&eacute;. Depuis la cr&eacute;ation de AYENA Sarl-, nous brisons les frontières et consolidons la croissance &eacute;conomique à travers un seul langage ; « bâtissons le monde ! »"; ?>
 </p>
             <p><a class="button btn-danger popup-video" href="<?php echo $URL;?>pages/a-propos-de-nous"><i class="fa fa-wrench"></i> En savoir plus</a></p>
          </div><!-- .col-## -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- #about -->
    <!-- end:about -->

    <!-- begin:why -->
    <div id="why" class="why content-section bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h2>04 Raisons pour nous choisir</h2>
            </div>
          </div><!-- .col-md-12 -->
        </div><!-- .row -->
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="process-item highlight text-center">
              <img src="assets/img/img-work-01.jpg" "<?php  ?>" class="img-responsive">
              <div class="process-item-content">
                <span class="process-item-number">1</span>
                <h3 class="process-item-title">QUALITE</h3>
               </div><!-- .process-item-content -->
            </div><!-- .process-item -->
          </div><!-- .col-## -->
          <div class="col-md-3 col-sm-6">
            <div class="process-item text-center">
              <div class="process-item-icon">
                <span class="pe-7s-science"></span>
              </div>
              <div class="process-item-content">
                <span class="process-item-number">2</span>
                <h3 class="process-item-title">RIGUEUR</h3>
                 </div><!-- .process-item-content -->
            </div><!-- .process-item -->
          </div><!-- .col-## -->
          <div class="col-md-3 col-sm-6">
            <div class="process-item highlight text-center">
              <img src="assets/img/img-work-04.jpg" "<?php  ?>" class="img-responsive">
              <div class="process-item-content">
                <span class="process-item-number">3</span>
                <h3 class="process-item-title">EXPERTISE</h3>
                 </div><!-- .process-item-content -->
            </div><!-- .process-item -->
          </div><!-- .col-## -->
          <div class="col-md-3 col-sm-6">
            <div class="process-item text-center">
              <div class="process-item-icon">
                <span class="pe-7s-graph1"></span>
              </div>
              <div class="process-item-content">
                <span class="process-item-number">4</span>
                <h3 class="process-item-title">SATISFACTION</h3>
                 </div><!-- .process-item-content -->
            </div><!-- .process-item -->
          </div><!-- .col-## -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- #why -->
    <!-- end:why -->
	<div id="cta" class="cta block-section padd-40-top padd-40-btm bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h4>Nous sommes votre constructeur - promoteur.</h4>
            <p>Nous aidons les clients à construire des projets de construction de classe mondiale.</p>
          </div><!-- .col-sm-6 -->
          <div class="col-sm-4 text-right marg-20-top">
            <a href="pages/contact" class="button">Ecrivez-nous maintenant</a>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- #cta -->
    <!-- end:cta -->
 <!-- begin:work -->
    <div id="work" class="work content-section bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h2>Nos r&eacute;alisations</h2>
            </div>
          </div><!-- .col-md-12 -->
        </div><!-- .row -->

        <div class="row">
          <div class="col-md-12">
            <ul class="work-filter">
              <li class="active" data-filter="*"><a href="#">Tout</a></li>
              <li data-filter=".buildings"><a href="#buildings">Construction <br>de bâtiments</a></li>
              <li data-filter=".interior-design"><a href="#interior-design">Travux <br>routiers</a></li>
              <li data-filter=".isolation"><a href="#isolation">Différents plans <br>architecturaux</a></li>
              <li data-filter=".house-renovation"><a href="#house-renovation">Hotellerie/Tourisme/<br>Ressources du sol</a></li>
            </ul><!-- .work-filter -->

            <ul class="work-grid">
              <li class="work-item buildings house-renovation">
                <a href="assets/img/img-work-01.jpg" "<?php  ?>" title="CCEI BANK à Malabo" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a13.png" "<?php  ?>" alt="Avenue Hotels">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">CCEI BANK à Malabo
</h4>
                    <span class="work-item-desc">Déjà construit</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
              <li class="work-item buildings house-renovation">
                <a href="assets/img/a14.png" "<?php  ?>" title="Hôtel BAHIA " class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a14.png" "<?php  ?>" alt="Mark Bedroom">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Hôtel BAHIA 
</h4>
                    <span class="work-item-desc">Déjà construit</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
              <li class="work-item buildings">
                <a href="assets/img/a15.jpg" "<?php  ?>" title="Hôtel SIPOPO 
" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a15.png" "<?php  ?>" alt="Hôtel SIPOPO 
">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Hôtel SIPOPO 
</h4>
                    <span class="work-item-desc">Construit</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
              <li class="work-item buildings house-renovation">
                <a href="assets/img/a16.png" "<?php  ?>" title="Hôtel MONGOMO 
" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a16.png" "<?php  ?>" alt="Hôtel MONGOMO 
">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Hôtel MONGOMO 
 
</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
                          <li class="work-item buildings house-renovation">
                <a href="assets/img/a18.png" "<?php  ?>" title="Sofitel Malabo 
" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a18.png" "<?php  ?>" alt="Sofitel Malabo">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Sofitel Malabo</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
                          
				<!-- .work-item -->
                     <li class="work-item isolation  ">
                <a href="assets/img/a19.png" "<?php   ?>" title="Plan de bâtiments administratifs modernes par la société ayena 
" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a19.png" "<?php  ?>" alt="Plan de bâtiments administratifs modernes par la société ayena">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Plan de bâtiments administratifs modernes par la société ayena</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
        <!-- .work-item -->
                  <li class="work-item isolation  ">
                <a href="assets/img/a20.png" "<?php  ?>" title="Plan de Stades par la société ayena
" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a20.png" "<?php  ?>" alt="Plan de Stades par la société ayena">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Plan de Stades par la société ayena</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
        <!-- .work-item -->
           <li class="work-item isolation  ">
                <a href="assets/img/a21.png" "<?php  ?>" title="Plan aéroport par la société ayena
" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a21.png" "<?php  ?>" alt="Plan aéroport par la société ayena">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Plan aéroport par la société ayena</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
        <!-- .work-item -->
             <li class="work-item isolation  ">
                <a href="assets/img/a22.png" "<?php  ?>" title="Villas Présidentielles en Guinée équatoriale
" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a22.png" "<?php  ?>" alt="Villas Présidentielles en Guinée équatoriale">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Villas Présidentielles en Guinée équatoriale</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
        <!-- .work-item -->
           <li class="work-item isolation  ">
                <a href="assets/img/a23.png" "<?php  ?>" title="Echangeur de Malabo
" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a23.png" "<?php  ?>" alt="Echangeur de Malabo">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Echangeur de Malabo
</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
        <!-- .work-item -->
         <li class="work-item isolation  ">
                <a href="assets/img/a26.png" "<?php  ?>" title="Plan de bâtiments administratifs modernes par la société ayena" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a26.png" "<?php  ?>" alt="Plan de bâtiments administratifs modernes par la société ayena">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Plan de bâtiments administratifs modernes par la société ayena
</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
        <!-- .work-item -->
            <li class="work-item isolation  ">
                <a href="assets/img/a24.png" "<?php  ?>" title="1000 m² de piste d’atterrissage aéroport de Malabo

" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a24.png" "<?php  ?>" alt="1000 m² de piste d’atterrissage aéroport de Malabo
">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">1000 m² de piste d’atterrissage aéroport de Malabo

</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
        <!-- .work-item -->
           <li class="work-item isolation  ">
                <a href="assets/img/a25.png" "<?php  ?>" title="Plan d’INFRASTRUCTURES HOSPITALIERES par la société ayena

" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a25.png" "<?php  ?>" alt="Plan d’INFRASTRUCTURES HOSPITALIERES par la société ayena
">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Plan d’INFRASTRUCTURES HOSPITALIERES par la société ayena

</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
        <!-- .work-item -->
           <!-- .work-item -->
           <li class="work-item buildings house-renovation">
                <a href="assets/img/a27.png" "<?php  ?>" title="VILLA PRESIDENTIELLE  (LOGEMENT GRAND STANDING) par la société ayena

" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a27.png"  "<?php  ?>" alt="VILLA PRESIDENTIELLE  (LOGEMENT GRAND STANDING) par la société ayena">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">VILLA PRESIDENTIELLE  (LOGEMENT GRAND STANDING) par la société ayena

</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
        <!-- .work-item -->
           <!-- .work-item -->
           <li class="work-item isolation  ">
                <a href="assets/img/a28.png" "<?php  ?>" title="Plan de Logements sociaux ou économiques par la société ayena " class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a28.png" "<?php  ?>" alt="Plan de Logements sociaux ou économiques par la société ayena 
">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Plan de Logements sociaux ou économiques par la société ayena 

</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
        <!-- .work-item -->
           <!-- .work-item -->
           <li class="work-item isolation  ">
                <a href="assets/img/a29.png" "<?php  ?>" title="Infrastructures hôtelières par la société ayena" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a29.png" "<?php  ?>" alt="Infrastructures hôtelières par la société ayena
">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Infrastructures hôtelières par la société ayena

</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
        <!-- .work-item -->
          <!-- .work-item -->
           <li class="work-item isolation  ">
                <a href="assets/img/a30.png" "<?php  ?>" title="échangeurs et infrastructures routières par la société ayena" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a30.png" "<?php  ?>" alt="échangeurs et infrastructures routières par la société ayena">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">échangeurs et infrastructures routières par la société ayena

</h4>
                    <span class="work-item-desc">Isolation</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
        <!-- .work-item -->
              <li class="work-item design photography">
                <a href="assets/img/a17.png" "<?php  ?>" title="Stade de Bata
" class="image-lightbox">
                  <div class="work-item-image">
                    <img src="assets/img/a17.png" "<?php  ?>" alt="PStade de Bata
">
                  </div><!-- .work-item-image -->
                  <div class="work-item-info">
                    <h4 class="work-item-title">Stade de Bata
</h4>
                    <span class="work-item-desc"> Construit</span>
                  </div><!-- .work-item-info -->
                </a>
              </li><!-- .work-item -->
            </ul><!-- .work-grid -->
          </div><!-- .col-md-12 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- #work -->
    <!-- end:work -->

    <!-- begin:testimonial -->
    <div id="testimonial" class="block-section image-block bg-light">
      <div class="container-fluid container-no-padding">
        <div class="row row-no-margin">
          <div class="image-block-item col-md-6 col-md-offset-6 col-sm-5 col-xs-12">
            <div class="image-block-item-background" style="background-image: url('assets/img/pp4.jpg');"></div>
          </div><!-- .image-block-item -->
        </div><!-- .row -->
      </div><!-- .container-fluid -->

      <div class="container clear">
        <div class="row">
          <div class="col-md-5 col-md-offset-0 col-sm-7 col-sm-offset-5 padd-60-top padd-100-btm">
            <div class="section-title">
              <h1 style="text-align: center;font-size: 24px; color: black">Témoignages récentes</h1>
             
            </div>
            <div class="carousel slide testimony-dark" id="testimony" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#testimony" data-slide-to="0" class="active"></li>
                <li data-target="#testimony" data-slide-to="1" class=""></li>
              </ol><!-- .carousel-indicators -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <p>
R&eacute;cemment, nous avons dû repenser notre page de destination et nous recherchions un modèle r&eacute;pondant à nos besoins. Nous avons trouv&eacute; ce modèle qui d&eacute;passait de loin nos attentes</p>
                  <img class="testimony-item-image" src="assets/img/img-testimony-01.jpg">
                  <span class="testimony-item-source source-alt"><strong>David Groot</strong> Shark Inc.</span>
                </div><!-- .item -->
                <div class="item">
                  <p>Je ne sais pas quoi dire d'autre. Il avait tout ce que nous voulions et &eacute;tait mieux conçu que tout ce que nous aurions pu accomplir seul. Merci pour le bon travail.</p>
                  <img class="testimony-item-image" src="assets/img/img-testimony-02.jpg">
                  <span class="testimony-item-source source-alt"><strong>Max Well</strong> Cooldad</span>
                </div><!-- .item -->
              </div><!-- .carousel-inner -->
            </div><!-- #client-says -->
          </div><!-- .col-## -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- #testimonial -->
    <!-- end:testimonial -->

    <!-- begin:client -->
    <div id="client" class="client block-section bg-white padd-40-top padd-40-btm">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="slider-thumbnail" class="owl-carousel owl-theme client-slider slider-carousel navigation-hide">
              <div class="item">
                <a href="#">
                  <img src="assets/img/img-client-01.png" "<?php  ?>" alt="client">
                </a>
              </div><!-- .item -->
              <div class="item">
                <a href="#">
                  <img src="assets/img/img-client-02.png" "<?php  ?>" alt="client">
                </a>
              </div><!-- .item -->
              <div class="item">
                <a href="#">
                  <img src="assets/img/img-client-03.png" "<?php  ?>" alt="client">
                </a>
              </div><!-- .item -->
              <div class="item">
                <a href="#">
                  <img src="assets/img/img-client-04.png" "<?php   ?>" alt="client">
                </a>
              </div><!-- .item -->
              <div class="item">
                <a href="#">
                  <img src="assets/img/img-client-05.png" "<?php   ?>" alt="client">
                </a>
              </div><!-- .item -->
              <div class="item">
                <a href="#">
                  <img src="assets/img/img-client-06.png" "<?php  ?>" alt="client">
                </a>
              </div><!-- .item -->
              <div class="item">
                <a href="#">
                  <img src="assets/img/img-client-07.png" "<?php  ?>" alt="client">
                </a>
              </div><!-- .item -->
              <div class="item">
                <a href="#">
                  <img src="assets/img/img-client-08.png" "<?php  ?>" alt="client">
                </a>
              </div><!-- .item -->
            </div><!-- #slider-thumbnail -->
          </div><!-- .col-md-12 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- #client -->
    <!-- end:client -->
  
    <!-- begin:service -->/* 
    <div id="service" class="service content-section bg-white">
      <div class="container">
	  <div class="row">
	  <div class="col-md-8"><h1 class="lead" style="text-align:center;text-transform:uppercase"> Nos derni&egrave;res actualit&eacute;s</h1></div>
        
	  </div>
        <div class="row">
		  <div class="col-md-4">
            <div class="blog-entry">
              <a href="#" class="blog-entry-thumbnail">
                <img src="assets/img/img-service-01.jpg" "<?php  ?>" alt="metal roofting" class="img-responsive">
              </a>
              <div class="blog-entry-header">
                <h2 class="entry-title"><a href="#" rel="bookmark">Toiture metallique</a></h2>
              </div><!-- .blog-entry-header -->
              <div class="blog-entry-content">
                <p>AYENA SA vous offre le meilleur en matière de services de toiture en m&eacute;tal, de fournitures et de mat&eacute;riaux pour vous aider à prot&eacute;ger l'un de vos plus gros investissements, votre maison. Il n'y a pas de meilleur moyen de prot&eacute;ger… …</p>
                <p><a href="#" class="read-more">En savoir plus &#43;</a></p>
              </div><!-- .blog-entry-content -->
            </div><!-- .blog-entry -->
          </div><!-- .col-md-4 -->

          <div class="col-md-4">
            <div class="blog-entry">
              <a href="#" class="blog-entry-thumbnail">
                <img src="assets/img/img-service-02.jpg" "<?php  ?>" alt="green building" class="img-responsive">
              </a>
              <div class="blog-entry-header">
                <h2 class="entry-title"><a href="#" rel="bookmark">Construction &eacute;cologique</a></h2>
              </div><!-- .blog-entry-header -->
              <div class="blog-entry-content">
                <p>
En choisissant de construire &eacute;cologique, vous faites un effort pour r&eacute;duire l'impact sur l'environnement et pour ajouter de la valeur à votre maison. La construction vous fournit les conseils et les outils n&eacute;cessaires……</p>
                <p><a href="#" class="read-more">En savoir plus &#43;</a></p>
              </div><!-- .blog-entry-content -->
            </div><!-- .blog-entry -->
          </div><!-- .col-md-4 -->

          <div class="col-md-4">
            <ul class="blog-entry-list">
              <li>
                <span class="entry-post-thumbnail">
                  <img src="assets/img/a23.png" "<?php  ?>"  alt="construction Consultant">
                </span>
                <div class="entry-post-content">
                  <h4 class="entry-post-title"><a href="#">Construction d'échangeurs et d'insfrastructures routières </a></h4>
                  <p> </p>
                </div><!-- .entry-post-content -->
              </li><!-- #post-## -->
              <li>
                <span class="entry-post-thumbnail">
                  <img src="assets/img/mine.jpg" "<?php  ?>" alt="General Contracting">
                </span>
                <div class="entry-post-content">
                  <h4 class="entry-post-title"><a href="#">Approvisionnement en ressources minières</a></h4>
                  <p>Uranium</p>
                </div><!-- .entry-post-content -->
              </li><!-- #post-## -->
              <li>
                <span class="entry-post-thumbnail">
                  <img src="assets/img/img-service-05.jpg" "<?php  ?>" alt="Construction Management">
                </span>
                <div class="entry-post-content">
                  <h4 class="entry-post-title"><a href="#">Gestion de construction</a></h4>
                  <p>Nous offrons un engagement à tous les niveaux du projet de construction, de la pr&eacute;paration ... ...</p>
                </div><!-- .entry-post-content -->
              </li><!-- #post-## -->
              <li>
                <span class="entry-post-thumbnail">
                  <img src="assets/img/pp11.jpg" "<?php  ?>" alt="Construction">
                </span>
                <div class="entry-post-content">	
                  <h4 class="entry-post-title"><a href="#">Construction </a></h4>
                  <p>Travaux effectués à Lomé et ên Côte d'Ivoire</p>
                </div><!-- .entry-post-content -->
              </li><!-- #post-## -->
            </ul><!-- .blog-entry-list -->
          </div><!-- .col-md-4 -->
        </div><!-- .row -->
      </div><!-- container -->
    </div><!-- #service -->
    <!-- end:service -->
 */
	<?php
 
include('includes/footer.inc.php'); ?>