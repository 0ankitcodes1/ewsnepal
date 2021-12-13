// owl carousel-js

$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
  });

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        // 600:{
        //     items:3
        // },
        // 1000:{
        //     items:5
        // }
    }
})

$('.owl-projects').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:3
        },
        // 600:{
        //     items:3
        // },
        // 1000:{
        //     items:5
        // }
    }
})

// // image gallery



document.addEventListener("click",function (e){
    if(e.target.classList.contains("gallery-item")){
          const src = e.target.getAttribute("src");
          document.querySelector(".modal-img").src = src;
          const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
          myModal.show();
    }
  })