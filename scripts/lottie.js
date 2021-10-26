let animacija = document.getElementById("home-anim")

lottie.loadAnimation({
    container: animacija, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'media/misc/lf30_editor_zr0qlv8l.json' // the path to the animation json
  });
