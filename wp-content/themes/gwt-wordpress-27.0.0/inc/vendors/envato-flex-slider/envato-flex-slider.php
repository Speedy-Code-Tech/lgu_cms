<?php
/*
Plugin Name: Envato FlexSlider
Plugin URI:
Description: A simple plugin that integrates FlexSlider (http://flex.madebymufffin.com/) with WordPress using custom post types!
Author: Joe Casabona
Version: 0.5
Author URI: http://www.casabona.org
*/

/*Some Set-up*/
define('EFS_PATH', get_template_directory_uri() . '/inc/vendors/' . basename(__DIR__) . '/');
define('EFS_NAME', "Envato FlexSlider");
define("EFS_VERSION", "0.5");

/*Files to Include*/
require_once('slider-img-type.php');

function efs_get_slider()
{
	$efs_query = "post_type=slider-image";
	query_posts($efs_query);

	global $post_id;

	//To fix the Undefined variable $count
	$count = 0; // Initialize $count

	//To fix the Undefined variable $slider
	$slider = ''; // Initialize $slider

	if (have_posts()) :

		$slider = '<div class="orbit" role="region" aria-label="Banner Slider" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out">
					<ul class="orbit-container">';

		$count = 0;
		$x = 1;
		while (have_posts()) : the_post();
			$count++;
		endwhile;

		while (have_posts()) : the_post();
			$img = get_the_post_thumbnail($post_id, 'full', ['class' => 'orbit-image']);
			$img1 = get_the_post_thumbnail($post_id, 'full', ['class' => 'orbit-image-bg']);

			$slide_link = slider_link_get_meta_box_data(get_the_ID());
			$caption = get_the_title();

			if ($x > $count) {
				$x = 1;
			}
			// $slider.= $post_id.'<li class="orbit-slide is-active"><div class="orbit-slide-number"><span>'.$x.'</span> of <span>'.$count.'</span></div><a href="'.$slide_link.'">'.$img.'</a><figcaption class="orbit-caption">'.$caption.'</figcaption></li>';
			// ORIGINAL (only uses $img):
			// $slider.= $post_id.'<li class="orbit-slide is-active"><div class="orbit-slide-number"><span>'.$x.'</span> of <span>'.$count.'</span></div><a href="'.$slide_link.'">'.$img.'</a><figcaption class="orbit-caption">'.$caption.'</figcaption></li>';

			// MODIFIED (Adds a background wrapper using $img1):
			$slider .= '<li class="orbit-slide is-active">';

			// Add the background image wrapper
			$slider .= '<div class="slide-background-wrap">' . $img1 . '</div>'; // <--- ADD THIS WRAPPER

			$slider .= '<div class="slide-content">'; // Start content wrapper

			$slider .= '<div class="orbit-slide-number"><span>' . $x . '</span> of <span>' . $count . '</span></div>';

			// Keep the link, now containing the foreground image
			$slider .= '<a href="' . $slide_link . '">' . $img . '</a>';

			$slider .= '<figcaption class="orbit-caption">' . $caption . '</figcaption>';

			$slider .= '</div>'; // End content wrapper

			$slider .= '</li>'; // End slide

			$x++;
		endwhile;

		if ($count > 1) {
			$slider .= '<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
						<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>';
		}
	endif;
	wp_reset_query();

	//ERROR
	if ($count > 1) {
		$slider .= '</ul>
		<nav class="orbit-bullets">';

		for ($x = 0; $x < $count; $x++) {
			$class = ($x == 0) ? 'is-active' : '';
			$slider .= '<button class="' . $class . '" data-slide="' . $x . '"><span class="show-for-sr">Current Slide</span></button>';
		}

		$slider .= '</div></nav>';
	} else {
		$slider .= '</ul></div>';
	}

	return $slider;
	//END OF ERROR
}

function efs_get_first_slide_link()
{
	// 1. Define the query to get only the first slider-image post

	$args = array(
		'post_type'      => 'slider-image',
		'posts_per_page' => 1, // Only retrieve one post
		'orderby'        => 'date', // Or whatever order your slider uses
		'order'          => 'DESC', // Assuming you want the newest one
	);

	// 2. Run the query
	$slide_query = new WP_Query($args);
	$slide_link = ''; // Initialize the variable

	// 3. Check if any posts were found
	if ($slide_query->have_posts()) {
		// Start the loop (only runs once because of posts_per_page = 1)
		$slide_query->the_post();

		// 4. Retrieve the link using your custom meta box function
		// Note: get_the_ID() works inside the loop
		$slide_link = slider_link_get_meta_box_data(get_the_ID());

		// 5. Reset post data to restore the main query
		wp_reset_postdata();
	}

	// 6. Return the link (will be empty string if no slides are found)
	return $slide_link;
}
/**add the shortcode for the slider- for use in editor**/
function efs_insert_slider($atts, $content = null)
{
	$slider = efs_get_slider();
	return $slider;
}
add_shortcode('ef_slider', 'efs_insert_slider');

/**add template tag- for use in themes**/
function efs_slider()
{
	print efs_get_slider();
}
