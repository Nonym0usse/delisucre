<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-13T22:52:03+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T17:44:17+01:00



//-------------------- choix des metas
switch($_REQUEST['op']){
  case 'boutique':
  $title = "Délisucré - Achat produits sucrants";
  $description = "Découvrez un large choix de produits sucrants avec un faible index glycémique";
  break;
  case 'contact':
  $title = "Délisucré - Une question? Contactez-nous !";
  $description = "Contactez Délisucré pour plus d'informations";
  break;
  case 'connexion':
  $title = "Délisucré - Connexion à votre compte gratuitement.";
  $description = "Connectez-vous pour pouvoir bénéficier d'un large choix de produits sucrants";
  break;
  case 'panier':
  $title = "Délisucré - Votre panier.";
  $description = "Votre panier d'articles, ajoutez plusieurs canettes pas chères pour voyager encore plus !";
  break;
  case 'inscription':
  $title = "Délisucré - Inscrivez-vous pour pouvoir accèder à de nombreuses produits";
  $description = "Inscrivez-vous sur Déliscuré pour pouvoir bénéficier d'un large choix de produits sucrés";
  break;

  case 'profil':
  $title = "Délisucré - ". $_SESSION['pseudo'];
  $description = "Bienvenue sur votre profil Délisucré";
  break;

  case 'fiche_produit':
  $title = "Délisucré " . $_SESSION['produits'] . ".";
  $description = "Inscrivez-vous sur Déliscuré pour pouvoir bénéficier d'un large choix de produits sucrés";
  break;


  default:
  $title = "Délisucré - Vente de produits sucrants à index glycémique bas";
  $description = "Découvrez un large choix de produits sucrés";
  break;
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="robots" content="index,follow,all">
<meta name="description" content="<?php echo $description ?>" />
<meta name="keywords" content="<?php echo $keywords ?>" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" type="text/css">

<link rel="stylesheet" href="css/style.css" type="text/css">

<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<?php
if(!empty($og)){
  echo $og;
}
?>
<title><?php echo $title ?></title>
