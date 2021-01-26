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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
     
    </ul>
  </div>
</nav>
<div class="card mb-3" style="max-width: 540px;margin-left: 840px;margin-top:20rem">
  <div class="row g-0">
    <div class="col-md-12">
      <img
        src="https://media.istockphoto.com/photos/programming-source-code-abstract-background-picture-id1047259374"
        alt="..."
        class="img-fluid"
      />
    </div>
    <div class="col-md-8">
      <div class="card-body">
      
        <h1 class="card-title" ><?php
$firstname=$_GET["firstname1"];
echo $firstname;
?></h1>
        <h2 class="card-text">
        <?php
            $email=$_GET["email1"];
echo $email;
?>
        </h2>
        
      </div>
    </div>
  </div>
</div>
</body> 
</html>
