
<div class="container"> 
<h1 class="titre mt-3"><?= $params['post']->titre ?? 'Créer un nouvel article' ?></h1>

<form action="<?= isset($params['post']) ? "/admin/posts/edit/{$params['post']->id}"  : "/admin/posts/create"?>" method="POST">
    <div class="form-group w-30">
        <label for="titre">Titre de l'article</label>
        <input type="text" class="form-control" name="titre" id="titre" value="<?= $params['post']->titre ?? ''?>">
    </div>
    <div class="form-group">
        <label for="titre">Chapo</label>
        <input type="text" class="form-control" name="chapo" id="chapo" value="<?= $params['post']->chapo ?? ''?>">
    </div>
    <div class="form-group">
        <label for="titre">Auteur</label>
        <input type="text" class="form-control" name="auteur" id="auteur" value="<?= $params['post']->auteur ?? ''?>">
    </div>
   
    <div class="form-group">
        <label for="contenu">Contenu de l'article</label>
    </div>
    <div class="form-group">
        <label for="tags">Tags de l'article </label>
        <select multiple class="form-control" id="tags" name="tags[]"> 
        <?php foreach($params['tags'] as $tag) : ?>
            <option value="<?= $tag->id ?>"
            <?php if (isset($params['post'])): ?> 
            <?php foreach($params['post']->getTags() as $postTag){
                echo ($tag->id === $postTag) ? 'selected' : '';
            }
            ?> 
            <?php endif ?>><?= $tag->name ?></option> 
                   
         <?php endforeach ?>
</select>

    </div>

    <button type="submit" class="btn btn-primary mt-3"><?= isset($params['post']) ? 'Enregistrer les modifications' : 'Enregistrer mon article' ?></button>
</form>
</div>