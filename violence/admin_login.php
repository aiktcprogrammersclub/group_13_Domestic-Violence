<body bgcolor='D2CFCF'>
<center>
<img src='admin.jpg' height=200px width=200px>
<div style="height:100%;
			width:100%">
	
	<div id="login" style="float:center">
					<b style="margin-left:30px;color:#F0F0F0;font-size: 23px">ADMIN LOGIN</b>
			<div id="sign" style="float:center">
				<div>
					<form action="authenticate_admin.php" method="post" style="margin-left:10px;margin-right:10px"><br/>
					<b style="font-size:17px">
					Username:<input type=text id="un" name="uname"><br/><br/>
					Password:<input type=password id="pwd" name="pwd"><br/><br/>
					<input type="Submit" value="Signup" name="loging">
					</b>
					</form>
					
				</div>
			</div>
			</div>
</div>
<a href='index.php'> LogOut</a>
</center>
</body>
<style>

#sign{
	background-color:#F0F0F0;
	width:100%;
	height:170px;
	margin-top:12px;
	border-color:#F0F0F0;
 }
  #login{
	background-color:black;
	margin-top:20px;
	height:35px;
	width:19%;
	margin-left:20px;
	border-top-style:outset;
	border-bottom-style:outset;
    border-width: 3px;
	border-color:black;
	
}


</style>


