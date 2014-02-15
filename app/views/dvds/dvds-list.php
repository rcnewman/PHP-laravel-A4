<!doctype html>
<html>
<head>
	<title>My DVDs</title>
</head>
<body>
	<h1>My DVDs</h1>
	<table style="border=1px;">
		<tr>
			<td>Title</td>
			<td>Rating</td>
			<td>Genre</td>
			<td>Label</td>
			<td>Sound</td>
			<td>Format</td>
			<td>Release Date</td>
		</tr>
	<?php foreach ($dvds as $dvd) : ?>
		<tr>
			<td><?php echo $dvd->title; ?></td>
			<td><?php echo $dvd->rating_name; ?></td>
			<td><?php echo $dvd->genre_name; ?></td>
			<td><?php echo $dvd->label_name; ?></td>
			<td><?php echo $dvd->sound_name; ?></td>
			<td><?php echo $dvd->format_name; ?></td>
			<td><?php echo $dvd->release_date; ?></td>
		 </tr>
	<?php endforeach; ?>
	</table>	
</body>
</html>