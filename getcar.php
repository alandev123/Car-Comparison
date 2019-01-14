<?php
include("dbconnect.php");
$sel = mysql_query("select * from mreg_tb where status='approved'",$con);
$mid=array();
	$cname=array();
	$len=0;
	if($sel){
		while($row=mysql_fetch_array($sel)){
			$len++;
			$mid[$len]=$row['mid'];
			$cname[$len]=$row['cname'];
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
						\"mid\":\"".$mid[$i]."\",
						\"cname\":\"".$cname[$i]."\"
						}" ;
	}
	$json=$json.']}';



	echo $json;
}
?>
