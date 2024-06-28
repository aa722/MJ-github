<?php
require_once 'login.php';
  session_start();
  function verifier_connexion($fichier) {
    if (!isset($_SESSION['connecte'])) {
        return "formulaire.php";
    }
    return $fichier;
  }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
   <div class="barre_navigation_container">
        <div class="navbar-container">
            <div class="logo_container">
                <h1 class="logo">2pfive</h1>
            </div>
            <!--Fin logo container-->
            <div class="barre_recherche_container">
                <span class="icon_recherhche"><img id="recherche" src="Icones/search.png" alt=""></span>
                <input type="search" name="barre_recherche" placeholder="recherche" class="barre">
                <!--icone recherche--> 
            </div>
            <!--Fin barre recherche container-->            
            <div class="profile_container">
                <span id="Fr">FR</span>
                <!--Etat connexion--> 
                <?php if(empty($_SESSION)):?>
                    <span id="con"><a href="formulaire.php" style="text-decoration:none">se connecter</a></span>
                <?php else:?>
                     <div class="profile_container_items">
                        <img class="photo" src="Images/xtentacion.jpg" alt="">
                        <span class="text_profile">profile</span>
                     </div>
                <?php endif ?>

              
            </div>
              <!--Fin profile container-->
        </div>
   </div>
     <!--Fin barre de navigation-->
     
     <div class="sidebar">
        <div class="sidebar_menu">
              <!--Icones et menus-->
              <ul class="listeIcone">
                <li class="Item active">
                    <a href="#"></a>
                    <button class="BoutonMenu">
                            <img src="Icones/icones/home_app_logo_24dp_FILL0_wght400_GRAD0_opsz24.png" style="width: 40px;" alt="" class="imgBouton"> 
                            <span class="TextBouton">
                               Acceuil
                            </span>
                    </button>
                </a>
                </li><!--Fin liste1-->

                <li class="Item">
                    <a href="#"></a>
                    <button class="BoutonMenu">
                            <img src="Icones/icones/history_24dp_FILL0_wght400_GRAD0_opsz24.png" style="width: 40px;" alt="" class="imgBouton"> 
                            <span class="TextBouton">
                                Historique
                            </span>
                    </button>
                </a>
                </li><!--Fin liste2-->

                <li class="Item">
                    <a href="favoris.php">
                    <button class="BoutonMenu">
                            <img src="Icones/icones/favorite_24dp_FILL0_wght400_GRAD0_opsz24.png" style="width: 40px;" alt="" class="imgBouton"> 
                            <span class="TextBouton">
                                Favoris
                            </span>
                    </button>
                    </a>
                  
                </a>
                </li><!--Fin liste3-->

                <li class="Item">
                    <a href="#"></a>
                    <button class="BoutonMenu">
                            <img src="Icones/icones/settings_applications_24dp_FILL0_wght400_GRAD0_opsz24.png" style="width: 40px;" alt="" class="imgBouton"> 
                            <span class="TextBouton">
                                Menu
                            </span>
                    </button>
                </a>
                </li><!--Fin liste4-->
                <li class="separateur">
                    <div>

                    </div>
                </li>
                <li class="Item">
                    <a href="#"></a>
                    <button class="BoutonMenu">
                            <img src="Icones/maison (2).png" alt="" class="imgBouton"> 
                            <span class="TextBouton">
                                Menu
                            </span>
                    </button>
                </a>
                </li><!--Fin liste5-->
              </ul>

        </div>
        
     </div>
      <!--Fin Sidebar-->


    <div class="contenu_page">
         <div class="baniere">
              <div class="ban_container">
                  <img src="Images/8.jpg" alt="" class="imageBaniere">
                  <img src="Images/10.jpg" alt="" class="imageBaniere">
              </div>
            <img src="Icones/icones/double_arrow_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" class="fleche_ban">
         </div>
         <!--Fin banière-->
         
         <section class="films">
               <h1 class="titre_categorie">Nouveautés</h1>
               <!-----liste des films------------------------------->
                <div class="film_container">
                   
                    <div class="film_item">

                     <!--film overlay---------------------------------->
                     <div class="film_fondu">
                        <a href="<?= verifier_connexion("lecture.php?film=4keus.mp4&titre=emoji")?>"><img src="Icones/play-button.png" alt="" class="bouton_play"></a>
                     </div>
                      <div class="info_film">
                        <span class="qualite">
                            FULL HD
                        </span>
                        <span class="classification">2021  7+</span>
                     </div>
                       <!--film image---------------------------------->
                       <img src="Images/12.jpg" alt="" class="vignette_film">
                       <!--film espace desc-------------------------------->
                       <div class="desc_film">
                            <h2 class="titre_film">Emoji Movie</h2>
                            <p class="genre">jeunesse, comédie</p>
                        </div>
                    </div>
                    <!--film 2-->
                    <div class="film_item">

                        <!--film overlay---------------------------------->
                        <div class="film_fondu">
                           <img src="Icones/play-button.png" alt="" class="bouton_play">
                        </div>
                         <div class="info_film">
                           <span class="qualite">
                               FULL HD
                           </span>
                           <span class="classification">2021  7+</span>
                        </div>
                          <!--film image---------------------------------->
                          <img src="Images/1.jpeg" alt="" class="vignette_film">
                          <!--film espace desc-------------------------------->
                          <div class="desc_film">
                               <h2 class="titre_film">Emoji Movie</h2>
                               <p class="genre">jeunesse, comédie</p>
                           </div>
                       </div>
                       <!--film 3-->
                       <div class="film_item">

                        <!--film overlay---------------------------------->
                        <div class="film_fondu">
                           <img src="Icones/play-button.png" alt="" class="bouton_play">
                        </div>
                         <div class="info_film">
                           <span class="qualite">
                               FULL HD
                           </span>
                           <span class="classification">2021  7+</span>
                        </div>
                          <!--film image---------------------------------->
                          <img src="Images/15.jpg" alt="" class="vignette_film">
                          <!--film espace desc-------------------------------->
                          <div class="desc_film">
                               <h2 class="titre_film">Emoji Movie</h2>
                               <p class="genre">jeunesse, comédie</p>
                           </div>
                       </div>

                       <!--film 4-->

                     <div class="film_item">

                        <!--film overlay---------------------------------->
                        <div class="film_fondu">
                           <img src="Icones/play-button.png" alt="" class="bouton_play">
                        </div>
                         <div class="info_film">
                           <span class="qualite">
                               FULL HD
                           </span>
                           <span class="classification">2021  7+</span>
                        </div>
                          <!--film image---------------------------------->
                          <img src="Images/8.jpg" alt="" class="vignette_film">
                          <!--film espace desc-------------------------------->
                          <div class="desc_film">
                               <h2 class="titre_film">Emoji Movie</h2>
                               <p class="genre">jeunesse, action</p>
                           </div>
                       </div>
                       <div class="film_item">

                        <!--film overlay---------------------------------->
                        <div class="film_fondu">
                           <img src="Icones/play-button.png" alt="" class="bouton_play">
                        </div>
                         <div class="info_film">
                           <span class="qualite">
                               FULL HD
                           </span>
                           <span class="classification">2021  7+</span>
                        </div>
                          <!--film image---------------------------------->
                          <img src="Images/10.jpg" alt="" class="vignette_film">
                          <!--film espace desc-------------------------------->
                          <div class="desc_film">
                               <h2 class="titre_film">Emoji Movie</h2>
                               <p class="genre">jeunesse, comédie</p>
                           </div>
                       </div>
                       <div class="film_item">

                        <!--film overlay---------------------------------->
                        <div class="film_fondu">
                           <img src="Icones/play-button.png" alt="" class="bouton_play">
                        </div>
                         <div class="info_film">
                           <span class="qualite">
                               FULL HD
                           </span>
                           <span class="classification">2021  7+</span>
                        </div>
                          <!--film image---------------------------------->
                          <img src="Images/3.jpg" alt="" class="vignette_film">
                          <!--film espace desc-------------------------------->
                          <div class="desc_film">
                               <h2 class="titre_film">Emoji Movie</h2>
                               <p class="genre">jeunesse, comédie</p>
                           </div>
                       </div>
                       <div class="film_item">

                        <!--film overlay---------------------------------->
                        <div class="film_fondu">
                           <img src="Icones/play-button.png" alt="" class="bouton_play">
                        </div>
                         <div class="info_film">
                           <span class="qualite">
                               FULL HD
                           </span>
                           <span class="classification">2021  7+</span>
                        </div>
                          <!--film image---------------------------------->
                          <img src="Images/11.jpg" alt="" class="vignette_film">
                          <!--film espace desc-------------------------------->
                          <div class="desc_film">
                               <h2 class="titre_film">Emoji Movie</h2>
                               <p class="genre">jeunesse, comédie</p>
                           </div>
                       </div>               
                </div>
                <img src="Icones/icones/double_arrow_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" class="fleche">
                <img src="Icones/double_arrow_24dp_FILL0_wght400_GRAD0_opsz248_2.png" alt="" class="fleche_2">
                <?php require_once 'require.php'; ?>
          </section>

         
          <!--Fin section films-->     
      </div>
      <script src="app.js"></script>
</body>
</html>
