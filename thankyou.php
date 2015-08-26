<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Monarchs Hack</title>
    <!-- Hosted Styles--> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>

    <!-- Local Styles --> 
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/timeline.css"/>

    <!-- local script -->
		<script src="js/modernizr.custom.js"></script>

  </head>
  <body data-spy="scroll" data-target="#navbar" style="background-color:#222">
    <nav id="navbar" class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
        <li><a href="index.html#home"><i class="glyphicon glyphicon-home"></i></a></li>
        <li><a href="index.html#about">About</a></li>
        <li><a href="index.html#schedule">Schedule</a></li>
        <li><a href="index.html#sponsors">Sponsors</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
    </nav>

    <div id="thankyou" class="container">
      <h1>Thank you <span style="color:#99FF33"><?php echo $_GET['name']; ?></span> for Registering</h1>
      <p>
        You will receive an email confirming your registration!<br/><br/>
        <a href="index.html" class="btn btn-success">Return Home</a>
      </p>
    </div>
    
    <!-- FOOTER -->
    <div id="footer" class="container-fluid">
      <div class="container" style="color: #FFF">
        Old Dominion ACM &copy; 2015
      </div>
    </div><!-- end footer -->
  <!-- HOSTED SCRIPTS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!-- LOCAL SCRIPTS -->
  <script src="js/main.js"></script>
  <script src="js/interactive-svg.js"></script>

  </body>
</html>

