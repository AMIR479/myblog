<h5 class="affichageComment text-center">Tous les commentaires</h5>
  
    <?php  foreach ($params['comments'] as $comment) : ?>  
        <div class="card p-3 mb-2 bg-light">
            <div><?= $comment->auteur ?></div>
            <div><?= $comment->contenu ?></div>
            <div><?= $comment->date_creation ?></div>
            <div>Etat Validation: <?= $comment->confirmation ?></div>

            <?php if($comment->confirmation == 0) : ?>
         
            <form action="/admin/comment/confirmed/<?= intval($comment->id_comment) ?>" method="POST" class="d-inline">
                <button type="submit" class="btn btn-success ">Valider</button>
              </form>
              <?php endif ?>

        </div>
        <?php endforeach ?>