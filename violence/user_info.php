<?php
$A=$_REQUEST['user_name1'];
$B=$_REQUEST['pwd2'];
$C=$_REQUEST['ufname'];
$D=$_REQUEST['ulname'];
$E=$_REQUEST['dob'];
$F=$_REQUEST['email'];
$


$conn=mysql_connect('localhost','root','');
$sql=mysql_select_db("domestic violence",$conn);
$s="insert into new_user 
(username,password,user_id,fname,lname,dob,email) 
values('$A','$B',207,'$C','$D','$E','$F','$G','$H') ";
mysql_query($s,$conn);
echo 'Login Successful!!!!!';


?>