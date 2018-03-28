<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-13T22:50:04+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T17:17:48+01:00

/**
*
*/

require_once 'Database.php';

class Site
{

  public function load_content()
  {

    if(!empty($_REQUEST['op'])){

      $file = 'contenu/' . $_REQUEST['op'] . '.php';
      if(file_exists($file)){
        require_once $file;
      }
      else{
        require_once 'contenu/site_accueil.php';
      }
    }
    else{
      require_once 'contenu/site_accueil.php';
    }

  }

  public function getArticle()
  {
    $db = new \lib\Database();
    $data = $db->query("SELECT * FROM produit");
    return $data;
  }

  public function getArticle2($limit)
  {
    $db = new \lib\Database();
    $data = $db->query('SELECT * FROM produit LIMIT '.$limit);
    return $data;

  }

  public function getProduit($data)
  {
    $db = new \lib\Database();

    $req = $db->prepare("SELECT * FROM produit WHERE id = :id");
    $req->execute(array(
      'id' => $data
    ));

    $resultat = $req->fetch();
    return $resultat;
  }


  public function setConnexion($data)
  {
    $db = new \lib\Database();

    if(internauteEstConnecte())
    {
      header("location:profil.php");
      exit();
    }

    if(!empty($data['pseudo']) && !empty($data['mdp']))
    {

      $req = $db->prepare("SELECT login, passwd, cRole, id FROM clients WHERE login = :login");
      $req->execute(array(
        'login' => $data['pseudo']
      ));

      $resultat = $req->fetch();



      if($resultat['cRole'] == "1")
      {
        header('Location:'. NDD_PATH.'admin140297/');
        exit();
        $_SESSION['statut'] = 1;
      }

      $isPasswordCorrect = password_verify($data['mdp'], $resultat['passwd']);


      if($isPasswordCorrect)
      {
        session_start();
        $_SESSION['pseudo'] = $resultat['login'];
        $_SESSION['id'] = $resultat['id'];
        header('Location:'.NDD_PATH.'profil');
        exit();
      }else {
        $msg = "<div class='alert alert-danger'>Mot de passe incorrect.</div>";
      }
    }

    else{
      $msg = "<div class='alert alert-warning'>Merci de renseigner un identifiant et un mot de passe.</div>";
    }

    return $msg;
  }

  public function setInscription($data)
  {
    $db = new \lib\Database();

    $hash = password_hash($data['mdp'], PASSWORD_DEFAULT);


    $req = $db->prepare("INSERT INTO clients(login, passwd, cRole, ville, nom, prenom, cp, gender, mail) VALUES (:login, :passwd, :cRole, :ville, :nom, :prenom, :cp, :gender, :mail)");
    $req->execute(array(
      'login' => $data['pseudo'],
      'passwd' => $hash,
      'cRole' => 0,
      'ville' => $data['ville'],
      'nom' => $data['nom'],
      'prenom' => $data['prenom'],
      'cp' => $data['code_postal'],
      'gender' => $data['civilite'],
      'mail' => $data['email'],
    ));

    if($req){
      $msg = "<div class='alert-success'>Vous avez été inscrit.</div>";
    }else{
      $msg = "<div class='alert-warning'>Erreur</div>";
    }

    return $msg;
  }

  public function getProfil($data)
  {
    $db = new \lib\Database();

    $req = $db->prepare("SELECT * FROM clients WHERE id = :id");
    $req->execute(array(
      'id' => $data
    ));

    $resultat = $req->fetch();

    return $resultat;
  }

  public function Deconnexion($action)
  {
    if($action == "deconnexion")
    {
      session_destroy();
    }
  }


  public function setPanier($data){
    if(!empty($data))
    {
      $_SESSION['panier'] = $data;
      $msg = "<div class='alert alert-info'>Ajouté au panier !</div>";
    }else{
      $msg = "<div class='alert alert-danger'>Erreur ajout panier !</div>";
    }
    return $msg;
  }
}
