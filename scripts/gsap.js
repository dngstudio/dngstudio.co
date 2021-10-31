gsap.registerPlugin(ScrollTrigger)

let topcontainer = document.getElementById("panelcontainer");

let container = document.getElementById("panel");

const tl = gsap.timeline();

tl.to(container, {
  x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
  ease: "power2.out" ,
  scrollTrigger: {
    ease: "none",
    trigger: container,
    start:"top top",
    scrub: true,
    end: () => "+=" + container.offsetWidth,
    markers:true,
    pin: topcontainer,
    invalidateOnRefresh: false,
  },
});

gsap.from("#pmockup", {
  x: 500,
  scrollTrigger: {
    trigger: "#pmockup",
    start: "top top", // when the top of the trigger hits the top of the viewport
    end: "+=500", // end after scrolling 500px beyond the start
    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
    markers:true
  }
});






