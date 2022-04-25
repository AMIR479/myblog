
<!-- Page admin  -->
<div class="container">
<div class="card-body">
<h1 class="titre mt-3 text-center">Administration des articles</h1>

<?php if(isset( $_GET['success'])): ?>
  <div class="alert alert-success">Vous êtes connecté</div>

  <?php endif ?>

<a href="/admin/posts/create" class="btn btn-success my-3">Créer un nouvel article</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titre</th>
      <th scope="col">Date de Publication</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($params['posts'] as $post): ?>
    <tr>
      <th scope="row"><?= $post->id ?></th>
      <td><?= $post->titre ?></td>
      <td><?= $post->getCreatedAt() ?></td>
      
      
      <td>
        <a href="/admin/posts/edit/<?= $post->id ?>" class="btn btn-warning ">Modifer</a>
        <form  action="/admin/posts/delete/<?= $post->id ?>" method="POST" class="d-inline">
        <button type="submit" class="btn btn-danger ">Supprimer</button>
       </form>
      </td>
    </tr>
  <?php endforeach ?>
 </tbody>
</table>
</div>
</div>