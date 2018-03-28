<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-19T22:27:37+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T09:05:01+01:00

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Database.php';
require_once 'function.php';

class Admin{

  public function load_content()
  {

    if(!empty($_REQUEST['op'])){

      $file = 'contenu/' . $_REQUEST['op'] . '.php';
      if(file_exists($file)){
        require_once $file;
      }
      else{
        require_once 'contenu/dashboard.php';
      }
    }
    else{
      require_once 'contenu/dashboard.php';
    }

  }


  public function setArticle($data, $image)
  {
    $db = new \lib\Database();

    foreach ($image as $key) {
      $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png');
      $extension_upload = strtolower(  substr(  strrchr($key['name'], '.')  ,1)  );
      $folder = NDD_PATH.'img';

      if (!in_array($extension_upload,$extensions_valides)){
        $msg = "<div class='alert alert-danger'>Votre fichier n'est pas une photo</div>";
      }

      $resultat = move_uploaded_file($key['tmp_name'], $folder);
      if($resultat){
        $msg = "<div class='alert alert-success'>Votre image à bien été uploadé !</div>";
        $path = NDD_PATH."/img/".$key['name'];
      }else{
        $msg = "<div class='alert alert-danger'>Erreur lors de l'upload de la photo</div>";
      }
    }


    $req = $db->prepare("INSERT INTO produit(nom, categorie, prix, quantite, contenance, description, image) VALUES (:nom, :categorie, :prix, :quantite, :contenance, :description, :image)");
    $req->execute(array(
      'nom' => $data['titre'],
      'categorie' => $data['categorie'],
      'prix' => $data['prix'],
      'quantite' => $data['stock'],
      'contenance' => $data['contenanceCL'],
      'description' => $data['description'],
      'image' => $path
    ));

    return $msg;
  }


  public function getArticle()
  {
    $db = new \lib\Database();
    $data = $db->query("SELECT * FROM produit");
    return $data;
  }
}
