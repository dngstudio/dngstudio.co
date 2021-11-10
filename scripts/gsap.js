
let container = document.getElementById("container");

let sections = gsap.utils.toArray(".module");

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


$( document ).ready(function() {
  gsap.to(container, {
    x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
    ease: "none",
    scrollTrigger: {
      trigger: container,
      start:"top top",
      pin: true,
      scrub: 1,
      markers:true,
      end: () => "+=" + container.offsetWidth,
      snap: 1 / (sections.length - 1),
    }
  })

});