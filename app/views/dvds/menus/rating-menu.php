<select name="rating">
	<option>All</option>
	<?php foreach ($ratings as $rating) : ?>
	<option value='<?php echo $rating->id; ?>'>
		<?php echo $rating->rating_name ?>
	</option>
	<?php endforeach; ?>
</select>
