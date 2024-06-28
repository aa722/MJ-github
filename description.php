<?php

require_once 'fonctions/fonctions_videos.php';
$titre=$_GET['titre'];

var_dump($_GET);

$video=recup_desc($titre);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture</title>
    <link rel="stylesheet" href="lecturecss.css">
</head>
<body>

    <div class="slidebar">
        <div class="logo_container">
            <h1 class="logo">2pfive</h1>
        </div>
      <div class="sidebar_container">
        
    <button class="BoutonMenu">
            <img src="Icones/icones/home_app_logo_24dp_FILL0_wght400_GRAD0_opsz24.png" style="width: 64px;" alt="" class="imgBouton"> 
            <span class="TextBouton">
            </span>
    </button>
    <button class="BoutonMenu">
        <img src="Icones/search2.png" style="width: 64px;" alt="" class="imgBouton"> 
        <span class="TextBouton">
        </span>
</button>
      </div>
    </div>

    <div class="contenair">
        <div class="detail_film">
            <div class="titre">
                <img src="<?=$video['logo']?>" alt="" class="img_titre">
            </div>
            <div class="classification_film">
                <span class="date">2018</span>
                <ul class="genre">
                    <li style="list-style: none;">Animé</li>
                    <li>Aventure</li>
                    
                </ul>
                <div class="age">
                    <span>18+</span>
                </div>
                <img src="Icones/hd.png" alt="" class="qualite">
                
            </div>
            <div class="description_film">
                <?=$video['description']?>
            </div>
            <div class="boutons_contenair">
                <img src="Icones/play-button.png" alt="" class="img_bouton play">
                <img src="Icones/like.png" alt="" class="img_bouton">
                <img src="Icones/dislike.png" alt="" class="img_bouton">
                <button onclick="createFilmItem()"><img src="Icones/icones/favorite_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" class="img_bouton"></button>
            </div>
            <div class="note">
                <img src="Icones/Favoris.png" alt="" class="etoile">
                <img src="Icones/Favoris.png" alt="" class="etoile">
                <img src="Icones/Favoris.png" alt="" class="etoile">
                <img src="Icones/Favoris.png" alt="" class="etoile">
                <img src="Icones/Favoris.png" alt="" class="etoile">
            </div>
        </div>
        <div class="contenair_categorie">
            <div class="liste_films">
                <h3 class="text">Découvrez plus de films de ce type</h1>
                <img src="Icones/up2.png" alt="" class="fleche_haut">
                <div class="film_partie">
                    <div class="film">
                        <div class="film_item">
                            <img src="Images/2.jpeg" alt="" class="vignette">
                        </div>
    
                        <div class="film_item">
                            <img src="Images/5.jpg" alt="" class="vignette">
                        </div>
    
                        <div class="film_item">
                            <img src="Images/17.jpg" alt="" class="vignette">
                        </div>

                        <div class="film_item">
                            <img src="Images/18.jpg" alt="" class="vignette">
                        </div>

                        <div class="film_item">
                            <img src="Images/19.jpg" alt="" class="vignette">
                        </div>
    
                    </div>
                </div>
                <img src="Icones/down2.png" alt="" class="fleche_bas"> 
            </div>
           
        </div>
        <img src="<?=$video['img_arriere']?>" alt="" class="img">

    </div>
    <script src="lectureJS.js"></script>
  
    
</body>
</html>
