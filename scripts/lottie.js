let animacija = document.getElementById("home-anim");
let codeanim = document.getElementById("code-anim");
let socialanim = document.getElementById("socialanim");
let msgsent = document.getElementById("msg-sent");

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

lottie.loadAnimation({
  container: socialanim, // the dom element that will contain the animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'media/misc/social-media.json' // the path to the animation json
});



$("#submit-btn").click(function(){
  lottie.loadAnimation({
    container: msgsent, // the dom element that will contain the animation
    renderer: 'svg',
    autoplay: true,
    loop:false,
    path: 'media/misc/DNG Studio - Message Sent.json' // the path to the animation json
  });
})


