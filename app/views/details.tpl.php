<div class="card mb-3" ">
<div class=" card-header bg-transparent border-success">
    <h2>#<?= $viewParams['details']->getNumero() ?>  <?= $viewParams['details']->getNom() ?></h2>
</div>
<div class="row no-gutters">
    <div class="col-md-4">
        <img src="<?= $_SERVER["BASE_URI"] ?>/img/<?= $viewParams['details']->getNumero() ?>.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
        <div class="card-body">


            <?php $pv = ($viewParams['details']->getPv()) * 100 / 255 ?>
           
            <h5>Pv : <?= $viewParams['details']->getPv() ?></h5>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="255" style="width:<?= $pv ?>%">
                </div>
            </div>

            <?php $attaque = ($viewParams['details']->getAttaque()) * 100 / 255 ?>
           
            <h5>attaque : <?= $viewParams['details']->getAttaque() ?></h5>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="255" style="width:<?= $attaque ?>%">
                </div>
            </div>

            <?php $defense = ($viewParams['details']->getDefense()) * 100 / 255 ?>
           
            <h5>defense : <?= $viewParams['details']->getDefense() ?></h5>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="255" style="width:<?= $defense ?>%">
                </div>
            </div>

            <?php $attaque_spe = ($viewParams['details']->getAttaque_spe()) * 100 / 255 ?>
           
            <h5>Attaque Spé : <?= $viewParams['details']->getAttaque_spe() ?></h5>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="255" style="width:<?= $attaque_spe ?>%">
                </div>
            </div>


            <?php $defense_spe = ($viewParams['details']->getDefense_spe()) * 100 / 255 ?>
           
            <h5>Defense Spé : <?= $viewParams['details']->getDefense_spe() ?></h5>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="255" style="width:<?= $defense_spe ?>%">
                </div>
            </div>


            <?php $vitesse = ($viewParams['details']->getVitesse()) * 100 / 255 ?>
           
            <h5>Vitesse : <?= $viewParams['details']->getVitesse() ?></h5>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="255" style="width:<?= $vitesse ?>%">
                </div>
            </div>
            
            


        </div>
    </div>
</div>
</div>