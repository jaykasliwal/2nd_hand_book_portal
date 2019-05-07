 
<head>
  <title>Collapsible Navbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
  <script src="jquery/jquery-3.3.1.js"></script>
  <script src="bootstrap3/js/bootstrap.min.js"></script>
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Len Den</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Home</a></li>  
        <li><a href="#">ContactUs</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Registration_Page.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="Login_Page.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<body style="background-image:url('Images/book_shelf.jpg');  background-size: cover; ">

<div class="container" style="background-color:rgba(240, 240, 240,0.2);">
<h1 style="color:white;">Registration Page</h1>
 <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-8">
  <form action="Registration_Code.php" method="post">
    <div class="form-group">
      <label for="login" style="color:white;">Login ID</label>
      <input type="text" class="form-control"  placeholder="Enter Login ID" name="id">
    </div>
    <div class="form-group">
      <label for="pwd" style="color:white;">Password</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="pwd">
    </div>
	<div class="form-group">
      <label for="login" style="color:white;">User Name</label>
      <input type="text" class="form-control"  placeholder="Enter User Name" name="uname">
    </div>
	<div class="form-group">
      <label for="login" style="color:white;">Phone No</label>
      <input type="text" class="form-control"  placeholder="Enter Phone No" name="phone">
    </div>
	<div class="form-group">
      <label for="login" style="color:white;">Email</label>
      <input type="text" class="form-control"  placeholder="Enter Email" name="email">
    </div>
        <input type="submit" class="btn btn-success" name="submit" value="Register">
  </form>
  <?php
  if(isset($_GET["flag"]))
  {
	$flag=$_GET["flag"];
	if($flag==0)
	echo "Registration Failed! Try Again";
	else
	echo "<b>Registration Successfull..</b>";
  }
  ?>
</div>

  
 </div>
 <br><br>
    </div>
</body>


