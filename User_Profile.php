 <?php
 session_start();
		
		$uname="";
		$phone="";
		$email="";
		$id=$_SESSION["loginid"];
		$db=mysqli_connect("localhost","root","","test");
		
		$result=mysqli_query($db,"select * from user_detail where loginid='$id'");
		while($row=mysqli_fetch_array($result))
		{
			$uname=$row[1];
			$phone=$row[2];
			$email=$row[3];
		}
		mysqli_close($db);
 ?>
<head>
  <title>Collapsible Navbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
  <script src="jquery/jquery-3.3.1.js"></script>
  <script src="bootstrap3/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url('Images/dark.jpg');  background-size: cover; ">

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
        <li class="active"><a href="User_Profile.php">Profile</a></li>  
       <!--<li><a href="User_ChangPwd.php">ChangePwd</a></li>-->
		<li><a href="user.php">Sell Books</a></li>
		<!--<li><a href="User_Compose.php">Compose</a></li>
        
        -->
          <li><a href="mybook.php">My Books</a></li>
          <li><a href="view_books.php">View Books</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Login_Page.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<hr>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<img src=Upload_Pic/<?php echo $id;?>.jpg  style="width:100; height:100; align:center;" onerror="this.src='Upload_Pic/user.jpg';"/>

<br>
    <span style="text-align:center; color:green;font-size:32px;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Welcome <?php echo $uname;?></span>

<div class="container">
<h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Profile Page</h2>
    <hr>
<div class="container-fluid" style="background-color:rgba(255, 255, 255,0.4); max-width : 500px;">
 <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-8">
  <form action="User_Profile_Code.php" method="post"> 
     <div class="form-group">
         <br>
      <label for="login">User Name</label>
      <input type="text" class="form-control" value="<?php echo $uname;?>"  name="uname" style="max-width:400px;">
    </div>
	<div class="form-group">
      <label for="login">Phone No</label>
        
      <input type="text" class="form-control" value="<?php echo $phone;?>"  name="phone">
    </div>
	<div class="form-group">
      <label for="login">Email</label>
      <input type="text" class="form-control" value="<?php echo $email;?>"  name="email">
    </div>
      <a href="Upload_File.php">Upload Profile pic</a><br>
      <a href="User_ChangPwd.php">Change Password</a><br>
         <br>
        <input type="submit" class="btn btn-success" name="submit" value="Edit Profile">
      
  </form>
  <?php
  if(isset($_GET["flag"]))
  {
	$flag=$_GET["flag"];
	if($flag==0)
	echo "Profile Updatation Failed! Try Again";
	else
	echo "Profile Updated Successfully..";
  }
  ?>
</div>
    </div>

  
 </div>
 <br><br> 
</div>
