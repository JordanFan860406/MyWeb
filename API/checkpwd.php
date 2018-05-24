<?php
	function memberCheck($account,$password){
		$account2 = $account;
		function safeInput($data)
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}
		$lifetime = 600;
		session_set_cookie_params($lifetime);
		session_start();
		require_once("dbtools.inc.php");
		header("Content-type:text/html;charset=utf-8");
		$account=$_POST['account'];
		$password=$_POST['password'];
		$account=safeInput($account);
		$password=safeInput($password);
		$link=create_connection();
		$sql="SELECT name FROM member Where account='$account' AND MD5(password)='$password'";
		$result=execute_sql($link,"myweb",$sql);
		if(mysqli_num_rows($result)==0)
		{
			mysqli_free_result($result);
			mysqli_close($link);
			echo "fail";
		}
		else
		{
			$data = mysqli_fetch_array($result);
			$name=$data[0];
			$id=mysqli_fetch_object($result)->id;
			mysqli_free_result($result);
			mysqli_close($link);
			echo "success";
			session_regenerate_id();
			$_SESSION['account'] = $account;
		}
	}

	function logout(){
		session_start();
		session_destroy();
		echo 'logout';
	}
?>
