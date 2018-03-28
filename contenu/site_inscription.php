<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T19:29:20+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-10T20:03:18+01:00

if(!empty($_POST))
{
  $msg = $this->setInscription($_POST);
}

?>
<div class="container-fluid inscription">

  <div class="container top">
    <div class="inscription-panel">
      <h2 class="title-inscription">Inscription</h2>
        <form class="form-horizontal" id="insc" action="" method="post" accept-charset="UTF-8">
          <div class="form-group row">
            <div class="col-6">
              <label>Pseudo</label>
              <input class="form-control" type="pseudo" name="pseudo" placeholder="Pseudo">
            </div>
            <div class="col-6">
              <label>Adresse mail</label>
              <input class="form-control" type="email" name="email" placeholder="Adresse">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-6">
              <label>Mot de passe</label>
              <input class="form-control" type="password" name="mdp" placeholder="Mot de passe">
            </div>
            <div class="col-6">
              <label>Confirmer mot de passe</label>
              <input class="form-control" type="password" name="mdp2" placeholder="Confirmez votre mot de passe">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-6">
              <label>Nom</label>
              <input class="form-control" type="text" name="nom" placeholder="Nom">
            </div>
            <div class="col-6">
              <label>Prénom</label>
              <input class="form-control" type="text" name="prenom" placeholder="Prénom">
            </div>
          </div>


          <div class="form-group row">
            <div class="col-6">
              <input type="radio" value="m" name="civilite" checked>
            </div>
            <div class="col-6">
              <input  type="radio" value="f"  name="civilite" >
            </div>
          </div>


          <div class="form-group row">
            <div class="col-6">
              <label>Ville</label>
              <input class="form-control" type="text" name="ville" placeholder="Ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_.">
            </div>
            <div class="col-6">
              <label>Code Postal</label>
              <input class="form-control" type="text" name="code_postal" placeholder="Code postal" >
            </div>
          </div>

          <button type="submit" class="btn btn-warning">Valider</button>
        </form>
    </div>
  </div>
</div>
