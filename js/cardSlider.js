window.addEventListener('load', function() {
    console.log('La página ha terminado de cargarse!!');
    
    let contenScroll = document.querySelector("#carouselCont");
    let card = document.querySelector(".grid-view-item ");

    document.addEventListener('click', (e) =>{
    
        if (e.target.matches("#rightArrow") || e.target.matches("path")) {
            contenScroll.scrollLeft  +=card.offsetWidth;
            
            console.log('Right' + card.offsetWidth);
              console.log('contenScroll' + contenScroll.scrollLeft);
      
        }
        if (e.target.matches("#leftArrow") || e.target.matches("path")) {
            
            contenScroll.scrollLeft  -=card.offsetWidth;

              console.log('contenScroll' + contenScroll.scrollLeft);
    
            
        }
})
});
  
  
   

