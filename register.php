<?php 
// db credentials
include_once 'config.php';

// db connection
$pdo = new PDO($config['db']['connString'], $config['db']['username'], $config['db']['password']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['fname'], $_POST['lname'], $_POST['age'], $_POST['email'], $_POST['diet_res'], $_POST['shirt_size'])) {
  //make user resume name string 
  $resume_dir = "resumes"; 
  $resume_filename = $_POST['fname'].'_'.$_POST['lname'].'_'.$_POST['age'].'.'.end(explode('.',$_FILES['resume']['name']));
    
  $stmt = $pdo->prepare ("INSERT INTO users (fname, lname, age, email, resume_path, diet_res, shirt_size) VALUES (:fname, :lname, :age, :email, :resume_path, :diet_res, :shirt_size)");
  $stmt->bindParam(':fname', $_POST['fname']);
  $stmt->bindParam(':lname', $_POST['lname']);
  $stmt->bindParam(':age', $_POST['age']);
  $stmt->bindParam(':email', $_POST['email']);
  $stmt->bindValue(':resume_path', $resume_filename);
  $stmt->bindParam(':diet_res', $_POST['diet_res']);
  $stmt->bindParam(':shirt_size', $_POST['shirt_size']);

  $stmt->execute();

  move_uploaded_file($_FILES['resume']['tmp_name'], "$resume_dir/$resume_filename");
 /* 
  $headers = 'From: '.$_POST['email'] . "\r\n" .
      'Reply-To: '.$_POST['email'] . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

  $confirm_msg = 'Thank you for regisitering for Old Domimion ACM\'s Monarchs hack the campus.<a href="">Click here</a> to confirm it is really you.';

  mail($_POST['email'], 'Monarchs Hack Registration', $confirm_msg, $headers);
  header('Location: thankyou.php?name='.urlencode($_POST['fname'].' '.$_POST['lname']));
  */
  header('Location: index.html');

}

?>
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
  <body data-spy="scroll" data-target="#navbar">
  <div id="register_page_wrapper">
    
    <nav id="navbar" class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
        <li><a href="index.html#home"><i class="glyphicon glyphicon-home"></i></a></li>
        <li><a href="index.html#about">About</a></li>
        <li><a href="index.html#schedule">Schedule</a></li>
        <li><a href="index.html#sponsors">Sponsors</a></li>
        <li><a href="index.html#contact">Contact</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
    </nav>

    <!-- REGISTRATION FORM -->
    <div id="register-container" class="container-fluid"> 
      <div id="register" class="container">
      <h1>Register</h1>

      <form method="POST" enctype="multipart/form-data">
        
        <!-- first name input --> 
        <div class="form-group"> 
          <label>First Name</label>
          <input class="form-control" type="text" name="fname"/>
        </div><!-- end first name input --> 

        <!-- last name input -->
        <div class="form-group"> 
          <label>Last Name</label>
          <input class="form-control" type="text" name="lname"/>
        </div><!-- end last name input -->
        
        <!-- email input -->
        <div class="form-group"> 
          <label>Email</label>
          <input class="form-control" type="email" name="email"/>
        </div><!-- end email input -->
        
        <!-- age input -->
        <div class="form-group"> 
          <label for="age">Age ( 18 and Over ) <label>
          <input id="age" class="form-control" type="number" name="age"/>
        </div><!-- end age input -->
        
        <!-- resume upload -->
        <div class="form-group"> 
          <label>Optional - Resume(PDF preferred)</label>
          <input class="form-control" type="file" name="resume"/>
        </div><!-- end resume upload -->

        <!-- diet_res dropdown -->
        <div class="form-group"> 
          <label>Dietary Restrictions</label>
          <select class="form-control" name="diet_res">
            <option value="none">None</option>
            <option value="vegan">Vegan</option>
            <option value="vegitarian">Vegetarian</option>
            <option value="no-gluten">Gluten Free</option>
          </select>
        </div><!-- end diet_res dropdown -->

        <!-- shirt_size dropdown -->
        <div class="form-group"> 
          <label>T-Shirt Size</label>
          <select class="form-control" name="shirt_size">
            <option value="s">Small</option>
            <option value="m">Medium</option>
            <option value="l">Large</option>
            <option value="xl">X-Large</option>
            <option value="xxl">XX-Large</option>
          </select>
        </div><!-- end shirt_size drop down -->

        <!-- register button -->
        <div class="form-group"> 
          <button class="btn btn-primary" type="submit">Register</button>
        </div><!-- end register button -->
      </form><!-- end FORM -->
      </div><!-- end register -->
    </div><!-- end register-container -->

    <!-- FOOTER -->
    <div id="footer" class="container-fluid">
      <div class="container" style="color: #FFF">
        Old Dominion ACM &copy; 2015
      </div>
    </div><!-- end footer -->
  </div><!-- end register_page_wrapper -->

  <!-- HOSTED SCRIPTS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!-- LOCAL SCRIPTS -->
  <script src="js/main.js"></script>
  <script src="js/interactive-svg.js"></script>

  </body>
</html>
