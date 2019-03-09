<?php
  include("public.php");
  $bid = $_POST["bid"];
  $conn = getConn("happygo");

  $shouyeSql = "select * from shouye where bid='$bid' ";

	$shouyeResult = mysqli_query($conn,$shouyeSql);
  $arr = mysqli_fetch_array($shouyeResult);
	echo json_encode($arr);



?>


