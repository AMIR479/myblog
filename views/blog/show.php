
<h1><?= $params['post']->titre ?></h1>
<div>
<?php foreach($params['post']->getTags() as $tag): ?>
    <span class="bade badge-info"><a href="./tags/<?= $tag->id ?>" class="text-green"><?= $tag->name ?> </a></span>
<?php endforeach?>   



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= SCRIPTS .'css' . DIRECTORY_SEPARATOR . 'app.css'?>">
      <link rel="stylesheet" href="<?= SCRIPTS .'css' . DIRECTORY_SEPARATOR . 'style.css'?>">
</head>
</div>
<p>Publié le: <?= $params['post']->getCreatedAt() ?></p>
<p><?= $params['post']->chapo ?></p>
<p><?= $params['post']->contenu ?></p>
<p><?= $params['post']->auteur ?></p>
<hr>
<a href="../posts" class="btn btn-primary">Retourner en arrière</a>
<br><br>
<h3>Commentaires</h3>
<form action="<?= isset($params['post']) ? "/comment/create/{$params['post']->id}"  : "/ "?>" method="POST">
<div class="form-group">
    <label for="prenom">Votre prenom</label>
    <input type="text" name="auteur" class="form-control">
</div>
<div class="form-group">
    <label for="message">Ajouter un commentatire</label>
    <textarea name="contenu" class="form-control "></textarea>
    <button class="btn btn-primary mt-2" type="submit">Soumettre</button>
</div>


</form>

