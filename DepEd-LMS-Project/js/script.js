
// <-- Carousel --> Used in Index page
$(document).ready(function () {
  $("#myCarousel").slidesjs({
    play: {
      active: true,
      auto: true,
      interval: 500,
      swap: true,
    },
  });
});

// <-- Sticky Navbar --> Used on the Index page
$(document).ready(function () {
  $(window).bind("scroll", function () {
    if ($(window).scrollTop() > 0) {
      $("nav").addClass("scroll-active");
    } else {
      $("nav").removeClass("scroll-active");
    }
  });
});

// <-- image tracker --> used on body 
const track = document.getElementById("image-track");
window.onmousedown = e =>{

  track.dataset.mouseDownAt = e.clientX;
}
window.onmousedown = () =>{
  track.dataset.mouseDownAt = "0";
  track.dataset.prevPercentage = track.dataset.percentage;
}
window.onmousemove = e => {
  const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
    maxDelta = window.innerWidth / 2;
  
  const percentage = (mouseDelta / maxDelta) * -100;
    nextPercentage = parseFloat(track.dataset.prevPercentage) + percentage;

    track.dataset.prevPercentage = nextPercentage;
  track.style.transform = `translate(${percentage}%, -50%)`;
}
track.animate({
  transform: `translate(${nextPercentage}%, 50%)`
}, {duration: 1200, fill:"fowards"});
image.animate({
  transform: `translate(${100 + nextPercentage}%, center)`
}, {duration: 1200, fill:"fowards"});

for (const image of track.getElementsByClassName("image")){
  image.style.objectPostition =`${nextPercentage +100} 50%`;
}


// <-- Modal --> 
const myModal = document.getElementById("myModal");
const myInput = document.getElementById("myInput");

myModal.addEventListener("shown.bs.modal", () => {
  myInput.focus();
});