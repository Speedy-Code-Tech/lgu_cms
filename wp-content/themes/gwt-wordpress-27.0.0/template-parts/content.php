<?php

/**
 * @package GWT
 * @since Government Website Template 2.0
 * eol-58
 */
?>
<style>
	@media only screen and (max-width: 600px) {
		.thumbnails {
			width: 100%;
		}

		#post-<?php the_ID(); ?> {
			display: flex;
			flex-direction: column;
		}
	}

	@media only screen and (min-width: 600px) {
		.thumbnails {
			width: 300px;
		}

		#post-<?php the_ID(); ?> {
			display: flex;
		}
	}

	@media only screen and (min-width: 768px) {
		.thumbnails {
			width: 300px;
		}

		#post-<?php the_ID(); ?> {
			display: flex;
		}
	}

	.touristCard {
		/* border: 1px solid #424242ff; */
		border-radius: 10px;
		padding: 10px;
		margin-bottom: 20px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
		transition: transform 0.2s;
		width: 300px;
	}

	.thumbnails1 {
		margin: 0;
		width: 300px;
		object-fit: fill;
		height: 250px;
	}

	.resimg {
		max-width: 100%;
		height: auto;
		display: block;
	}
</style>
<div class="post-box container-fluid">
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
	<?php if ($val == 1 && $title == "ACCOMODATIONS"): ?>
		<div class="container-fluid d-flex flex-wrap gap-3 justify-content-center">
			<article id="post-<?php the_ID(); ?>" class="touristCard">
				<div class="container d-flex flex-column justify-content-center align-items-center">
					<?php if (has_post_thumbnail()) : ?>
						<div class="d-flex justify-content-center align-items-center">
							<?php the_post_thumbnail('medium', ['class' => 'thumbnails1 rounded m-0']); ?>
						</div>
					<?php endif; ?>
					<div class="container-fluid p-0 m-0">
						<h3 class="entry-title text-center mt-3" style="color:#00B518;"><a href="<?php the_permalink(); ?>" rel="bookmark" style="color:#00B518;"><?php the_title(); ?></a></h3>
						<?php
						$content = get_the_content();
						$content = wp_strip_all_tags($content);
						if (mb_strlen($content) > 200) {
							$content = mb_substr($content, 0, 200) . '...';
						}
						?>
						<p class="p-0 m-0 text-secondary" style="text-align: justify;"><?= esc_html($content); ?> </p>
						<a href="<?php the_permalink(); ?>" class="btn text-white form-control mt-2" style="background-color: #00B518;">Read More</a>
					</div>
				</div>
			</article>


		</div>
	<?php elseif ($val == 1 && $title == "FUN AND ADVENTURE IN LABO" || 	$title == "RESTAURANTS"): ?>
		<div class="container-fluid">
			<div class="flex-column flex-sm-row" style="display: flex; align-items: flex-start; gap: 20px; padding: 20px;">
				<div  style="flex-shrink: 0;">
					<?php if (has_post_thumbnail()) : ?>
						<div class="container-fluid d-flex justify-content-center align-items-center">
							<?php the_post_thumbnail('medium', ['class' => 'resimg rounded m-0']); ?>
						</div>
					<?php endif; ?>

				</div>
				<div style="flex-grow: 1;">
					<h2 style="margin-top: 0; border-bottom: 3px solid #32CD32; display: inline-block; padding-bottom: 5px; color: #007bff;">GINATAANG TABAGWANG</h2>
					<p style="border-right: 2px #00B518 solid; text-align: justify;" class="px-3">
						<?php
						$content = get_the_content();
						$content = wp_strip_all_tags($content);
						if (mb_strlen($content) > 300) {
							$content = mb_substr($content, 0, 300) . '...';
						}
						?>
					<p class="p-0 m-0 text-secondary" style="text-align: justify;"><?= esc_html($content); ?> </p>
					<div class="container-fluid text-end">
						<a href="<?php the_permalink(); ?>" class="mt-2" style="color: #00B518;">Read More...</a>
					</div>
					</p>
				</div>
			</div>
		</div>
	<?php else: ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('callout secondary'); ?>>

			<?php
			$content_class = 'large-12';
			if (has_post_thumbnail()) :
				$content_class = 'large-12';
				the_post_thumbnail('thumbnail', ['class' => 'thumbnails']);
			endif;

			if (has_post_thumbnail() && is_active_sidebar('left-sidebar') && is_active_sidebar('right-sidebar')) :
				$content_class = 'large-12';
			endif;
			?>

			<div class="entry-wrapper <?php echo $content_class; ?> medium-12 small-12">
				<!-- entry-header -->
				<header class="entry-header">
					<h3 class="entry-title" style="color:#00B518;"><a href="<?php the_permalink(); ?>" rel="bookmark" style="color:#00B518;"><?php the_title(); ?></a></h2>
						<p class="p-0 m-0 text-secondary">Author: <?= get_the_author(); ?></p>
						<p class="p-0 m-0 text-secondary" style="text-size:5px;">Date Posted: <?= get_the_date(); ?></p>
						<?php if ('post' == get_post_type()) : ?>
							<div class="entry-meta">
								<?php gwt_wp_posted_on(); ?>
							</div>
						<?php endif; ?>
				</header>


				<!-- entry-summary entry-content -->
				<?php if (is_search()) : // Only display Excerpts for Search 
				?>
					<div class="entry-summary">
						<?php
						$excerpt = get_the_excerpt();
						if (strlen($excerpt) > 200) {
							$excerpt = mb_substr($excerpt, 0, 200) . '...';
						}
						echo '<p>' . esc_html($excerpt) . '</p>';
						?>
						<?php
						wp_link_pages(['before' => '<div class="page-links">' . __('Pages:', 'gwt_wp'), 'after'  => '</div>']);
						?>
					</div>
				<?php else : ?>
					<div class="entry-content">
						<?php
						$excerpt = get_the_excerpt();
						if (strlen($excerpt) > 200) {
							$excerpt = mb_substr($excerpt, 0, 200) . '...';
						}
						echo '<p>' . esc_html($excerpt) . '</p>';
						?>
						<?php
						wp_link_pages(['before' => '<div class="page-links">' . __('Pages:', 'gwt_wp'), 'after'  => '</div>']);
						?>
					</div>
				<?php endif; ?>

				<!-- footer entry-meta -->
				<footer class="entry-meta">
					<?php if ('post' == get_post_type()) : // Hide category and tag text for pages on Search 
					?>
					<?php endif; ?>
				</footer>
			</div>
		</article>
	<?php endif; ?>
</div>