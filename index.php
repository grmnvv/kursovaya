<!DOCTYPE html>
<html lang="en" style = "width:100vw; height: 100vh">
<head>
    <meta charset="UTF-8">
    <title>urhash</title>
    <link rel="stylesheet" href="css/main.css?ver=101" id="them">
	<link rel="icon" href="https://faviconka.ru/ico/1/faviconka.ru_1_117615.ico" type="image/x-icon" />
    <script type="text/javascript">
        var abc = document.getElementById('them');
        let per = document.cookie.match(/theme=(.+?)(;|$)/);
      	che();
        function che(){
            if(per){
                let lnk = 'css/main' + per[1] + '?ver=101';
              	abc.removeAttribute('href');
                abc.setAttribute('href', lnk);
            } else {
                document.cookie = 'theme=.css; path=/; expires=Tue, 19 Jan 2038 03:14:07 GMT';
                che();
            }
        }
        
    </script>
    <script src="js/main.js"></script>
     <script src="js/three.min.js"></script>
    <script src="js/vanta.net.min.js"></script>
</head>
<body style = "width:100%; height: 100%">



<div id="anim" style = "width:100%; height: 100%">
    <div class="first_slide">
        <div class="centered" >
            <button class="main_logo" onclick="linkk()">
                <p class="neon" id="neon"> urhash</p>
            </button>
        </div>
        <div class="safety">
            thats ur safety
        </div>
    </div>
    <script type="text/javascript">
        per = document.cookie.match(/theme=(.+?)(;|$)/);
        let col;
        let bg;
        let light = 0x343434;
        let lightbg = 0xffffff;
        let dark = 0x9F9F9F;
        let darkbg = 0x1e1e1e;
        if (per[1] === '.css'){
            col = dark;
            bg = darkbg;
        } 
        if(per[1] === '-dark.css') {
            col = light;
            bg = lightbg;
          }
        VANTA.NET({
            el: "#anim",
            mouseControls: true,
            touchControls: true,
            gyroControls: true,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: col,
            backgroundColor: bg,
            points: 20.00,
            maxDistance: 25.00,
            spacing: 17.00,
            showDots: false
        })
    </script>
</div>


</body>
</html>