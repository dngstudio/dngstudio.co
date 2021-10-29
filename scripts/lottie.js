let animacija = document.getElementById("home-anim")

lottie.loadAnimation({
    container: animacija, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'media/misc/heading.json' // the path to the animation json
  });
