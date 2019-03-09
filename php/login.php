<?php
	include("public.php");
    $conn = getConn("happygo");
    $uname = $_GET["uname"];
    $pwd = $_GET["pwd"];

//  echo "$uname";
//  echo "$pwd";
  $loginSql = "select * from users";

	$loginResult = mysqli_query($conn,$loginSql);
	$flag = true;
	while($loginArr = mysqli_fetch_array($loginResult)){
		if($uname == $loginArr["uname"]){
			$flag = false;
			if($pwd == $loginArr["pwd"]){
				// 登录成功
				echo $uname;
			}else{
				// 密码错误
				echo 4;
			}
				break;
		}
	}

	if($flag){
		// 用户名不存在
		echo 5;
	}
?>
