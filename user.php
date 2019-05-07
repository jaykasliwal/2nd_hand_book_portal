<!DOCTYPE html>
<html>
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
        <li ><a href="User_Profile.php">Profile</a></li>  
       <!--<li><a href="User_ChangPwd.php">ChangePwd</a></li>-->
		<li class="active"><a href="user.php">Sell Books</a></li>
		<!--<li><a href="User_Compose.php">Compose</a></li>
        
        -->
          <li><a href="mybook.php">My Books</a></li>
          <li><a href="mybook.php">View Books</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Login_Page.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<style>
    

body {
  background-image:url('Images/dark.jpg');
  background-size: cover; 
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
  

<body>

    

<h2>Second Hand Book Reselling</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="user_code.php" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Sell books</h3>
            <label for="fname"> Book Name</label>
            <input type="text" id="fname" name="b_name" placeholder="Kite Runner">
            <!--<label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">-->
              <label for="fname"> Book Author</label>
            <input type="text" id="fname" name="au_name" placeholder="Jk Rowling">
            <label for="adr">Purchase Date</label>
            <input type="text" id="adr" name="p_date" placeholder="1998/09/16">
              
           

            <div class="row">
              <div class="col-50">
                <label for="state">Price</label>
                <input type="text" id="state" name="price" placeholder=“240/-”>
              </div>
             <div class="col-50">
            
           </div>
          </div>
              <div class="row-200">
              <div class="col-200">
                <label for="expyear">Description</label>
                <input type="text" id="expyear" name="desci" placeholder="About Book">
              </div>
           </div>
              <div class="col-400">
               <label for="city"> Category</label>
           <!-- <input type="text" id="city" name="city" placeholder="fiction example">-->
               <select name="cat" width="100px">
                <option value="fiction" style="width:220;">Fiction</option>
                <option value="mechanics" style="width:220;">Mechanics</option>
                <option value="mathamatics" style="width:220;" selected>Mathamatics                       </option>
                <option value="non-fictional" style="width:220;">Non-Fictioanl</option>
                
              <option value="science" style="width:220;">Science</option>
            
            <option value="networks" style="width:220;">Networks</option>
                </select>
                  <br>
              </div> 

        
            <label for="ccnum">Book Language</label>
            <!--<input type="text" id="ccnum" name="cardnumber" placeholder="English/Hindi">-->
              <select name="lang" >
                <option value="hindi">Hindi</option>
                <option value="English"selected>English</option>
                <option value="german" >German</option>
                <option value="french">French</option>
                </select>
              
            <label for="expmonth">Book Condition</label>
            <!--<input type="text" id="expmonth" name="expmonth" placeholder="good /poor /very bad/new">-->
             <div class="col-400">
              <select name="con" >
                <option value="new">New</option>
                <option value="good">Good</option>
                <option value="bad" selected>Bad</option>
                <option value="very_bad">Very-Bad</option>
                </select>
              </div>
          </div>
          
        </div>
          <br>
          <!--<a href="Upload_File1.php">Upload Bookpic</a>
        -->
    <input type="submit" value="Submit" class="btn">
          <?php
  if(isset($_GET["flag"]))
  {
	$flag=$_GET["flag"];
	if($flag==1)
        echo "<a href='Upload_File1.php'>Upload Bookpic</a>";
        
	//echo "Update Failed! Try Again";
	//else
	 //echo "Update Successfull.."; 
  }
  ?>
    </div>
    </body>
</html>

