<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T19:30:46+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T17:18:26+01:00

?>
<div class="container-fluid panier">
  <h1 class="title-panier">Votre panier</h1>
  <?php
  if(!$_SESSION['panier'] == NULL)
  {
    ?>
    <div class="container">
      <section id="cart">
        <article class="product">
          <header>
            <a class="remove">
              <img src="<?= NDD_PATH.'img/test.jpg'?>" alt="">

              <h3>Supprimer</h3>
            </a>
          </header>
          <div class="content">
            <h1><?= $_SESSION['panier']['nom'] ?></h1>
            <?= $_SESSION['panier']['description'] ?>
          </div>
          <footer class="content">
            <span class="qt-minus">-</span>
            <span class="qt">1</span>
            <span class="qt-plus">+</span>

            <h2 class="full-price">
              <?= $_SESSION['panier']['prix'] ?> €
            </h2>
          </footer>
        </article>
      </section>
    </div>
    <?php
  }else{
    echo "<div class='alert alert-info'>Votre panier est vide...</div>";
  }
  ?>
</div>
