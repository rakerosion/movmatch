<html>
<head>
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
#accept {
	text-align: center;
	width: 60%;
	height: 40%;
	border: 2px solid;
	border-color: black;
	margin:auto;
	padding-top:10px;
}


</style>
</head>
<body>
<div id="header">
<center>
<h1>MovieMatcher+<h1>
</div>
<div id="form">
<form id="rate" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label for="rating">What rating do you prefer?</label>
<select id="rating" name="rating">
	<option value="None Selected">Select...</option>
	<option value="G">G</option>
	<option value="PG">PG</option>
	<option value="PG-13">PG-13</option>
	<option value="R">R</option>
</select><br><br>
<label for="genre">What genre do you prefer?</label>
<select id="genre" name="genre">
	<option value="None Selected">Select...</option>
	<option value="Sci-Fi">Sci-Fi</option>
	<option value="Mystery">Mystery</option>
	<option value="Action">Action</option>
	<option value="Adventure">Adventure</option>
</select><br>
<input type="submit" id="submit"></input>
</form>
</div>
<div id="accept">
<h5>Check over your responses</h5>
<?php 
echo "Rating: ".$_POST["rating"]."<br><br>"; 
echo "Genre: ".$_POST["genre"]."<br><br>"; 
?>
</div>
</center>
</body>
</html>

