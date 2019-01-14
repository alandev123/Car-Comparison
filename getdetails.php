<?php
include("dbconnect.php");
$cid=$_POST['cid'];

$sel = mysql_query("select * from car_tb where cid='$cid'",$con);

$mid=array();
$varient=array();
	$len=0;
	if($sel){
		while($row=mysql_fetch_array($sel)){
			$len++;
			$cid[$len]=$row['cid'];
			$varient[$len]=$row['variet'];
			$image[$len]=$row['image'];
			$type[$len]=$row['type'];
			$fuel[$len]=$row['fuel'];
			$cc[$len]=$row['cc'];
			$transm[$len]=$row['transm'];
			$gear[$len]=$row['gear'];
			$power[$len]=$row['power'];
			$torque[$len]=$row['torque'];
			$cylinder[$len]=$row['cylider'];
			$milage[$len]=$row['milage'];
			$ground[$len]=$row['ground'];
			$fcap[$len]=$row['fcap'];
			$wheelbase[$len]=$row['wheelbase'];
			$kweight[$len]=$row['kweight'];
			$boot[$len]=$row['boot'];
			$length[$len]=$row['length'];
			$height[$len]=$row['height'];
			$width[$len]=$row['width'];
			$tyres[$len]=$row['tyres'];
			$seat[$len]=$row['seat'];
			$pw[$len]=$row['pw'];
			$abs[$len]=$row['abs'];
			$cl[$len]=$row['cl'];
			$awd[$len]=$row['awd'];
			$alloy[$len]=$row['alloy'];
			$tube[$len]=$row['tube'];
			$tsn[$len]=$row['tsn'];
			$sun[$len]=$row['sun'];
			$rc[$len]=$row['rc'];
			$rs[$len]=$row['fl'];
			$fl[$len]=$row['fl'];
			$dtrl[$len]=$row['dtrl'];
			$cruise[$len]=$row['cruise'];
			$orvm[$len]=$row['orvm'];
			$cost[$len]=$row['cost'];
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
						\"varient\":\"".$varient[$i]."\",
						\"image\":\"".$image[$i]."\",
						\"type\":\"".$type[$i]."\",
						\"fuel\":\"".$fuel[$i]."\",
						\"cc\":\"".$cc[$i]."\",
						\"transm\":\"".$transm[$i]."\",
						\"gear\":\"".$gear[$i]."\",
						\"power\":\"".$power[$i]."\",
						\"torque\":\"".$torque[$i]."\",
						\"cylinder\":\"".$cylinder[$i]."\",
						\"fcap\":\"".$fcap[$i]."\",
						\"milage\":\"".$milage[$i]."\",
						\"ground\":\"".$ground[$i]."\",
						\"wheelbase\":\"".$wheelbase[$i]."\",
						\"kweight\":\"".$kweight[$i]."\",
						\"boot\":\"".$boot[$i]."\",
						\"length\":\"".$length[$i]."\",
						\"height\":\"".$height[$i]."\",
						\"width\":\"".$width[$i]."\",
						\"tyres\":\"".$tyres[$i]."\",
						\"seat\":\"".$seat[$i]."\",
						\"pw\":\"".$pw[$i]."\",
						\"abs\":\"".$abs[$i]."\",
						\"cl\":\"".$cl[$i]."\",
						\"awd\":\"".$awd[$i]."\",
						\"alloy\":\"".$alloy[$i]."\",
						\"tube\":\"".$tube[$i]."\",
						\"tsn\":\"".$tsn[$i]."\",
						\"sun\":\"".$sun[$i]."\",
						\"rc\":\"".$rc[$i]."\",
						\"rs\":\"".$rs[$i]."\",
						\"fl\":\"".$fl[$i]."\",
						\"dtrl\":\"".$dtrl[$i]."\",
						\"cruise\":\"".$cruise[$i]."\",
						\"orvm\":\"".$orvm[$i]."\",
						\"cost\":\"".$cost[$i]."\"
						}" ;
	}
	$json=$json.']}';



	echo $json;
}
?>
