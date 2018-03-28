<?php
# @Author: CYRIL VELLA
# @Date:   2017-11-12T11:05:27+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T16:11:56+01:00

$produit = $this->getArticle2(4);

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container-fluid accueil">
  <div class="container-fluid section1">

  </div>
  <div class="container-fluid section2">
    <h1 class="title-product">Découvrez notre gamme</h1>
    <div class="container">
      <?php
      foreach ($produit as $produits)
      {
        ?>
        <div class="col-lg-3 col-md-12 prod">
          <img src="<?= NDD_PATH.'img/test.jpg'?>" alt="Avatar" class="image">
          <div class="overlay">
            <div class="text"><a href="<?= setLink('product,'.$produits->id)?>">Découvrir</a></div>
          </div>
          <p style="text-align: center">
            <?= $produits->description ?>
          </p>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
  <div class="container-fluid section3">
    <h1 class="title-product">Notre histoire</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <p class="text-white">
            Dans un petit village du Gard vivaient Sam et Mimi éperdument amoureux l'un de l'autre. Sam excellent pâtissier, cuisinait du matin au soir pour sa belle. <br />
            Mais Mimi, méfiante des effets d'un excès de sucreries, refusait de les manger : "Je vais prendre du poids", "Je vais avoir du diabète", répondait-elle aux petits cadeaux sucrés de Sam.<br />
            Triste de la voir bouder ses desserts, Sam eu une idée lumineuse ! Et s'il créait un sucre sain qui ne ferait pas culpabiliser Mimi, un sucre issu des fruits et bon pour la santé.<br />
            Sam, dans son grenier, fabriqua une machine intelligente "Sugaréa" qui allait lui permettre d'extraire naturellement le sucre des fruits tout en ayant de nombreuses qualités pour la santé : Délisucré était né.
          </p>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <img src="<?= NDD_PATH.'img/mimi.png'?>" alt="Mimi & sam" class="img-mimi">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid section4">
    <h1 class="title-product">Nous trouver</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2862.6478322566245!2d4.631981215762334!3d44.152505428017136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5bb4d65082b1b%3A0xdb6c7c1defa25518!2s591+Avenue+de+Berret%2C+30200+Bagnols-sur-C%C3%A8ze!5e0!3m2!1sfr!2sfr!4v1521735866820" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
