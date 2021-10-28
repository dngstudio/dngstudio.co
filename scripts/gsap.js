gsap.registerPlugin(ScrollTrigger)

let container = document.getElementById("panel");

gsap.to(container, {
  x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
  ease: "power1.inOut",
  scrollTrigger: {
    trigger: container,
    start:"45% top",
    invalidateOnRefresh: true,
    scrub: 1,
    end: () => "+=" + container.offsetWidth,
    markers:true,
  },
  snap: {
    snapTo: "#panel",
    duration: 0.3,
  },
})

