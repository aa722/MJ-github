
<?php
   require_once 'connexion.php';
   require_once 'login.php';
   $fichier = 'index.php';
   global $pasID;
   $pasID=false;
   global $error;
   global $conn;
   $conn=se_connecter();
   //Cette fonction ^permet de vérifier si le mail entré par l'utilisateur existe déjà dans la bd
   function verifier_mail():bool{
    if(isset($_POST['email'])){
        try{
           $email=$_POST['email'];
           $conn2=se_connecter();
           $query=$conn2->prepare("SELECT Mail_utilisateur FROM utilisateur WHERE Mail_utilisateur=:email");
           $query->execute([':email'=>$email]);
           $resultat=$query->fetch(PDO::FETCH_ASSOC);

        }
        catch(PDO_Exception $e){
            echo $e->getMessage();
        }
        if($resultat)
        {
          return true;
        }else{
            return false;
        }
    }
   }

   if((isset($_POST['nom']))&&(isset($_POST['email']))&&(isset($_POST['pswd'])))
   {
        if($_POST['pswd']!==$_POST['pswd2']){
            $pasID=!$pasID;
        }
        elseif(verifier_mail()){
            $error="adresse mail déjà utilisée";
        }
        else{
            try{
                $query=$conn->prepare('insert into utilisateur(pseudo,Mail_utilisateur,Mot_de_passe)values(:pseudo,:Mail_utilisateur,:Mot_de_passe)');
                $query->execute([
                    ':pseudo' => $_POST['nom'],
                    ':Mail_utilisateur' => $_POST['email'],
                    ':Mot_de_passe' =>$_POST['pswd']]);
              }catch(PDOException $e){
                echo "Erreur lors de l'inscription : " . $e->getMessage();
               
              }
        }
   }

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="formulaire.css">
</head>
<body>

<div class="main">

    <input type="checkbox" id="check" aria-hidden="true">
    <div class="inscription_contenair">

        <form method="POST" action="">
            <label for="check" aria-hidden="true"  style="user-select:none">S'inscrire</label>
            <input type="text" name="nom" placeholder="pseudo de l'utilisateur" required="">
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="pswd" placeholder="Mot de passe" required="">
            <input type="password" name="pswd2" placeholder="Confirmez votre mot de passe" required="">
            <button type="submit">S'inscrire</button>
            <?php if($pasID): ?>
                <span style="color:red;font-size:15px;margin-left:35px">Les mots de passe ne sont pas identiques</span>
             <?php endif;?>
             <?php if(isset($_POST['email'])):?>
                <?php if(verifier_mail()):?>
                       <span style="color:red;font-size:15px;margin-left:90px"><?=$error?></span>
                <?php endif;?>
             <?php endif;?>
        </form>

    </div>

    <div class="connexion">

        <form method="POST">
            <label for="check" aria-hidden="true" style="user-select:none">Connexion</label>
            <input type="mail" name="email" placeholder="Email ou nom d'utilisateur" required="">
            <input type="password" name="pswd" placeholder="Mot de passe" required="">
            <button type="submit">Connexion</button>
            <p>Vous n'avez pas de compte ? <a href="#">S'inscrire</a>.</p> 
         </form>
    </div>
</div>
</body>
</html>