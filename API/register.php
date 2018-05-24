<?php
	function register($account,$password,$re_password,$name,$personID,$email){
		require_once("dbtools.inc.php");
		$link = create_connection();
		$sql="SELECT * FROM member Where account='$account'";
		$result = execute_sql($link,"myweb",$sql);
		if($password != $re_password)
		{
			echo "re_password";
		}
		else if(mysqli_num_rows($result)!=0)
		{
			mysqli_free_result($result);
			echo "fail";
		}
		else
		{
			mysqli_free_result($result);
			$sql="INSERT INTO member(account,password,name,personID,email)VALUES('$account','$password','$name','$personID','$email')";
			$result = execute_sql($link,"myweb",$sql);
			echo "success";
		}

		mysqli_close($link);
	}
?>
