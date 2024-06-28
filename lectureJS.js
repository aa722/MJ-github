film_container=document.querySelector(".film");
film=document.querySelector(".film_item");
fleche=document.querySelector(".fleche_haut");
fleche2=document.querySelector(".fleche_bas");
//console.log(film_container);

film_container.computedStyleMap().get("transform");
cpt=0;

fleche.addEventListener("click",()=>{
    if(cpt<2){
        console.log(film_container.computedStyleMap().get("transform")[0].y.value);
        film_container.style.transform=`translateY(${film_container.computedStyleMap().get("transform")[0].y.value - 209}px)`
        cpt++;
    }
    else{
        film_container.style.transform=`translateY(0px)`;
        cpt=0;
    }
   
});

fleche2.addEventListener("click",()=>{
    if(cpt>=1){
        film_container.style.transform=`translateY(${film_container.computedStyleMap().get("transform")[0].y.value + 209}px)`;
        cpt--;
    }
    
})