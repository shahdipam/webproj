<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="exstyle.css">

	<title>Create Post</title>

	
</head>
<body style="background-image: url('img/cat.jpeg'); background-size: 280px;" onload="document.getElementById('btn-post').click();">
<div>
	<header style="width:100vw; margin-top: -128px; height: 60px; margin-left: -8px; position: fixed; background-color: #454545; border-bottom-width: 2px; border-bottom-style: solid;">
	

<div class="topnav" align="right" style="display: inline-flex;">
<h1 style="margin-left: 20px; margin-top: 16px;">SPreddit</h1>
<input style=" margin-left: 60px; height: 23px; margin-top: 18px; border-radius: 10px; border-top-right-radius: 0px;border-bottom-right-radius: 0px; border-color: black; border-right-color: initial; border-right: 0px;" type="text" name="search" placeholder="Search here" size="40px" >
<button style="margin-right: 7px; height: 29px; margin-top: 18px; border-top-right-radius: 10px; border-left: 0px; border-bottom-right-radius: 10px; border-color: black; border-left-color: initial;">Search</button>	
<button style="margin-right: 10px;  height: 29px; margin-top: 18px; border-radius: 10px; border-color: black;" >Trending</button>
<button style=" height: 29px; margin-top: 18px; border-radius: 10px; border-color: black;">Popular</button>
<button style="margin-left: 290px; height: 29px; width: 70px; margin-top: 18px; border-radius: 10px; border-color: black;">Log in</button>
<button style="height: 29px; width: 70px; margin-top: 18px; border-radius: 10px; border-color: black;">Sign up</button>
<select title="select" style="height: 29px; width: 100px; margin-top: 18px; border-radius: 10px; border-color: black; border-width: 2px;">
	<option value="help" style="background-color: white;" >Help Center</option>
	<option value="night">Night Mode</option>
	<option value="login">Login/SignUp</option>
</select>
</div>
</div>
</header>
 <div style="background-color: #454545; width: 950px;height: 600px; margin-top: 120px; margin-left: 35px;">
<div class="flex-container" style="font-family: Arial;  margin-left: 25px; margin-top: 30px; display: inline-flex; font-size: 30px; color: white">Create a post</div>


	
		<div class="tab" style="width: 100%; height: 30px;">
  <button id="btn-post" class="tablinks" style="width: 33.3%;" onclick="openCity(event, 'post')">Post</button>
  <button class="tablinks" onclick="openCity(event, 'media')" style="width: 33.3%;" >Image/Video</button>
  <button class="tablinks" onclick="openCity(event, 'link')" style="width: 33.3%;">Link</button>
</div>
<div id="post" class="tabcontent">
  <hr>	
		<div>
			<input type="text" name="Title" placeholder="Title" style="width: 99%; height: 30px; font-size: 25px;">
		</div>
		
		<div>
			<textarea placeholder="Text(Optional)" rows="13" cols="73" style="margin-top: 10px; font-size: 20px; resize: none;" id="textbox"></textarea>
		</div>
		<div align="Center">  <button style="margin-top: 10px; width: 100%; background: #A9A9A9; height: 30px;">Post</button></div>
	</div>

</div>

<div id="media" class="tabcontent">
  <p>Paris is the capital of France.</p> 
</div>

<div id="link" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
	
<script type="js/query.js"></script>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

   

</body>
</html>