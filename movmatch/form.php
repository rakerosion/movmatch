<html>
<head>
<script>
function showDiv() {
   document.getElementById('form2').style.display = "block";
   document.getElementById('add').style.display = "none";
   document.getElementById('submit').style.display = "none";
   document.getElementById('secondmovie').style.display = "block";
}
</script>
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
	height: 95%;
	border: 2px solid;
	border-color: black;
	margin:auto;
	text-align: center;
}
#rate{
	padding-top: 10px;
	font-size:18px;
}

#submit,#submit2{
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
	height: 40%;
	border: 2px solid;
	border-color: black;
	margin:auto;
	padding-top:10px;
}
#firstmovie{
	padding-right:400px;
}
 
#time,#time2{
	width: 80px;
}

#format,#format2{
	padding-left: 186px;
	font-size: 14px;
}

div#form2{
	display: none;
}

#secondmovie{
	display: none;
	padding-left: 290px;
	padding-bottom: 200px;
}
</style>
</head>
<body>
<?php
error_reporting(E_ERROR | E_WARNING ^ E_PARSE);
?>
<div id="header">
<center>
<h1>MovieMatcher+<h1>
</div>
<div id="form">
<form id="rate" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label for="movie1">What is the name of your first movie choice?</label>
<input type="text" id="movie1" name="movie1" autocomplete="off" maxlength="23"></input><input type="submit" value="OK" id="ok"></input><br><br>
<label for="rating">What is the rating of <?php echo $_POST["movie1"]; ?>?</label>
<select id="rating" name="rating">
	<option value="None Selected">Select...</option>
	<option value="G">G</option>
	<option value="PG">PG</option>
	<option value="PG-13">PG-13</option>
	<option value="R">R</option>
</select><br><br>
<label for="genre">What is the genre of <?php echo $_POST["movie1"]; ?>?</label>
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
<input type="button" id="add" value="Add Another Movie" onclick="showDiv()"></input><br>
<input type="submit" id="submit"></input>
</form>
<div id="form2" style="display:none;">
<form id="rate2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label for="movie2">What is the name of your second movie choice?</label>
<input type="text" id="movie2" name="movie2" autocomplete="off" maxlength="23"></input><input type="submit" value="OK" id="ok"></input><br><br>
<label for="rating2">What is the rating of <?php echo $_POST["movie2"]; ?>?</label>
<select id="rating2" name="rating2">
	<option value="None Selected">Select...</option>
	<option value="G">G</option>
	<option value="PG">PG</option>
	<option value="PG-13">PG-13</option>
	<option value="R">R</option>
</select><br><br>
<label for="genre2">What is the genre of <?php echo $_POST["movie2"]; ?>?</label>
<select id="genre2" name="genre2">
	<option value="None Selected">Select...</option>
	<option value="Sci-Fi">Sci-Fi</option>
	<option value="Mystery">Mystery</option>
	<option value="Action">Action</option>
	<option value="Adventure">Adventure</option>
</select><br><br>
<label for="time2">How long is your movie?</label>
<input type="text" id="time2" name="time2" autocomplete="off" ></input>
<p id="format2"><em>hour:minute</em></p><br>
<input type="button" id="add2" value="Add Another Movie"></input><br>
<input type="submit" id="submit"></input>
</form>
</div>
</div>
<div id="accept">
<div id="firstmovie">
<h5>Check your response for the first movie:</h5>
<?php 
echo "<b>".$_POST["movie1"]."</b><br><br>";
echo "Rating: ".$_POST["rating"]."<br><br>"; 
echo "Genre: ".$_POST["genre"]."<br><br>"; 
echo "Time: ".$_POST["time"]."<br><br>";
?>
</div>
<div id="secondmovie">
<h5>Check your response for the second movie:</h5>
<?php
echo "<b>".$_POST["movie2"]."</b><br><br>";
echo "Rating: ".$_POST["rating2"]."<br><br>"; 
echo "Genre: ".$_POST["genre2"]."<br><br>"; 
echo "Time: ".$_POST["time2"]."<br><br>"; 
?>
</div>
</div>
</center>
</body>
</html>
