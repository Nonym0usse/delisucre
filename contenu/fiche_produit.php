<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T20:46:39+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T17:43:55+01:00
$results = $this->getProduit($_GET['id']);
$produits = $this->getArticle2(4);


if(!empty($_POST))
{
  $panier = $this->setPanier($results);
}

?>

<!-- Demo page craeted by https://github.com/petr-goca -->

<div aria-label="Main content" role="main" class="product-detail">
  <div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
    <meta itemprop="image" content="//cdn.shopify.com/s/files/1/1047/6452/products/product_grande.png?v=1446769025">
    <div class="shadow">
      <div class="_cont detail-top">
        <div class="cols">
          <div class="left-col">
            <div class="big">
              <span class="bdo-custom"><?= $results['prix']?>€</span>
              <span id="big-image" class="img" quickbeam="image" style="background-image: url('../img/test.jpg')" data-src="//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025"></span>
              <div id="banner-gallery" class="swipe">
                <div class="swipe-wrap">
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_large.png?v=1446769025')"></div>
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_large.jpg?v=1447104179')"></div>
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_large.jpg?v=1447104180')"></div>
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_large.jpg?v=1447104182')"></div>
                </div>
              </div>
              <div class="detail-socials">
                <div class="social-sharing" data-permalink="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
                  <a target="_blank"  class="share-facebook" title="Share"></a>
                  <a target="_blank"  class="share-twitter" title="Tweet"></a>
                  <a target="_blank"  class="share-pinterest" title="Pin it"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="right-col">
            <h1 itemprop="name"><?= $results['nom'] ?></h1>



            <!-- <form method="post" enctype="multipart/form-data" id="AddToCartForm"> -->
              <form method="post" action="">
                <button type="submit" value="panier" name="panier" class="btn btn-dark">Ajouter au panier</button>
              </form>
            <div class="tabs">
              <div class="tab-labels">
                <span data-id="1" class="active">Descriptif</span>
              </div>
              <div class="tab-slides">
                <div id="tab-slide-1" itemprop="description"  class="slide active">
                  Délisucré est le seul sucre liquide 100% naturel et issu de fruits fabriqué en France.<br />
                  Son indice glycémique de seulement 11,9g, parmi les plus faibles au monde, est la garantie d'un plaisir sucré gourmand et sain à la fois !
                  <br />                    <br />

                  Grâce à son authentique goût sucré et sa texture liquide, Délisucré accompagne vos boissons (café, thé, cocktail), vos yaourts et fromages blancs, mais aussi vos compotes, confitures et bien plus encore !
                  <br />                    <br />

                  Délisucré résiste à la cuisson, ce qui en fait également l'ingrédient idéal pour confectionner de délicieuses pâtisseries, tout en conservant une glycémie et un apport calorique au moins deux fois inférieur au sucre blanc.
                  <br />                    <br />

                  Retrouvez tous les avantages santé de Délisucré, ainsi que nos conseils d'utilisation dans les différents onglets de notre site Internet ! :)                  </div>
                  <div id="tab-slide-2" class="slide">
                    Tony Hunfinger
                  </div>
                </div>
              </div>
              <div class="social-sharing-btn-wrapper">
                <span id="social_sharing_btn">Share</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <aside class="related">
      <div class="_cont">

        <h2 class="title-product">Vous allez aimer aussi</h2>
        <div class="row">
          <?php
          foreach ($produits as $test) {
            ?>
            <div class="col-3">
              <div class="collection-list" id="collection-list" data-products-per-page="4">
                <a class="product-box">
                  <span class="img">
                    <span style="background-image: url('../img/test.jpg')" class="i first"></span>
                    <span class="i second" style="background-image: url('../img/test.jpg')"></span>
                  </span>
                </a>
              </div>
            </div>
            <?php

          }
          ?>
        </div>

        <div class="more-products" id="more-products-wrap">
          <span id="more-products" style="background: black;" data-rows_per_page="1"><a href="<?= setLink('boutique') ?>">Découvrir</a></span>
        </div>
      </div>
    </aside>
  </div>

</div>


<!-- Quickbeam cart end -->
