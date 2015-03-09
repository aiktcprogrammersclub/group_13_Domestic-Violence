<body>
<?php
echo "<body bgcolor='D2CFCF'>";
$A=$_REQUEST['uname'];
$B=$_REQUEST['rate'];
$C=$_REQUEST['suggest'];
$D=$_REQUEST['queries'];





$conn=mysql_connect('localhost','root','');
@$sql=mysql_select_db("domestic violence",$conn);
$s="insert into feedback
(username,rate,suggestions,queries) 
values('$A','$B','$C','$D')";
@mysql_query($s,$conn);

echo "You have successfully given feedback. Thank You.";
echo "<br/>";
echo "<a href='index.php'>LogOut</a>";
echo "</body>";
?>


</body>