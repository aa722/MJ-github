<?php
require_once 'connexion.php';
$conn=se_connecter();
/*try{
    $query=$conn->prepare('insert into video(titre)values(:titre)');
    $query->execute([':titre' =>'Emoji']);
    echo 'envoie réussie';
}catch(PDOException $e){
   echo $e->getMessage();
} */
$chemin=null;
if(isset($_GET['film'])){
    $chemin=$_GET['film'];
}

?>

<video controls="controls" preload="auto" width="380px" src="<?= htmlspecialchars($chemin, ENT_QUOTES, 'UTF-8') ?>" >
  
</video>


<pre>
    <?php 
    var_dump($chemin);
        var_dump($_GET);
    ?>
</pre>

<?php
    
$red = mt_rand(0, 255);
$green = mt_rand(0, 255);
$blue = mt_rand(0, 255);

// Formater les composantes RGB en un code couleur hexadécimal
$color = sprintf("#%02x%02x%02x", $red, $green, $blue);

// Afficher le code couleur généré
echo "Code couleur généré aléatoirement : $color";
?>