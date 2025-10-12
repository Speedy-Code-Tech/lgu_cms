<?php

/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GWT
 * @since Government Website Template 2.0
 *eol-65
 */

get_header();
include_once('inc/banner.php');
?>
<?php
$val = 0;
$dat = single_cat_title('', false);
$data = "";
if (str_word_count($dat) <= 2) {
	$data = $dat;
} else {
	$data = $dat;
}

$description = "";
$title = "";

switch ($data) {
	case 'WHERE TO STAY':
		$title = "ACCOMODATIONS";
		$description = "&emsp;&emsp;Camarines Norte is a marvelous, nature-gifted province that features picturesque scenery, pristine white sand beaches, some unspoiled islands and caves, hot and cold springs and several historical landmarks that date back to the Spanish era. Labo is a center of the province based on nature and rivers, most of the adventures and activities for tourists are done during the daytime. historical landmarks that date back to the Spanish era. Labo is a center of the province based on nature and rivers, most of the adventures and activities for tourists are done during the daytime.
					<br />
					<br />
					&emsp;&emsp; As the largest town in Camarines Norte, Labo has more than 20 accommodation establishments for tourists to stay. The most number of accommodations are found in poblacion areas, where most of the entertainment, dining, shops, and stores are located. Here are some accommodation options for tourists to stay at.";
		$val = 1;
		break;
	case 'THINGS TO DO':
		$val = 1;
		$title = "FUN THINGS TO DO IN LABO";
		break;
	case 'RESTAURANTS':

		$val = 1;
		$title = "RESTAURANTS";
		$description = "
		&emsp;&emsp;For the best dining experience in Labo, Camarines Norte, you should seek out places that specialize in authentic Bicolano cuisine, which is renowned for its use of rich coconut milk (gata) and fiery chilies. A top spot to try is Villa Eusebia Restaurant, known for serving regional classics like Sinantol (shredded cotton fruit cooked in coconut cream) and dishes made with fresh river fish, reflecting the town's agricultural surroundings.<br/> <br/> 
		&emsp;&emsp;Alternatively, for a memorable local experience, consider having lunch at one of the community-based ecotourism sites, such as the Canapawan Eco-Tourism and Farm or Casanayon Resort, where you can often enjoy a hearty boodle fight feast or local delicacies like Pancit Bato and suman in a serene, natural environment. For travelers with more conventional cravings, the town center also offers familiar casual dining options and cafés like Kirby's Cabana Restaurant and local fast-food chains.";
		break;
	case 'FUN AND ADVENTURE':
		$val = 1;
		$title = "FUN AND ADVENTURE IN LABO";
		$description = "&emsp;&emsp; Labo, Camarines Norte, is a haven for adventurers and those seeking a tranquil escape, offering a diverse array of natural wonders. For the thrill-seekers, there are numerous opportunities for hiking and challenging trekking routes up majestic mountains like Mt. Labo or a shorter but rewarding trek to Tan-Awang Bato, which leads to breathtaking vantage points and deep into lush forests. Underground exploration is also available with fascinating caving spots like Cadig Cave to discover. <br/><br/> &emsp;&emsp;The landscape is dotted with beautiful waterfalls, such as the easily accessible Malatap Falls and the tiered Binuang Falls and Maligaya Falls, providing perfect, cool basins for a refreshing swim after a long day of exploration. Beyond the rugged adventures, visitors can also find several peaceful spots dedicated to leisure and relaxation, including resorts and ecotourism sites like the Canapawan Eco Tourism and Farm or the Labo People's Park, where one can unwind and simply enjoy the natural, serene surroundings.";
		break;
	case 'LABO TOURISM AVP':
		$val = 1;
		$title = "LABO TOURISM AVP";
		$description = "labotourismavp";
		break;
	default:
		$val = 0;
		$description = "";
		break;
}


?>
<?php govph_displayoptions('govph_panel_top'); ?>
<style>
	.line {
		width: 150px;
		height: 4px;
		background-color: #4956FF;
		margin-top: 5px;
		border-radius: 20px;
		margin-bottom: 20px;
	}

	.art {
		border-right: 2px #00B518 solid;
	}
</style>
<div id="container-main" class="container-main" role="document">
	<div id="main-content" class="row">
		<?php
		if ($val == 1): ?>
			<div class="container-fluid">
				<div class="d-flex flex-column">

					<h2 class="h2 m-0" style="color:#00B518; font-weight: bold;"><?= $title; ?></h2>
					<div class="line"></div>
				</div>
				<article class="ms-5 ps-2 pe-5 mb-5 art" style="text-align: justify;">
					<?= $description; ?>

				</article>

			</div>

		<?php endif; ?>
		<?php
		$dat = single_cat_title('', false);
		if ($dat == "NEWS"): ?>
			<div id="content" class="container-fluid columns" role="main">

				<?php else:
				if ($val == 1):
				?>

					<?php if ($title == "ACCOMODATIONS"): ?>
						<div class="d-flex">
						<?php else: ?>
							<div class="d-flex flex-column">
							<?php endif; ?>
						<?php
					else:
						?>
							<div id="content" class="<?php govph_displayoptions('govph_content_position'); ?>columns" role="main">
							<?php
						endif;
							?>
						<?php endif ?>
						<?php if (have_posts()) : ?>
							<?php /* Start the Loop */ ?>
							<?php while (have_posts()) : the_post(); ?>

								<?php
								/* Include the Post-Format-specific template for the content.
							 * If you want to overload this in a child theme then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
								get_template_part('template-parts/content', get_post_format());
								?>

							<?php endwhile; ?>

							<?php gwt_wp_content_nav('nav-below'); ?>

						<?php else : ?>

							<?php get_template_part('no-results', 'archive'); ?>

						<?php endif; ?>
							</div><!-- #content -->
							<?php
							if (is_category()) :
								$dat = single_cat_title('', false);
								if ($dat == "HOME") :
							?>
									<?php

									if (is_active_sidebar('left-sidebar')) {
										govph_displayoptions('govph_sidebar_left');
									}

									?>
									<?php
									if (is_active_sidebar('right-sidebar')) {
										govph_displayoptions('govph_sidebar_right');
									}
									?>
							<?php
								endif;
							endif;
							?>

							</div><!-- #main -->
						</div><!-- #primary -->

						<?php govph_displayoptions('govph_panel_bottom'); ?>

						<?php get_footer(); ?>