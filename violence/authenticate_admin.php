<?php
echo "<body bgcolor='D2CFCF'>";
@$uname=$_REQUEST['uname'];
@$pwd=$_REQUEST['pwd'];

if($uname=='admin'&&$pwd=='admin123')
{

echo "<a href='admin_event.html'>Add an event</a> <br/>";

}	

else
{
if($uname==''||$pwd=='')
{
echo'			<center>
			<b style="background-color:pink;font-family:Times New Roman;font-size:23px;margin-top:200px">
			<a href="'.'admin_login.php'.'">'."CLICK HERE to RE-LOGIN".'</a>
			<br/>';
		die("INCORRECT ID or PASSWORD");
		echo '	</b>
			</center>
		
		</div>';
}
else
{
echo'			<center>
			<b style="background-color:#fff;float:center;font-family:Times New Roman;font-size:23px;margin-top:200px">
			<a href="'.'admin_login.php'.'">'."CLICK HERE to RE-LOGIN again".'</a>
			<br/>';
		die("Wrong Admin Details entered......");
		echo '	</b>
			</center>
		
		</div>';
}
}	
 
echo "</body>";
?>
