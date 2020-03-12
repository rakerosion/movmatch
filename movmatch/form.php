<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>

h1, h5 {
	font-family: arial;
}

#header{
	margin: 0;
	padding: 0;
	background-color: yellow;
}
#form {
	width: 60%;
	height: auto;
	border: 2px solid;
	border-color: black;
	margin:auto;
	text-align: center;
}
#rate{
	padding-top: 10px;
	font-size:18px;
}

#submit{
	font-color: black;
	background-color: yellow;
	width: 80px;
	height:40px;
	border-radius:10px;
	font-family: arial;
	font-weight: bold;
	outline: none;
	border-style: solid;
	border: 2px solid black;
	margin-top: 10px;
}

#add,#add2{
	font-color: black;
	background-color: yellow;
	width: 140px;
	height:40px;
	border-radius:10px;
	font-family: arial;
	font-weight: bold;
	outline: none;
	border-style: solid;
	border: 2px solid black;
	margin-top: 10px;
}
	
#accept {
	text-align: center;
	width: 60%;
	height: auto;
	border: 2px solid;
	border-color: black;
	margin:auto;
	padding-top:10px;
}
 
#time,#timetwo{
	width: 80px;
}

#format,#format2{
	padding-left: 186px;
	font-size: 14px;
}

#secondmovie{
	display: none;
}

table{
	font-family: arial;
	font-size: 12px;
	text-align: center;
}
td{ 
	width:25%;
	border:none;
    text-align:center;
    padding:10px;
    background-color:#e3e3e3;
}
tr:first-child, td:first-child { font-weight: bold }
</style>
</head>
<body>
<div id="header">
<center>
<h1>MovieMatcher<h1>
</div>
<div id="form">
<form id="rate" method="post" action="">
<label for="movie">What is the name of your first movie?</label>
<input type="text" id="movie" name="movie" autocomplete="off" maxlength="30"></input><br><br>
<label for="rating">What is the rating?</label>
<select id="rating" name="rating">
	<option value="None Selected">Select...</option>
	<option value="G">G</option>
	<option value="PG">PG</option>
	<option value="PG-13">PG-13</option>
	<option value="R">R</option>
</select><br><br>
<label for="genre">What is the genre?</label>
<select id="genre" name="genre">
	<option value="None Selected">Select...</option>
	<option value="Sci-Fi">Sci-Fi</option>
	<option value="Mystery">Mystery</option>
	<option value="Action">Action</option>
	<option value="Adventure">Adventure</option>
</select><br><br>
<label for="time">How long is your movie?</label>
<input type="text" id="time" name="time" autocomplete="off" ></input>
<p id="format"><em>hour:minute</em></p><br>
<label for="movie2">What is the name of your second movie?</label>
<input type="text" id="movie2" name="movie2" autocomplete="off" maxlength="30"></input><br><br>
<label for="rating2">What is the rating?</label>
<select id="rating2" name="rating2">
	<option value="None Selected">Select...</option>
	<option value="G">G</option>
	<option value="PG">PG</option>
	<option value="PG-13">PG-13</option>
	<option value="R">R</option>
</select><br><br>
<label for="genre2">What is the genre?</label>
<select id="genre2" name="genre2">
	<option value="None Selected">Select...</option>
	<option value="Sci-Fi">Sci-Fi</option>
	<option value="Mystery">Mystery</option>
	<option value="Action">Action</option>
	<option value="Adventure">Adventure</option>
</select><br><br>
<label for="timetwo">How long is your movie?</label>
<input type="text" id="timetwo" name="timetwo" autocomplete="off" ></input>
<p id="format2"><em>hour:minute</em></p><br>
<input type="submit" id="submit" name="submit"></input>
</form>
</div>
<div id="accept">
<h5>Check your response for the first movie:</h5>
<?php
if(isset($_REQUEST['submit'])) {
	echo "<pre>";
	$result = $_REQUEST;
	if ($result) {
		 echo "<table border=1 width=100%>";
		 foreach($result as $k=>$v) {
			 if ($v !=='Submit') {
			    echo "<tr><td>".$v."</td></tr>";
			 }
		 }	 
		 echo "</table>";
	}		 
}else {
	echo "Please submit your data.";
}

?>
</div>
</center>
</body>
</html>
