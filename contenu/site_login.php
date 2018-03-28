<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T19:28:51+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-10T21:49:41+01:00
session_start();



?>

<section class="connexion-container connexion">
  <?php
  if(!empty($_POST['pseudo']) && !empty($_POST['mdp']))
  {
    echo "<br />";
    echo $msg = $this->setConnexion($_POST);
  }
   ?>
  <div class="login-page">
    <h2 class="login-header">CONNEXION</h2>
    <div class="form">
      <form class="login-form" method="post">
        <input type="text" name="pseudo" placeholder="Pseudo / Adresse mail"/>
        <input type="password" name="mdp" placeholder="Mot de passe"/>
        <button type="submit" class="btn btn-warning">Connexion</button>
        <p class="message">Pas de compte? <a class="message" href="<?= NDD_PATH. 'inscription' ?>">Inscrivez-vous</a></p>
      </form>
    </div>
  </div>
</section>
