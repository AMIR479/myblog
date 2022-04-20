
<!DOCTYPE html>
<html lang="en">
    
 <body>
     <?php
        if(isset($_GET['reg_err']))
        {
            $err = htmlspecialchars($_GET['reg_err']);

            switch($err)
            {
                case 'success':
                    ?>
                    <div class="alert alert-success">
                        <strong>Success</strong>Inscription réussie!!
                    </div>
                    <?php
                    break;
            }
        }
     ?>

<div class="container card_form w-50 p-3" id="insc">
    <span><h2 class=" container text-center btn  mt-5  mb-3" id="log" >Inscription</h2></span>
            <form action="/register" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Entrer votre pseudo">
                <br>
                </div>
            
            <div class="form-group">
                <input type="email" name="email" class="form-control" id="email" placeholder="Entrer votre email"/>
            </div>
            <br>
            <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Entre votre mot de passe" />
            </div>
            <br>
            <div class="form-group">
                <input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Confirmer votre mot de passe"/>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="valider" id="valid">M'inscrire</button>
        </form>
     </div>
    

       
 </body>
</html>

