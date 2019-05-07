<?php    
		$id=$_POST["id"];    
		$pwd=$_POST["pwd"];    
		$uname=$_POST["uname"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		
		$db=mysqli_connect("localhost","root","","test");
		
		mysqli_query($db,"insert into login values('$id','$pwd','user','active')");
		mysqli_query($db,"insert into user_detail values('$id','$uname','$phone','$email')");
		$a=mysqli_affected_rows($db);
		mysqli_close($db);
		
		if($a==0)
		header("location: Registration_Page.php?flag=0");
		else
		header("location: Registration_Page.php?flag=1");
?>


