<select name="genre">
	<option>All</option>
	<?php foreach ($genres as $genre) : ?>
	<option value='<?php echo $genre->id; ?>'>
		<?php echo $genre->genre_name ?>
	</option>
	<?php endforeach; ?>
</select>
