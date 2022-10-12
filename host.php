<?php
$video= $_GET['token'];?>
<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0 , user-scalable=no">
    <meta name="viewport" content="width=device-width" />
    <!-- SEO-->
    <meta name="author" content="Live4wap" />
    <meta name="designer" content="Live4wap" />
    <meta name="description" content="Watch Asia Cup 2022 . No signup required">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />
    <script src="https://kit.fontawesome.com/bf2610f0a2.js" crossorigin="anonymous"></script>
    <!-- Halfmoon CSS -->
    <link href="https://cdn.jsdelivr.net/gh/halfmoonui/halfmoon@1.0.4/css/halfmoon.min.css" rel="stylesheet" />
    <title>IPL 2022 Live | IplClick</title>
<script>

document.addEventListener("DOMContentLoaded",()=> {
  const e = document.querySelector("video"),
    n = e.getElementsByTagName("source")[0].src,
    o = {};
  if(Hls.isSupported()) {
    var config = {
      maxMaxBufferLength: 100,
    };
    const t = new Hls(config);
    t.loadSource(n), t.on(Hls.Events.MANIFEST_PARSED, function(n, l) {
      const s = t.levels.map(e => e.height);
      o.quality = {
        default: s[0],
        options: s,
        forced: !0,
        onChange: e => (function(e) {
          window.hls.levels.forEach((n, o) => {
            n.height === e && (window.hls.currentLevel = o)
          })
        })(e)
      };
      new Plyr(e, o)
    }), t.attachMedia(e), window.hls = t
  } else {
    new Plyr(e, o)
  }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script src="https://cdn.plyr.io/3.6.2/plyr.polyfilled.js"></script>
</head>
<body class="dark-mode with-custom-scrollbars with-custom-css-scrollbars">
   
<video id="player" controls preload="metadata" poster="" class="plyr">
<source src="<?php echo $video; ?>" type="application/x-mpegURL"/>
</video>

<script>      document.addEventListener('DOMContentLoaded', () => {          const player = Plyr.setup('.js-player');      });  </script>



</body>
</html>
