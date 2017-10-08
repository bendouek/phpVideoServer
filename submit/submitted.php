<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Submitted a Gem</title>
  <meta name="description" content="">
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

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
<style>
  body {
    background-color: #000000;
    overflow: hidden;
    color:#f1f1f1;
  }
</style>
</head>
<body>

<?php

// cleanse password for safety 
$_POST["password"] = str_replace(' ', '-', $_POST["password"]);
$_POST["password"] = preg_replace('/[^A-Za-z0-9\-]/', '', $_POST["password"]);

if ($_POST["password"] != "nope" || !isset($_POST["name"]) || !isset($_POST["url"]) || $_POST["name"]=="" || $_POST["url"]=="") {
	echo "You have failed the secret test.";
} /*else if (parse_url($_POST["url"], PHP_URL_HOST) != 'youtube.com') {
  echo "Unrecognized URL format.";
}*/ else {

  

    $servername = "localhost";
    $username = "bendouek_beth";
    $password = "Beth8899";
    $dbname = "bendouek_gemsContent";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection to database failed: " . $conn->connect_error);
    }

    // insertion 
    if($_POST["comment"] == ""){
    	$sql = "INSERT INTO test (NAME, URL) VALUES ('". $_POST["name"] . "', '". $_POST["url"] ."');";
    } else {
    	$sql = "INSERT INTO test (NAME, URL, COMMENT) VALUES ('". $_POST["name"] . "', '". $_POST["url"]."', '".$_POST["comment"]."');";
    }

    if(!$conn->query($sql)) {
    	echo "<br>Bad query.   <br>Schema:<br>";
    	$sql = "DESCRIBE test";
    	$result = $conn->query($sql);
    	while ($row = $result->fetch_assoc()) {
    		echo implode(" ", $row);
    	}
    }

    $conn->close();

?>

<div class='row justify-content-center'>
	<p> You have submitted the following video to the database: </p>
</div>
<div class='row justify-content-center'>
	<iframe width="560" height="315" src="<?php echo $_POST["url"] ?>" frameborder="0" allowfullscreen></iframe>
</div>
<div class="row justify-content-center" style="padding: 30px;"><a href="http://youtubegems.com">
<img src="http://www.youtubegems.com/ytg_logo.png" width="200px" />
</a></div>
</body>
</html>


<?php
	}
?>
