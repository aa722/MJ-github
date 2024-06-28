function createFilmItem() {
    // Créer l'élément principal film_item
    const filmItem = document.createElement('div');
    filmItem.classList.add('film_item');

    // Ajouter la division film_fondu
    const filmFondu = document.createElement('div');
    filmFondu.classList.add('film_fondu');
    filmFondu.innerHTML = '<a href="#"><img src="Icones/play-button.png" alt="" class="bouton_play"></a>';
    filmItem.appendChild(filmFondu);

    // Ajouter la division info_film
    const infoFilm = document.createElement('div');
    infoFilm.classList.add('info_film');
    infoFilm.innerHTML = '<span class="qualite">FULL HD</span><span class="classification">2021  7+</span>';
    filmItem.appendChild(infoFilm);

    // Ajouter l'image vignette_film
    const vignetteFilm = document.createElement('img');
    vignetteFilm.classList.add('vignette_film');
    vignetteFilm.src = 'Images/12.jpg';
    vignetteFilm.alt = '';
    filmItem.appendChild(vignetteFilm);

    // Ajouter la division desc_film
    const descFilm = document.createElement('div');
    descFilm.classList.add('desc_film');
    descFilm.innerHTML = '<h2 class="titre_film">Emoji Movie</h2><p class="genre">jeunesse, comédie</p>';
    filmItem.appendChild(descFilm);

    return filmItem;
}

// Exemple d'utilisation : créer l'élément et l'ajouter au corps du document
const filmElement = createFilmItem();
document.body.appendChild(filmElement);
