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

	.charter_text {
		color: #00B518;
		font-size: 70px;
		font-weight: bold;
		text-align: end;
		line-height: 75px;
		padding-right: 20px
	}

	@media only screen and (max-width: 600px) {
		.charter_text {
			font-size: 40px;
			line-height: 45px;
			padding-right: 10px;
			padding-bottom: 30px;
		}
	}

	@media only screen and (min-width: 600px) {
		.charter_text {
			font-size: 50px;
			line-height: 55px;
			padding-right: 10px
		}
	}

	@media only screen and (min-width: 768px) {
		.charter_text {
			font-size: 70px;
			line-height: 75px;
			padding-right: 20px
		}

	}

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


	.test {
		background: rgba(0, 181, 24, 0.4);
	}

	.container-mastheads {
		background-color: #00B518;
		/* padding: 10px 0px; */

		height: 100%;
		width: 100%;

		padding: 0;
		background: url("<?php echo get_template_directory_uri(); ?>/images/economy.jpg");
		background-size: cover;
		background-repeat: no-repeat;
	}

	.divider {
		display: flex;
		align-items: center;
		/* Vertically align items in the divider */
		justify-content: center;
		/* Center the line and icon */
		width: 100%;
		max-width: 300px;
		/* Set a max width for the line as it's not full-width */
		margin: 0 auto;
		/* Center the divider block itself */
		line-height: 1;
		/* Helps with vertical alignment of the icon */
		position: relative;
	}

	.divider::before,
	.divider::after {
		content: '';
		flex-grow: 1;
		/* Makes the line segments grow to fill the space */
		height: 1px;
		background-color: #000;
		/* Black line */
		/* Add margin to prevent the line from touching the icon */
		margin: 0 5px;
	}

	.divider-icon {
		font-style: normal;
		/* To remove any default italics */
		font-weight: bold;
		font-size: 21px;
		/* Size of the 'i' */
		color: #000;
		/* Black color for the icon */
		padding: 0 5px;
		/* Space around the icon */
		/* Adjust vertical position of the icon to sit on the line */
		position: relative;
		top: 1px;
	}

	.icon {
		z-index: 99;
		height: 100%;
		margin-left: 20px;
		width: 100%;
		margin-top: 10px;
	}

	.texts {
		z-index: 99;
		height: 100%;
		justify-content: center;
	}

	.brgy {
		background: url(<?php echo get_template_directory_uri() . '/images/brgy.jpg' ?>);
		color: #fff;
		width: 100%;
		text-align: center;
		text-transform: uppercase;
		font-weight: bold;
		background-size: cover;
		display: flex;
		align-items: center;
		justify-content: center;
		height: 240px;
		border-radius: 20px;
		margin-top: 30px;
	}

	.page-titles {
		font-size: 80px;
		font-weight: bold;

	}

	.links {
		color: #373737;
	}

	.links:hover {
		color: #00B518;
		font-weight: bold;
	}

	@media only screen and (max-width: 600px) {
		.container-mastheads {

			background: url("<?php echo get_template_directory_uri(); ?>/images/economy2.jpg");
			background-size: cover;
			background-repeat: no-repeat;
		}

		.tag {
			font-size: 35px;
			font-weight: bold;
		}

		.page-titles {
			font-size: 40px;
			font-weight: bold;

		}
	}

	@media only screen and (min-width: 600px) {
		.container-mastheads {

			background: url("<?php echo get_template_directory_uri(); ?>/images/economy2.jpg");
			background-size: cover;
			background-repeat: no-repeat;
		}

		.tag {
			font-size: 40px;
			font-weight: bold;
		}

		/* .page-titles {
		font-size: 40px;
		font-weight: bold;

	} */
	}

	/* Base container for responsive layout */
	.mo-year-ribbon-list {
		display: flex;
		flex-wrap: wrap;
		gap: 15px;
		/* Spacing between ribbons */
		margin-top: 20px;
	}

	/* Link element to ensure the ribbon is clickable */
	.mo-ribbon-link {
		text-decoration: none;
		display: block;
		/* Makes the entire ribbon area clickable */
	}

	/* The core ribbon style */
	.category-ribbon {
		/* Style to match your green image */
		display: inline-block;
		padding: 10px 40px 10px 20px;
		background-color: #38a169;
		/* Your preferred green color */
		color: white;
		font-size: 24px;
		font-weight: bold;
		position: relative;
		line-height: 1;
		/* Create space for the point */
		margin-right: 20px;
		transition: background-color 0.2s;
	}

	/* Hover effect */
	.mo-ribbon-link:hover .category-ribbon {
		background-color: #2e8b57;
		/* Slightly darker green on hover */
	}

	/* Creates the pointed end (the right arrowhead) */
	.category-ribbon::after {
		content: "";
		position: absolute;
		top: 0;
		/* The right edge of the content box */
		right: -20px;

		/* Create the triangular shape */
		border-top: 28px solid transparent;
		/* Half the ribbon height */
		border-bottom: 28px solid transparent;
		/* Half the ribbon height */
		border-left: 20px solid #38a169;
		/* Matches the ribbon's background color */
		z-index: 1;
	}

	/* Hover effect on the pointed end */
	.mo-ribbon-link:hover .category-ribbon::after {
		border-left-color: #2e8b57;
		/* Matches the hover background color */
	}
</style>
<div id="container-main" class="container-main" role="document">
	<div id="main-content">

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
		$cleaned_dat = trim($dat);

		$dat_no_punc = preg_replace('/[[:punct:]]/u', '', $cleaned_dat);
		$target_no_punc = preg_replace('/[[:punct:]]/u', '', "CITIZEN's CHARTER");
		$target = str_replace("8217", "", $dat_no_punc);
		if (strtolower($target) == strtolower($target_no_punc)):
		?>
			<style>
				.post-box.container-fluid {
					width: 300px;
				}
			</style>
		<?php
		endif;
		if ($dat == "NEWS"): ?>
			<div id="content" class="container-fluid columns" role="main">
			<?php else: ?>
				<?php if ($val == 1): ?>
					<?php if ($title == "ACCOMODATIONS"): ?>
						<div class="d-flex">
						<?php else: ?>
							<div class="d-flex flex-column">
							<?php endif; ?>
						<?php else: ?>
							<?php if ($dat == "FACTS AND FIGURES") {
								require(get_template_directory() . '/template-parts/custom/fact-figures.php');
							}
							if (strtolower($target) == strtolower($target_no_punc)): ?>
								<!-- DISPLAY CITIZENZ CHARTER INFO -->
								<?php require(get_template_directory() . "/template-parts/custom/citizens-banner.php"); ?>
								<div id="content" class="d-flex flex-wrap gap-3 justify-content-center align-items-center" role="main">
								<?php else: ?>
									<div id="content" role="main">

									<?php endif; ?>

								<?php endif; ?>
							<?php endif;

							?>
							<?php
							if ($dat == "DOWNLOADABLE FORMS") {
								require(get_template_directory() . "/template-parts/custom/form-banner.php");
							?>
							<?php
							}
							if ($dat == "DEPARTMENT AND OFFICES") {
								require(get_template_directory() . "/template-parts/custom/department.php");
							}
							if ($dat == "MEMORANDUM ORDER" || $dat == "EXECUTIVE ORDER") {
								if ($dat == "MEMORANDUM ORDER") {
									require(get_template_directory() . "/template-parts/custom/memo-banner.php");
								} else if ($dat == "EXECUTIVE ORDER") {
									require(get_template_directory() . "/template-parts/custom/executive-banner.php");
								}
							?>
								<div class="container-fluid d-flex flex-column flex-md-row gap-3">
									<?php

								}
								if($dat!="DEPARTMENT AND OFFICES"):
								if (have_posts()) :

									if ($dat == "MEMORANDUM ORDER" || $dat == "EXECUTIVE ORDER") {
									?>

										<style>
											.post-box.container-fluid {
												width: 200px;
												border-radius: 5px;
												padding: 20px;
												display: flex;
												flex-direction: column;
												justify-content: center;
												align-items: center;
												cursor: pointer;
												box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.12);
											}

											.post-box a {
												color: #373737;
											}

											.post-box:hover {
												transition: 0.7s;
												background-color: #00B518;
												color: white;
											}

											.post-box:hover a {
												color: white;
											}
										</style>
									<?php }
									if ($dat == "ECONOMIC DEVELOPMENT" || $dat == "FISCAL MANAGEMENT" || $dat == "INFRASTRUCTURE"  || $dat == "PUBLIC ADMINISTRATION" || $dat == "SOCIAL SERVICES") { ?>
										<style>
											#content {
												display: flex;
												flex-direction: row;
												gap: 15px;
												justify-content: center;
												align-items: center;
												padding: 0 20px;
											}

											.post-box.container-fluid {
												width: 350px;
											}

											@media only screen and (max-width: 600px) {
												#content {
													flex-direction: column;
												}
											}

											@media only screen and (min-width: 600px) {
												#content {
													flex-wrap: wrap;
												}
											}

											@media only screen and (min-width: 768px) {
												#content {

													flex-direction: row;
												}
											}
										</style>
										<?php	}
									if ($dat != "MEMORANDUM ORDER" && $dat != "EXECUTIVE ORDER") {
										while (have_posts()) : the_post(); ?>

											<?php get_template_part('template-parts/content', get_post_format()); ?>
										<?php endwhile;
									
									} else {  ?>
										<div class="pt-5 container-fluid">
											<h2 class="border border-top-0 border-end-0 border-bottom-0 border-2 border-success ps-3 mb-4">Executive Order Archive</h2>

											<div class="row g-4">
												<?php
												// 👇 GET ALL SUBCATEGORIES OF "executive-order" ONLY!
												$parent_cat = "";
												$slug = "";
											
												if ($dat == "MEMORANDUM ORDER"){
													$slug = "memorandum-order";
												}else{
													$slug = "executive-order";
												}
											
											$parent_cat = get_term_by('slug', $slug, 'category');?>
											<div class="row mb-3">
 
											<?php	if (!$parent_cat) {
													echo '<div class="col-12"><p class="text-center text-danger">Parent category "executive-order" not found!</p></div>';
												} else {
												
													$subcategories = get_categories(array(
														'child_of' => $parent_cat->term_id,
														'hide_empty' => 0, // Show even if no posts
														'orderby' => 'name',
														'order' => 'DESC'
													));
														if ($subcategories) :
														foreach ($subcategories as $subcat) :
												?>
															<div class="col-md-6 col-lg-4">
																<div class="card h-100 shadow-sm border-0 bg-white rounded-4 overflow-hidden text-center p-4">
																	<div class="card-body d-flex flex-column justify-content-center">
																		<h3 class="card-title fw-bold text-success mb-3 fs-1"><?= $subcat->name ?></h3>
																		<p class="text-secondary mb-4">
																			<?= $subcat->description ?: $subcat->count . ' Executive Order' . ($subcat->count != 1 ? 's' : '') ?>
																		</p>
																		<a href="<?= get_category_link($subcat->term_id) ?>"
																			class="btn btn-success btn-lg w-100">
																			View <?= $subcat->name ?> <i class="fas fa-arrow-right ms-2"></i>
																		</a>
																	</div>
																</div>
															</div>
														<?php
														endforeach;
													else :
														?>
														<div class="col-12">
															<p class="text-center text-muted">No executive order years available.</p>
															<!-- DEBUG INFO -->
															</div>
												<?php
													endif;
												}
												?>
											</div>
										</div>
									<?php } ?>

									<?php gwt_wp_content_nav('nav-below'); ?>
									<?php endif; ?>
								<?php else : ?>
									<?php get_template_part('no-results', 'archive'); ?>
								<?php endif;
								if ($dat == "MEMORANDUM ORDER" || $dat == "EXECUTIVE ORDER") {
								?>

								</div>
							<?php } ?>
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
							<?php get_footer(); ?>
							<?php govph_displayoptions('govph_panel_bottom'); ?>