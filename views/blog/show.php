
<h1><?= $params['post']->titre ?></h1>
<div>
<?php foreach($params['post']->getTags() as $tag): ?>
    <span class="bade badge-info"><a href="./tags/<?= $tag->id ?>" class="text-green"><?= $tag->name ?> </a></span>
<?php endforeach?>   

</div>
<p>Publié le: <?= $params['post']->getCreatedAt() ?></p>
<p><?= $params['post']->chapo ?></p>
<p><?= $params['post']->contenu ?></p>

<a href="../posts" class="btn btn-secondary">Retourner en arrière</a>