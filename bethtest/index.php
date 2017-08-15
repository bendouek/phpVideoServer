<!doctype html>

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
  <script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

  <style>
    body {
      background-color: #000000;
      height: 100vh;
      overflow: hidden;
      color:#f1f1f1;
    }
    .row {
      height: 100%;
    }
    .everything {
      height: 100%;
    }
  </style>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>
<body>
  <?php
    $servername = "localhost";
    $username = "bendouek_beth";
    $password = "Beth8899";
    $dbname = "bendouek_gemsContent";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM test";
    $result = $conn->query($sql);
    ?>

<div class="container-fluid everything">
  <div class="row align-items-center justify-content-center">
      <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class=\"panel panel-default\">";
                echo "ID: " . $row["ID"] .  " <br> <h1> Name: " . $row["NAME"];
                echo " </h1> <br><iframe width=\"854\" height=\"480\" src=\"" . $row["URL"];
                echo "\" frameborder=\"0\" allowfullscreen></iframe> <br> COMMENT: " . $row["COMMENT"] ."<br>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
      ?>
  </div>
</div>
</body>
</html>
