<?php
echo "<body bgcolor='D2CFCF'>";
$A=$_REQUEST['ename'];
$B=$_REQUEST['edate'];




$conn=mysql_connect('localhost','root','');
@$sql=mysql_select_db("domestic violence",$conn);
$s="insert into events
(event_name,event_date) 
values('$A','$B')";
@mysql_query($s,$conn);

echo "You have successfully added an event. Wait for details to come.";
echo "<br/>";
echo "<a href='index.php'>LogOut</a>";
echo "</body>";
?>