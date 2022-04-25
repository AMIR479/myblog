<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog AMIR</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons -->
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'app.css' ?>">
  <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'style.css' ?>">
  <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'styles.css' ?>">
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

      <div class="container w-50 mt-5">
      <div class="card p-3 mb-2 " id="cont">
        <h2 class="text-center mt-3 mb-2" id="formCon">Formulaire de contact</h2>
<form action="/posts/contact" method="POST">
<div class="form-group" >
        <input name="username"  type="text" class="form-control mt-5" id="username" placeholder="Entrez votre pseudo" required>
  </div>
  <div class="form-group" >
        <input name="email"  type="email" class="form-control mt-3" id="email" placeholder="Entrez votre émail" required>
  </div>

  <div class="form-group">
    
    <textarea name="message" class="form-control mt-3" id="message" rows="3" placeholder="Ecrivez votre message" required></textarea>
  </div>
    <br>
    <div class=" justify-content-center "> 
        <button type="submit" class="btn btn-primary " id="envoi" name="envoyer">Envoyer</button>
    </div>
</form>
      </div>
      </div>