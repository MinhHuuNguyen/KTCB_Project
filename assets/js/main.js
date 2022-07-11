/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector("#main-navbar").style.top = "0";
  } else {
    document.querySelector("#main-navbar").style.top = `-${
      document.querySelector("#main-navbar").clientHeight
    }px`;
  }
  prevScrollpos = currentScrollPos;
};

var acc = document.querySelectorAll(".accordion");
var accIndx;
for (accIndx = 0; accIndx < acc.length; accIndx++) {
  acc[accIndx].addEventListener("click", function () {
    this.classList.toggle("active");
    this.classList.toggle("rotate-down");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

let onResizeBody = () => {
  let navbar = document.querySelector("#main-navbar");
  let primary = document.querySelector("#primary");

  if (navbar && primary) {
    primary.style.paddingTop = `${navbar.clientHeight}px`;
  }
};

$(document).ready(function () {
  var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    nav:true,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },            
        960:{
            items:5
        },
        1200:{
            items:6
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});
});
