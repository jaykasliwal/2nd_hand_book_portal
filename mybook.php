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
        <li><a href="User_Profile.php">Profile</a></li>  
       <!--<li><a href="User_ChangPwd.php">ChangePwd</a></li>-->
		<li><a href="user.php">Sell Books</a></li>
		<!--<li><a href="User_Compose.php">Compose</a></li>
        
        -->
          <li class="active"><a href="mybook.php">My Books</a></li>
          <li><a href="view_books.php">View Books</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Login_Page.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>



<?php
    session_start();
    $id=$_SESSION["loginid"];
    $db=mysqli_connect("localhost","root","","test");
		
    $bid=mysqli_query($db,"select b_id from book_details where l_id='$id'");

    $bname=mysqli_query($db,"select b_name from book_details where l_id='$id'");

    $aname=mysqli_query($db,"select au_name from book_details where l_id='$id'");

    $pdate=mysqli_query($db,"select p_date from book_details where l_id='$id'");

    $price=mysqli_query($db,"select price from book_details where l_id='$id'");

    $des=mysqli_query($db,"select desci from book_details where l_id='$id'");

    $cat=mysqli_query($db,"select cat from book_details where l_id='$id'");

    $lan=mysqli_query($db,"select lang from book_details where l_id='$id'");

    $con=mysqli_query($db,"select cond from book_details where l_id='$id'");

    

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
        echo "<img src='Upload_Pic/".$row[$i].".jpg' width='200' height='200' style='float:left;'>";
        echo "<br>";
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

