<html>
<head>
<title> New Registration
</title>

	<script>
function validator()
{
var x=document.forms["user_reg"]["ufname"].value;
if (x==null || x=="")
{
  alert("Please enter the first name");
  return false;
}
if (x.length > 6)
{
  alert("Maximum length must not exceed 6 characters!!!!!!");
  return false;
}  
  
var x=document.forms["f1"]["email"].value;
var at=x.indexOf("@");
var dot = x.lastIndexOf(".");
if(x.length>=50)
{
  alert("Please enter valid e-mail ID");
  //email.focus();
  return false;
}
if (at<1 || dot<=at+2 || dot+2>=x.length)
  {
  alert("Not a valid e-mail address!!! Try again");
  return false;
  }

var x=document.forms["f1"]["phone"].value;
if (x.length > 11)
{
  alert("Maximum length must not exceed 11");
  return false;
}  

var numericExpression = /^[0-9]+$/;
if(!x.match(numericExpression))
{
	alert("Only numbers are allowed");
	return false;
}
}
</script>
</head>
<BODY bgcolor='pink'>
<div id="login" style="float:center">
<div id="div1" style="border:2px;background-color:pink" 
  height="120px";width="90px"float="center" onload="load()">

<FORM name="user_reg" method="post" action="userinfo.php" onsubmit="return validator()">
<h2><font color="blue" face="georgia"><center>
New User Registration<center></font></h2>
<hr color="orange">
<table>
<tr>
<td>Enter Username:</td>
<td><input type="text" name="user_name1" 
placeholder="Username"></td>
</tr>
<tr>
<td>Enter Password:</td>
<td><input type="password" name="pwd2"
placeholder="Password"></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="password" name="pwd2"
placeholder="Password"></td>
</tr>
<tr>
<td>Enter First Name:</td>
<td><input type="text" name="ufname"  
placeholder="First Name"></td>
</tr>
<tr>
<td>Enter Last Name:</td>
<td><input type="text" name="ulname" placeholder="Last Name"></td>
</tr>
<tr>
<td>Gender:
<td><input type="radio" name="gen" value="Male">Male<br>
<input type="radio" name="gen" value="Female">Female</td>
</tr>
<tr>
<td>Enter your date of birth:</td>
<td><input type="date" name="dob" placeholder="Date of Birth"></td>
</tr>
<tr>
<td>Enter a valid EMail:</td>
<td><input type="email" name="email" placeholder="Email-Id"></td>
</tr>
<tr>
<td>Enter  your contact number:</td>
<td><input type="number"  name="num" placeholder="Contact number"></td>
</tr>

</table>
<input type="Submit" value="SUBMIT">
<input type="reset" value="RESET">

</FORM>

</div>
</div>
</body>
</html>