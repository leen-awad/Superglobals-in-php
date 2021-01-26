<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
 
  
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><h2>Home</h2> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/lesson1/calculator.php"><h2>calculator</h2></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/lesson1/to-do.php"><h2>to-do</h2></a>
      </li>
     
    </ul>
  </div>
</nav>
    <?php if (isset($_GET['form_submitted'])): ?> 

        <h2>Thank You <?php echo $_GET['firstname']; ?> </h2>

        <p>You have been registered as
            <?php echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?>
        </p>

        <p>Go <a href="/registration_form.php">back</a> to the form</p>

        <?php else: ?>

            <h2 style="text-algin:center">Registration Form</h2>

            <form action="registration_form.php" method="get" style="hight:5rem;width:50%;margin-left:50rem;margin-top:20rem">
  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="form5Example1" class="form-control"  name="firstname1" />
    <label class="form-label" for="form5Example1" >Name</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form5Example2" class="form-control" name="email1"/>
    <label class="form-label" for="form5Example2">Email address</label>
  </div>
  <?php
// check responsetime for a webbserver
function pingDomain($domain){
    $starttime = microtime(true);
    // supress error messages with @
    $file      = @fsockopen($domain, 80, $errno, $errstr, 10);
    $stoptime  = microtime(true);
    $status    = 0;

    if (!$file){
        $status = -1;  // Site is down
    }
    else{
        fclose($file);
        $status = ($stoptime - $starttime) * 1000;
        $status = floor($status);
    }
    return $status;
}
?>


  <button type="submit" class="btn btn-primary btn-block mb-4">Subscribe</button>
</form>

      <?php endif; ?> 
</body> 
</html>