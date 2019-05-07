<?php   
    session_start();
		$bname=$_POST["b_name"];
        $aname=$_POST["au_name"];
		$pdate=$_POST["p_date"];    
		$price=$_POST["price"];
		$desc=$_POST["desci"];
		$con=$_POST["con"];
        $lang=$_POST["lang"];
        $cat=$_POST["cat"];
        $id=$_SESSION["loginid"];
        
        
		
		$db=mysqli_connect("localhost","root","","test");
		
		mysqli_query($db,"insert into book_details values('0','$bname','$aname','$pdate','$price','$desc','$cat','$lang','$con','$id')");
        
		
		$a=mysqli_affected_rows($db);
		mysqli_close($db);
		
		if($a==0)
		header("location: user.php?flag=0");
		else
		header("location: user.php?flag=1");
?>
