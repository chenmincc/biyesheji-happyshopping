<?php
   include("public.php");
   $conn = getConn("happygo");
   $uname = $_GET["uname"];
   $registerSql = "select * from users";
   $registerResult = mysqli_query($conn,$registerSql);

   $flag = true;
   while($registerArr = mysqli_fetch_array($registerResult)){
   	if($uname == $registerArr["uname"]){
   		$flag = false;
   		break;
   	}
   }
   if($flag){
   	echo 2;//注册成功
   }else{
   	echo 1;
   }

?>
