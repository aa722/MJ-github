<?php
require_once 'connexion.php';

if(isset($_POST['email']) && isset($_POST['pswd'])) {
    $mail = $_POST['email'];
    $psw = $_POST['pswd'];
    
    try {
        $conn = se_connecter();
        $query = $conn->prepare("SELECT ID_utilisateur as ID, Mail_utilisateur as mail, Mot_de_passe as psw FROM utilisateur WHERE Mail_utilisateur = :email AND Mot_de_passe = :pswd");
        $query->execute([':email' => $mail, ':pswd' => $psw]);
        $resultat = $query->fetch(PDO::FETCH_ASSOC);

        if($resultat) {
           header('location:index.php');
           session_start();
           $_SESSION['connecte']=$resultat['ID'];
           exit();

        } else {
            echo "Identifiants incorrects.";
        }
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
