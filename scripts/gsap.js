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







