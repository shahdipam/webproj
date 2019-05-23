<!DOCTYPE html>
<html>
<head>
	<title>Sign up for Spreddit</title>
</head>
<body style="background-image: url('img/cat.jpeg'); background-position: center; overflow: hidden; background-size: 280px">

	<header style="width:100vw; margin-top: -8px; height: 60px; margin-left: -8px; position: fixed; background-color: #454545; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 2px;">
	

<div class="topnav" align="right" style="display: inline-flex;">
<h1 style="color: white; margin-left: 20px; margin-top: 16px;" onclick="location.href='index.html'">SPreddit</h1>
<input style=" margin-left: 60px; height: 23px; margin-top: 18px; border-radius: 10px; border-top-right-radius: 0px;border-bottom-right-radius: 0px; border-color: black; border-right-color: initial; border-right: 0px;" type="text" name="search" placeholder="Search here" size="40px" >
<button style="margin-right: 7px; height: 29px; margin-top: 18px; border-top-right-radius: 10px; border-left: 0px; border-bottom-right-radius: 10px; border-color: black; border-left-color: initial;">Search</button>	
<button style="margin-right: 10px;  height: 29px; margin-top: 18px; border-radius: 10px; border-color: black;" >Trending</button>
<button style=" height: 29px; margin-top: 18px; border-radius: 10px; border-color: black;">Popular</button>
<button style="margin-left: 290px; height: 29px; width: 70px; margin-top: 18px; border-radius: 10px; border-color: black;" onclick="location.href='signup.html'">Log in</button>
<button style="height: 29px; width: 70px; margin-top: 18px; border-radius: 10px; border-color: black;" onclick="location.href='signup.html'" disabled>Sign up</button>
<select title="select" style="height: 29px; width: 100px; margin-top: 18px; border-radius: 10px; border-color: black; border-width: 2px;">
	<option value="help">Help Center</option>
	<option value="night">Night Mode</option>
	<option value="login">Login/SignUp</option>
</select>

</div>
</header>


<form style="text-align: center; margin-left: 40px; background-color:  #CCCCCC; padding-top: 180px; height: 3453px; width: 330px; border-radius: 0px; margin-top: -8px;" id="signupform">
	<p style=" padding-top: 15px;">Sign up</p>
	<div style="margin-top: 8px; ">
		<input style=" color:white; border-radius: 13px; height: 25px; width: 250px; background-color: #454545; border-color: coral;" type="text" name="name" placeholder="  First Name" id="firstName" required>
	</div>
	<div style="margin-top: 8px;">
		<input style=" color:white; border-radius: 13px; height: 25px; width: 250px; background-color: #454545; border-color: coral;" type="text" name="name" placeholder="  Last Name" id="lastName" required>
	</div>

	<div style="margin-top: 8px;">
		<input type="date" name="bday" style="border-radius: 13px; color: white; height: 25px; background-color: #454545; width: 250px; border-color: coral;" id="bdate" required>
		
	</div>

	<div style="margin-top: 8px;">
		<input style="border-radius: 13px; color: white; height: 25px; background-color: #454545; width: 250px; border-color: coral;" type="email" name="name" placeholder="  Email Id" id="email" required>
	</div>

	<div style="margin-top: 8px;">
		<input style=" background-color: #454545; color:white; border-radius: 13px; height: 25px; width: 250px; border-color: coral;" type="password" name="name" placeholder="  Enter password" id="pass" required>
	</div>

	<div style="margin-top: 8px;">
		<input style="border-radius: 13px; color:white; background-color: #454545; height: 25px; width: 250px; border-color: coral;" type="password" name="name" placeholder="  Re-enter password" id="repass" required>
	</div>
	<div align="left" style="margin-left: 40px">
		<select style="border-radius: 3px; color:white; background-color: #454545; height: 25px; width: 70px; border-color: coral; margin-top: 5px;" form="signupform" required>
			<option disabled>Gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select>
		
	</div>
	<div align="left" style="margin-left: -30px; display: inline-flex;"  >
		<button style="margin-top: 8px; height: 30px; border-radius: 13px; border-color: coral; width: 80px;">Sign-up</button>
		<p style="font-size: 12px; margin-left: 5px; margin-top: 20px;">Already a user?</p>
		<a href="login.html" style="color: blue; font-size: 12px; margin-top: 20px;">Sign in</a>
	</div>
</form>
</body>
</html>


