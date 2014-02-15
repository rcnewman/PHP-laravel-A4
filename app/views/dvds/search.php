<!doctype html>
<html>
<head>
	<title>DVD Search</title>
</head>
<body>
	<form method= "get" action="/dvds"> 
		<h1>DVD Search</h1>
		<div> Title:
		<input type="text" name="dvd_title"/>
		</div>
		<div>Genre: <?php echo $genre_menu; ?></div>
		<div>Rating: <?php echo $rating_menu; ?></div>
		<input type="submit" value="Search" />
	</form>
</body>


</html>