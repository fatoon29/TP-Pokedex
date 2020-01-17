<div class="card-deck">



    <?php foreach ($viewParams['list'] as $pokemon) : ?>
        <div class="col mb-6">
            <div class="card">
                <img src="<?= $_SERVER["BASE_URI"] ?>/img/<?= $pokemon->getNumero() ?>.png" alt= <?= $pokemon->getNom() ?>>
                <div class="card-body">
                    <h5 class="card-title"><?= $pokemon->getNumero() ?></h5>
                    <h5 class="card-title"><?= $pokemon->getNom() ?></h5>
                   
                    <a href="<?= $router->generate("details", ["id" => $pokemon->getId()]) ?>"
                    class="btn btn-primary">Détails du pokemon</a>
                </div>
            </div>
        </div>

    <?php endforeach ?>


</div>