<?php
include("dbconnect.php");
$mid=$_POST['mid'];
$sel = mysql_query("select * from carname_tb where mid='$mid'",$con);
$cid=array();
	$carname=array();
	$len=0;
	if($sel){
		while($row=mysql_fetch_array($sel)){
			$len++;
			$cid[$len]=$row['carid'];
			$carname[$len]=$row['carname'];
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
						\"carid\":\"".$cid[$i]."\",
						\"carname\":\"".$carname[$i]."\"
						}" ;
	}
	$json=$json.']}';



	echo $json;
}
?>
