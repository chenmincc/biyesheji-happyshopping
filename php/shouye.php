<?php
	include("public.php");
  $conn = getConn("happygo");

  $shouyeSql = "select * from shouye";

	$shouyeResult = mysqli_query($conn,$shouyeSql);
	while($row = mysqli_fetch_array($shouyeResult)){
		$arr[]=$row;
	}
	$json=json_encode($arr);
	print_r($json);


?>
