<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="exstyle.css">
	<meta charset="utf-8">
	<title style="color: white;">SPreddit</title>
</head>
<body style="background-image: url('img/cat.jpeg'); background-repeat: repeat; background-size: 280px" >

<header>	
<div class="topnav" align="right" style="display: inline-flex;">
<h1 style="color: white; margin-left: 20px; margin-top: 16px;" onclick="location.href='index.html'"><marquee>SPreddit
</marquee></h1>
<input style=" margin-left: 60px; height: 23px; margin-top: 18px; border-radius: 10px; border-top-right-radius: 0px;border-bottom-right-radius: 0px; border-color: black; border-right-color: initial; border-right: 0px;" type="text" name="search" placeholder="Search here" size="40px" >
<button style="margin-right: 7px; height: 29px; margin-top: 18px; border-top-right-radius: 10px; border-left: 0px; border-bottom-right-radius: 10px; border-color: black; border-left-color: initial;">Search</button>	
<button style="margin-right: 10px;  height: 29px; margin-top: 18px; border-radius: 10px; border-color: black;" >Trending</button>
<button style=" height: 29px; margin-top: 18px; border-radius: 10px; border-color: black;">Popular</button>
<button style="margin-left: 290px; height: 29px; width: 70px; margin-top: 18px; border-radius: 10px; border-color: black;" onclick="location.href='trans.html'">Log in</button>
<button style="height: 29px; width: 70px; margin-top: 18px; border-radius: 10px; border-color: black;" onclick="location.href='trans.html'">Sign up</button>
<select title="select" style="height: 29px; width: 100px; margin-top: 18px; border-radius: 10px; border-color: black; border-width: 2px;">
	<option value="help">Help Center</option>
	<option value="night">Night Mode</option>
	<option value="login">Login/SignUp</option>
</select>

</div>
</header>



<div class="flex-container" style="margin-top: 70px; margin-left: -80px; display: inline-flex;">
	<div style="border-style: solid; border-width: 2px;	 border-radius: 7px; margin-left: 150px; width: 800px; background: #454545; height: 2000px">
		Main Box
		
	</div>
	<div style="color: black; padding: 20px; margin-left: 50px; width: 300px; height: 1500px; background: #454545;">

	<div style="height: 240px; background: #454545; margin-top: 40px">
		<p style="font-size: 30px;padding-top: 10px; padding-left: 10px">Home</p>
		<p> Your personal Reddit frontpage. Come here to check in with your favorite communities.</p><br>
		<button style=" min-height: 50px; margin-top: 45px" onclick="location.href='create_post.html'" onclick="location.href='create_post.html'"> Create post</button>
	</div>

	<div style=" background: #454545; margin-top: 40px; height: 300px ">
		<p>List of SPreddit users</p>	
<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>
	</div>
	<div style=" margin-top: 40px; background: #454545; height: 300px; font-size: 30px"> Trending communities
		<ul style="font-size: 20px;list-style-type: none">
			<li>SPITOfficial <button style="float: right">Subscribe</button></li>
			<li>Oculus<button style="float: right">Subscribe</button></li>
			<li>E-cell<button style="float: right">Subscribe</button></li>
			<li>CSI<button style="float: right">Subscribe</button></li>
			<li>SPark<button style="float: right">Subscribe</button></li>
			<li>Skinzy<button style="float: right">Subscribe</button></li>
		</ul>
	</div>
		<div style=" background: #454545;margin-top: 40px; height: 300px ">Advertisment</div>

<button  onclick="topFunction()" id="myBtn" title="Go to top" style="display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  left: 80vw; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: white; /* Set a background color */
  color: #454545; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 20px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px;
  width: 150px;  /* Increase font size */"><b>Back to top</button>
</div>
</div>


</body>

<footer id="foot" style="position: fixed; left: 0px; bottom:0px;height:60px;width:100%;background:#999; background-color: white;
  color: black;
  text-align: center; display: inline-flex;" >Cookie Policy This website uses cookies. Press accept to accept our cookie policy <button onclick="hideFooter()">Accept</button> </footer>
</html>


<script type="text/javascript">
	window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function hideFooter(){
	console.log('hi');
	var x=document.getElementById("foot");

	x.style.display="none";
}
</script>