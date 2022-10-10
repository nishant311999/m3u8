<?php
$video= $_GET['token'];?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet" />

<style>
      /* Change colour of progress bar */
      .vjs-blue-theme .vjs-play-progress {
         background: #fff;
      }
</style>
<body style="background-color: #000;">
</body>

</head>
<body>
   <video
    id="my-video"
    class="video-js vjs-big-play-centered vjs-blue-theme"
    controls preload="auto"
    style="margin: 0 auto;"
    fluid="true"
    poster=""
    data-setup="{}">

<source src="<?php echo $video; ?>" type="video/webm" />

<p class="vjs-no-js">
<a href="https://videojs.com/html5-video-support/" target="_blank"></a>
</p>
</video>

<script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>
</body>
</center>
</div></div></div></div>


