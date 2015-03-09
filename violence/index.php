<html>

<title>
Login
</title>

<script src='jquery.min.js'></script>

<script>

$(document).ready(function(){ 

$('#ind').click(function()
{
$('#ind_dis').toggle();
});})
</script>
<script>
$(document).ready(function(){ 

$('#int').click(function()
{
$('#int_dis').toggle();
});})
</script>
<body bgcolor='D2CFCF'>
<img src='logo2.png' align='left' height=100 width=900 style="margin-top:-200px;">


<br/><br/><br/><br/><br/><br/>
<ul class="block-menu" id="nav"style="margin-top:-200px;">
<li id="navi" style="padding-left:20px;"><a href="index.php" class="three-d">
		Home
		<span aria-hidden="true" class="three-d-box">
			<span class="front">Home</span>
			<span class="back">Home</span>
		</span>
	</a></li>
	<li id="b_bar" style="color:grey;margin-top:10px">|</li>
	<li id="navi"><a href="we.html" class="three-d">
		About Us
		<span aria-hidden="true" class="three-d-box">
			<span class="front">About Us</span>
			<span class="back">About Us</span>
		</span>
	</a>
	
	</li>
	<li id="b_bar" style="color:grey;margin-top:10px">|</li>
	<li id="navi"><a href="" class="three-d">
		Violence
		<span aria-hidden="true" class="three-d-box">
			<span class="front"> Violence</span>
			<span class="back"> Violence</span>
		</span>
	</a>
		<ul>
            <li><a href="child.html" title="Sub-Menu Item 1">Against Children</a></li>
            <li><a href="women.html" title="Sub-Menu Item 2">Against Women</a></li>
            <li><a href="help.html" title="Sub-Menu Item 3">Help Yourself</a></li>
			<li><a href="harms.html" title="Sub-Menu Item 3">Harms & Causes</a></li>
        </ul>
	<ul>
            
        </ul>
	</li>
	
	<li id="b_bar" style="color:grey;margin-top:10px">|</li>
	<li id="navi"><a href="art.html" class="three-d">
		Photo Gallery
		<span aria-hidden="true" class="three-d-box">
			<span class="front">Photo Gallery</span>
			<span class="back">Photo Gallery</span>
		</span>
	</a>
	<ul>
            
			
			
        </ul>
	</li>
	<li id="b_bar" style="color:grey;margin-top:10px">|</li>
	<li id="navi"><a href="contactus.html" class="three-d">
		Contact Us
		<span aria-hidden="true" class="three-d-box">
			<span class="front">Contact Us</span>
			<span class="back">Contact Us</span>
		</span>
	</a></li>
	<li class="parent" style="margin-right:50px;float:right"><a href="" class="three-d">
		Login
		<span aria-hidden="true" class="three-d-box">
			<span class="front">Login</span>
			<span class="back">Login</span>
		</span>
	</a>
	<ul>
            <li><a href="user_login.php" title="Sub-Menu Item 1">Login</a></li>
            <li><a href="new_user.php" title="Sub-Menu Item 2">New Account</a></li>
            <li><a href="admin_login.php" title="Sub-Menu Item 3">Admin</a></li>
        </ul>
	</li>
	<!-- more items here -->
</ul>
<br/>
<marquee><h2> <font face="Hobo Std" > If you wish to become a member, please register to us.....</font></h2></marquee>
<center><img src='poem.png' height=400 width=700></center><br/>
<h2>                                           Follow Us On: <a href='https://www.facebook.com/'>Facebook |        </a> <a href='https://twitter.com/login'>Twitter |             </a>
 <a href='https://www.linkedin.com/uas/login'>LinkedIn
</a></h2>
</body>

<style>
/*dropdown list*/

	ul#nav li ul {
		position: absolute;
		left: -9999em;
		z-index:1;
		width:130px;
		margin:0;
		padding:0;
		list-style:none;
	}
	
		ul#nav li:hover ul {
			left: auto;
		}

		ul#nav li ul li {
			position:relative;
			left:-1px;
			background:black;
			border-top: 1px solid #6f9dd4;
			border-color-right: 1px solid #6f9dd4;
			border-bottom: 1px solid #0f386a;
			border-left: 1px solid #6f9dd4;
			
		}

			ul#nav li ul li:hover {
				position:relative;
				left:-1px;
				background-color: #709bd0;
				background-position: 160px 0;
				border-top: 1px solid #accffa;
				border-left: 1px solid #accffa;
			}

			ul#nav li ul li a {
				width:150px;
				height:auto;
				padding: 15px 20px;
				color:#fff;
				line-height: normal;
				text-align:left;
				text-decoration:none;
				font-size:14px;
				font-weight:normal;
			}




/* basic menu styles */
.block-menu {
	display: block;
	background: #000;
}

.block-menu li {
	display: inline-block;
}

.block-menu li a {
	color: #FFCC00;
	display: block;
	text-decoration: none;
	font-family:  Arial, sans-serif;
	font-smoothing: antialiased;
	
	overflow: visible;
	line-height: 20px;
	font-size: 24px;
	padding: 15px 10px;
}

/* animation domination */
.three-d {
	perspective: 200px;
	transition: all .07s linear;
	position: relative;
	cursor: pointer;
}
	/* complete the animation! */
	.three-d:hover .three-d-box, 
	.three-d:focus .three-d-box {
		transform: translateZ(-25px) rotateX(90deg);
	}

.three-d-box {
	transition: all .3s ease-out;
	transform: translatez(-25px);
	transform-style: preserve-3d;
	pointer-events: none;
	position: absolute;
	top: 0;
	left: 0;
	display: block;
	width: 100%;
	height: 100%;
}

/* 
	put the "front" and "back" elements into place with CSS transforms, 
	specifically translation and translatez
*/
.front {
	transform: rotatex(0deg) translatez(25px);
}

.back {
	transform: rotatex(-90deg) translatez(25px);
	color: #FFCC00;
}

.front, .back {
	display: block;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	background: black;
	padding: 15px 10px;
	color: white;
	pointer-events: none;
	box-sizing: border-box;
}


#b_bar{
	font-family: "Times New Roman";
    font-size: 23px;
 }



body {
	margin-top:200px;
	background-image: url('b.jpg');
	background-size: cover;
	}

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

#imgs{
	margin-left:330px;
	margin-top:30px;
	border-style: solid;
    border-color:black;
    border-width: 5px;
	font-family: "Comic Sans MS";
    font-size: 18px;
	color:black ;
}

 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}
</style>
</html>