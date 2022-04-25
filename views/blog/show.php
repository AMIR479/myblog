<div class="container mt-2"  >
    <h1><?= $params['post']->titre ?></h1>
    <div>
        <?php foreach ($params['post']->getTags() as $tag) : ?>
            <span class="bade badge-info"><a href="./tags/<?= $tag->id ?>" class="text-green"><?= $tag->name ?> </a></span>
        <?php endforeach ?>

<!-- Page affichage de chaque post et commentaires -->

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'app.css' ?>">
            <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'style.css' ?>">
        </head>
    </div>
    <p>Publié le: <?= htmlentities($params['post']->getCreatedAt()) ?></p>
    <p><?= htmlentities($params['post']->chapo) ?></p>
    <p><?= htmlentities($params['post']->contenu) ?></p>
    <p><?= htmlentities($params['post']->auteur) ?></p>
    <hr>
    <a href="../posts" class="btn btn-primary">Retourner en arrière</a>
    <br><br>
    <div class="mb-4">
        <h3>Commentaires</h3>
        <form action="<?= isset($params['post']) ? "/comment/create/{$params['post']->id}"  : "/ " ?>" method="POST">
            <div class="form-group">
                <label for="prenom">Votre prenom</label>
                <input type="text" name="auteur" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Ajouter un commentatire</label>
                <textarea name="contenu" class="form-control "></textarea>
                <button class="btn btn-primary mt-2" type="submit" name="soumet">Soumettre</button>
            </div>
        </form>
    </div>
    <?php foreach ($params['post']->getComments() as $comment) : ?>
        <div class="card p-3 mb-2 bg-light">
            <div><?= htmlentities($comment->auteur) ?></div>
            <div><?= htmlentities($comment->contenu) ?></div>
            <div><?= htmlentities($comment->date_creation) ?></div>
        </div>
    <?php endforeach ?>

</div>