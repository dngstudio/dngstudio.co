var $marquee = document.getElementById('marquee');
      
var marquee = (window.m = new dynamicMarquee.Marquee($marquee, {
    rate: -100,
    }));
      
window.l = dynamicMarquee.loop(
    marquee,
        [
        function () {
            return 'Činimo Internet lepšim mestom.';
        },
        function () {
            return 'Kreiraćemo sajt po Vašoj meri, urađen po najsavremenijim standardima.';
        },
        ],
        function () {
            var $separator = document.createElement('div');
            $separator.innerHTML = '&nbsp|&nbsp';
            return $separator;
        }
);