

let topcontainer = document.getElementById("panelcontainer");

let container = document.getElementById("panel");

$( document ).ready(function() {
  gsap.from("#pmockup", {
    x: 500,
    scrollTrigger: {
      trigger: "#pmockup",
      start: "-30% top", // when the top of the trigger hits the top of the viewport
      end: "+=500", // end after scrolling 500px beyond the start
      scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
      markers:true
    }
  });
});





