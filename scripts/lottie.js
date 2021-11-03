let animacija = document.getElementById("home-anim")
let codeanim = document.getElementById("code-anim")

lottie.loadAnimation({
    container: animacija, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'media/misc/heading.json' // the path to the animation json
});

lottie.loadAnimation({
  container: codeanim, // the dom element that will contain the animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'media/misc/code.json' // the path to the animation json
});
