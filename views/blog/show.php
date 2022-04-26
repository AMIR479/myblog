<div class="container mt-2">
    <h1 class="titrePost text-center mt-3"><?= $params['post']->titre ?></h1>
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
            <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'styles.css' ?>">
            <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
            <script>
                tinymce.init({
                    selector: '#mytextarea'
                });
            </script>
        </head>
    </div>
    <p>Publié le: <?= htmlentities($params['post']->getCreatedAt()) ?></p>
    <p><?= $params['post']->chapo ?></p>
    <p><?= $params['post']->contenu ?></p>
    <p><?= $params['post']->auteur ?></p>
    <hr>
    <a href="../posts" class="btn btn-primary">Retourner en arrière</a>
    <br><br>
    <div class="mb-4">
        <h3 class="comment text-center">Commentaires</h3>
        <form action="<?= isset($params['post']) ? "/comment/create/{$params['post']->id}"  : "/ " ?>" method="POST">
            <div class="form-group">
                <label for="prenom">Votre prenom</label>
                <input type="text" name="auteur" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Ajouter un commentaire</label>
                <textarea name="contenu" class="form-control "></textarea>
                <button class="btn btn-primary mt-2" type="submit">Soumettre</button>
            </div>
        </form>
    </div>
    <h5 class="affichageComment text-center">Tous les commentaires</h5>
    <?php foreach ($params['post']->getComments() as $comment) : ?>
        <div class="card p-3 mb-2 bg-light">
            <div><?= $comment->auteur ?></div>
            <div><?= $comment->contenu ?></div>
            <div><?= $comment->date_creation ?></div>
        </div>
    <?php endforeach ?>

</div>