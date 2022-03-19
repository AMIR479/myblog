<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Blog AMIR</title>
      <link rel="stylesheet" href="<?= SCRIPTS .'css' . DIRECTORY_SEPARATOR . 'app.css'?>">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand btn btn-danger" href="/">Blog Amir
          <p class="btn btn-danger">Dev Fullstack</p>
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link " href="/">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts">Tous les posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/admin/posts">Admin</a>
          </li>
        </ul> 
        <ul class="navbar-nav ml-auto ">
            <?php if(isset($_SESSION['auth'])): ?>
              <li class="nav-item">
                <a class="nav-link " href="/logout">Se deconnecter</a>
            </li>
            <?php endif ?>
        </ul>
      </div>
    </nav>      

     <div class="container">
         <?= $content ?>  
    </div> 
   
  </body>
</html>       
       
 
