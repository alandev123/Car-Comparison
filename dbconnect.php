<?php
$con=@mysql_connect("localhost","root","")or die("unable to connect");
@mysql_select_db("wheelie",$con)or die("not select table")
?>
