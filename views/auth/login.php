
<?php if (isset($_SESSION['errors'])): ?>

<?php foreach($_SESSION['errors'] as $errorsArray): ?>
    <?php foreach($errorsArray as $errors): ?>
        <div class="alert alert-danger">
            <?php foreach($errors as $error): ?>
                <li><?= $error ?></li>
           <?php endforeach ?>    
        </div>
    <?php endforeach ?>
<?php endforeach ?>

<?php endif ?>  
<?php session_destroy() ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= SCRIPTS .'css' . DIRECTORY_SEPARATOR . 'style.css'?>">
</head>
<body>
    
</body>
</html>


<div class="container card_form" id="form">
    <span><h2 class=" container text-center btn  mt-5  mb-3" id="log" >LOGIN</h2></span>
                <br>
    <form action="/login" method="POST" >
        <div class="form-group">
            <input type="text" class="form-control" name="username" id="username" placeholder="Entrer votre pseudo">
        <br>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Entrer votre mot de passe">
        </div>
        <div>
            <button type="submit" class="btn  " id="connect" >Se connecter</button>
        </div>  
        
    </form>
</div>
