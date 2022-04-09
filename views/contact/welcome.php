<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= SCRIPTS .'css' . DIRECTORY_SEPARATOR . 'app.css'?>">
      <link rel="stylesheet" href="<?= SCRIPTS .'css' . DIRECTORY_SEPARATOR . 'style.css'?>"></head>
<h2>Formulaire de contact</h2>
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
  <button class="btn btn-primary" name="envoyer">Envoyer</button>
</form>