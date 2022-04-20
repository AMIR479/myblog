<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= SCRIPTS .'css' . DIRECTORY_SEPARATOR . 'app.css'?>">
      <link rel="stylesheet" href="<?= SCRIPTS .'css' . DIRECTORY_SEPARATOR . 'style.css'?>"></head>

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