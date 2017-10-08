<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Submit a Gem</title>
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
  input {
  margin-bottom: 20px;
  }

  .submit-form {
    padding: 30px;
  }

  body {
    background-color: #000000;
    overflow: hidden;
    color:#f1f1f1;
  }
</style>
</head>
<body>
<div class='submit-form row justify-content-center'>
  <form action="submitted.php" method="post">
    <div class="form-group">
      <label>Secret Password*</label>
      <input type="password" class="form-control" name="password">
      <label>Video Name*</label>
      <input type="text" name="name" class="form-control">
      <label>Embed URL (src of iframe)*</label>
      <input type="text" name="url" class="form-control">
      <label>Comment*</label>
      <input type="text" name="comment" class="form-control">
      <button class='btn' type="submit" value="Submit">Submit</button>
    </div>
  </form>
</div>
<div class="row justify-content-center" style="padding: 30px;"><a href="http://youtubegems.com">
<img src="http://www.youtubegems.com/ytg_logo.png" width="200px" />
</a></div>
</body>
</html>
