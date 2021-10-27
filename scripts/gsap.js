gsap.registerPlugin(ScrollTrigger)

let container = document.getElementById("panel");

gsap.to(container, {
  x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
  ease: "none",
  scrollTrigger: {
    start:"60% top",
    trigger: container,
    invalidateOnRefresh: true,
    pin: true,
    scrub: 1,
    end: () => "+=" + container.offsetWidth,
    markers:true,
  }
})