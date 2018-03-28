<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T20:20:25+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T08:24:57+01:00

$profils = $this->getProfil($_SESSION['id']);

?>
<div class="container-fluid profil">
  <div class="container profil-panel">
    <div class="row">
      <div class="profils">
        <h2 class="profil-info">Votre profil</h2>
        <br />
        <img src="<?= NDD_PATH.'img/cyril.jpg'?>" class="image-profil" />
        <br />
        <h3 class="profil-info">Vos informations</h3>
        <br />
        <h5 class="profil-info">Nom & prénom : <?= ucfirst($profils['nom']) .' ' .ucfirst($profils['prenom']) ?></h5>
        <h5 class="profil-info">Ville : <?= $profils['ville'] ?></h5>
        <h5 class="profil-info">Code postal : <?= $profils['cp'] ?></h5>
        <h5 class="profil-info">Mail : <?= $profils['mail'] ?></h5>
      </div>
    </div>
  </div>
</div>
