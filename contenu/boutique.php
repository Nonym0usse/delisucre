<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-14T22:15:07+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T15:54:20+01:00

$results = $this->getArticle();
?>

<div class="container-fluid boutique">

  <div class="container">
    <div class="row">
      <?php
      foreach ($results as $produits)
      {
        ?>
        <div class="col-lg-3 col-md-12 prod">
          <img src="<?= NDD_PATH.'img/test.jpg'?>" alt="Avatar" class="image">
          <div class="overlay">
            <div class="text"><a href="<?= setLink('product,'.$produits->id)?>">Découvrir</a></div>
          </div>
          <p style="text-align: center;">
            <?= $produits->nom ?>
          </p>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>
