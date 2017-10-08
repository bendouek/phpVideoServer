<!doctype html>
 <?php
    include 'getVideo.php';

    $vid = vidInit();
?>


<html lang="en">
<head>
  <meta charset="utf-8">

  <title>YouTube Gems</title>
  <meta name="description" content="The gems from YouTube">
  <meta name="author" content="">
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99114957-3', 'auto');
  ga('send', 'pageview');

  </script>

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
	    google_ad_client: "ca-pub-4380878725837735",
	    enable_page_level_ads: true
	  });
	</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  <link href="http://youtubegems.com/style.css" rel="stylesheet">


  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>
<body>
<div class="container-fluid">
  <div class='header-wrapper row align-items-end'>
      <div><img src='http://youtubegems.com/ytg_logo.png' height='100px'/></div>
      <div>YTG</div>
  </div>
  <div class="main-content">
      <div id='vid-title'><h3><?php echo $vid["NAME"]; ?></h3></div>
      <div class="row vid-content align-items-center justify-content-center">
        <div class='col-2' id='prev'><img src='http://youtubegems.com/prev.png' width='150px' /></div>
        <div class='vid-container col-8'>
          <div id='video-wrapper'><iframe id="vidframe" src="<?php echo $vid["URL"]; ?>" frameborder="1" allowfullscreen></iframe></div>
        </div>
        <div class='col-2' id='next'><img src='http://youtubegems.com/next.png' width='150px' /></div>
      </div>
  </div>
  <script>

  var nextVideo = function(id) {
    // request a video which doesn't have the id of the current one 
    var ajaxNext = new XMLHttpRequest();
    $('#video-wrapper').html("LOADING");
    ajaxNext.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var newVid = JSON.parse(this.responseText);
            $('#video-wrapper').html('<iframe id="vidframe" src="' + newVid["URL"] + '" frameborder="1" allowfullscreen></iframe>');
            window.currentID = newVid['ID'];
            $('#vid-title').html("<h3>" + newVid['NAME'] + "</h3>");
        }
    };
    ajaxNext.open("GET", "getVideo.php?q=next&id=" + window.currentID, true);
    ajaxNext.send();
  }


  $(document).ready(function() {
    <?php echo 'window.currentID = '.$vid["ID"].';'; ?>
    console.log(window.currentID + ' is the first id ');
    $('#prev').click(()=> {alert('p');});
    $('#next').click(() => {nextVideo(window.currentID);});
  });
  </script>
</body>
</body>
</html>

