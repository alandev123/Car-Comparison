<?php
include("dbconnect.php");
$carid=$_POST['carid'];
$sql="select * from car_tb where carid=$carid";
$sel = mysql_query($sql,$con);
$cid=array();
	$varient=array();
	$len=0;
	if($sel){
		while($row=mysql_fetch_array($sel)){
			$len++;
			$cid[$len]=$row['cid'];
			$varient[$len]=$row['variet'];
			
		}
	}
if($len==0){
	echo "false";
}
else {
	$json="{ \"size\":\"".$len."\",\"ad\" : [";
	for($i=1;$i<=$len;$i++){

		if($i>=2)
			$json=$json.",";
		$json=$json."{
						\"cid\":\"".$cid[$i]."\",
						\"varient\":\"".$varient[$i]."\"
						}" ;
	}
	$json=$json.']}';



	echo $json;
}
?>
