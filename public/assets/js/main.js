  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.tabs').tabs();
    $('.parallax').parallax();
    $(".owl-carousel").owlCarousel({
        nav:false,
        loop:false,
        dots:false,
        responsiveClass:true,
        responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        992:{
            items:1
        },
        1000:{
            items:3
        }
    }
    });
  });
var modal = document.getElementById('myModal');


var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
    modal.style.display = "block";
}


span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

(function($) {
    $(document).ready(function() {
            var owl = $('#slider');
owl.owlCarousel();
// Go to the next item
$('.nxtBtn').click(function() {
    owl.trigger('next.owl.carousel');
});
// Go to the previous item
$('.prvBtn').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
});
    });
});

document.getElementById('btn_car').addEventListener('click', function () {
  window.location.href = '#maps';
});
document.getElementById('btn_news').addEventListener('click', function () {
  window.location.href = '/news';
});
setTimeout(function() {
  document.getElementById('carier').style.display = 'block';
}, 6000);

const elem = document.querySelector('.m-p-g');

document.addEventListener('DOMContentLoaded', function() {
const gallery = new MaterialPhotoGallery(elem);
});

// const anime =  document.querySelector('#el1');
// var animation = setInterval(function() {
//   anime.classList.add('animated', 'fadeInLeftBig', 'sl')
// }, 8000);
// setTimeout(function() {
//   clearInterval(animation);
//   anime.classList.remove('animated', 'fadeInLeftBig', 'sl')
// }, 14000);
// if (setTimeout(function() {
//     document.getElementById('el1').style.display = 'none';
// }, 12000)){
//     anime.classList.add('animated', 'fadeInLeftBig', 'sl')
// }
// else
// {
//     anime.classList.remove('animated', 'fadeInLeftBig', 'sl')
// }