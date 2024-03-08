function calculate_reading_time($post_id)
{

	$post_content = get_post_field('post_content', $post_id);
	$word_count = str_word_count(strip_tags($post_content));
	$words_per_minute = 200;

	$reading_time = ceil($word_count / $words_per_minute);

	return $reading_time;
}


<?php echo '<span class="read_time">' . calculate_reading_time($post_id) . 'min Read</span>' ?>
