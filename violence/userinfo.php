<?php
$A=$_REQUEST['user_name1'];
$B=$_REQUEST['pwd2'];
$C=$_REQUEST['ufname'];
$D=$_REQUEST['ulname'];
$E=$_REQUEST['dob'];
$F=$_REQUEST['email'];



$conn=mysql_connect('localhost','root','');
@$sql=mysql_select_db("domestic violence",$conn);
$s="insert into new_user 
(username,password,fname,lname,dob,email) 
values('$A','$B','$C','$D','$E','$F') ";
@mysql_query($s,$conn);

echo "You have successfully logged in. Now you can add feedback or suggestions.";


?>