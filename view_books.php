<head>
  <title>Collapsible Navbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
  <script src="jquery/jquery-3.3.1.js"></script>
  <script src="bootstrap3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    function buttonclick()
        {
            window.location="payment.php";
        }</script>
    
    
    <style>


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

/*.active {
  background-color: #4CAF50;

  font-family: Arial;
  margin: 0;
}*/

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
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
        <li><a href="User_Profile.php">Profile</a></li>  
       <!--<li><a href="User_ChangPwd.php">ChangePwd</a></li>-->
		<li><a href="user.php">Sell Books</a></li>
		<!--<li><a href="User_Compose.php">Compose</a></li>
        
        -->
          <li><a href="mybook.php">My Books</a></li>
          <li class="active"><a href="view_books.php">View Books</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Login_Page.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
         <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="main_bg1.jpg" style="width:100%">
  </div>


  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="archi.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="novell.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="robotics.jpg" style="width:100%" height="550">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="maths.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="quantum.jpg" style="width:100%" >
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="main_bg1.jpg" style="width:100%" onclick="currentSlide(1)" alt="View Books">
    </div>
    <div class="column">
      <img class="demo cursor" src="archi.jpg" style="width:100%" onclick="currentSlide(2)" alt="Architecture and Design">
    </div>
    <div class="column">
      <img class="demo cursor" src="novell.jpg" style="width:100%" onclick="currentSlide(3)" alt="Novel">
    </div>
    <div class="column">
      <img class="demo cursor" src="robotics.jpg" style="width:100%" onclick="currentSlide(4)" alt="Machine Learning">
    </div>
    <div class="column">
      <img class="demo cursor" src="maths.jpg" style="width:100%" onclick="currentSlide(5)" alt="Mathematics">
    </div>    
    <div class="column">
      <img class="demo cursor" src="quantum.jpg" style="width:100%" onclick="currentSlide(6)" alt="Quantum Mechanics">
    </div>
  </div>
         
         
</nav>
    
    
    
    
    
</head>



<body>
   

<!--<div class="container">-->
  


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>








<?php
    session_start();
    $id=$_SESSION["loginid"];
    $db=mysqli_connect("localhost","root","","test");
		
    $bid=mysqli_query($db,"select b_id from book_details where NOT l_id='$id' ");

    $bname=mysqli_query($db,"select b_name from book_details  where NOT l_id='$id'");

    $aname=mysqli_query($db,"select au_name from book_details where NOT l_id='$id'");

    $pdate=mysqli_query($db,"select p_date from book_details where NOT l_id='$id'");

    $price=mysqli_query($db,"select price from book_details where NOT l_id='$id'");

    $des=mysqli_query($db,"select desci from book_details where NOT l_id='$id'");

    $cat=mysqli_query($db,"select cat from book_details where NOT l_id='$id' ");

    $lan=mysqli_query($db,"select lang from book_details where NOT l_id='$id'");

    $con=mysqli_query($db,"select cond from book_details where NOT l_id='$id' ");

    

    $row1=mysqli_fetch_array($bname);

    $row2=mysqli_fetch_array($aname);

    $row3=mysqli_fetch_array($pdate);

    $row4=mysqli_fetch_array($price);

    $row5=mysqli_fetch_array($des);
    
    $row6=mysqli_fetch_array($cat);

    $row7=mysqli_fetch_array($lan);

    $row8=mysqli_fetch_array($con);

    $i=0;
    
    while($row=mysqli_fetch_array($bid))
    {   
        
        //echo "<img src='Upload_Pic\.$row[$i]'>";
        echo "<img src='Upload_Pic/".$row[$i].".jpg' width='220' height='220' style='float:left;' >";
        
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<b>Book Id :- </b>".$row[$i];
        echo "<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<b>Book Name :- </b>".$row1[$i];
        echo "<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<b>Book's Author :- </b>".$row2[$i];
        echo "<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<b>Book Purchase Date :- </b>".$row3[$i];
        echo "<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<b>Book price :- </b>".$row4[$i];
        echo "<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<b>Description :- </b>".$row5[$i];
        echo "<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<b>Book Catagory :- </b>".$row6[$i];
        echo "<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<b>Book Language :- </b>".$row7[$i];
        echo "<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<b>Book Condition :- </b>".$row8[$i];
        echo "<br>";
        
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<button type='button' class='btn btn-success'  onclick='buttonclick()'>Buy Now</button>";
        
        echo "<br>";
        
        echo "<hr>";
        $i=$i++;
        $row1=mysqli_fetch_array($bname);

    $row2=mysqli_fetch_array($aname);

    $row3=mysqli_fetch_array($pdate);

    $row4=mysqli_fetch_array($price);

    $row5=mysqli_fetch_array($des);
    
    $row6=mysqli_fetch_array($cat);

    $row7=mysqli_fetch_array($lan);

    $row8=mysqli_fetch_array($con);
        
    }
    mysqli_close($db);
?>

