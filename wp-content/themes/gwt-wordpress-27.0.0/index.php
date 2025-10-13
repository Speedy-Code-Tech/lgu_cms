<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package GWT
 * @since Government Website Template 2.0
 * eol-60
 */

get_header();
include_once('inc/banner.php');
?>
<style>
	.ban-green {
		background-color: #00B518;
		color: white;
		font-weight: 600;
		text-align: center;
		padding: 10px 0;
		margin-bottom: 20px;
		font-size: 18px;
	}
</style>
<?php govph_displayoptions('govph_panel_top'); ?>

<div class="container-main" role="document">
	<div id="main-content" >
		<div id="content" class="<?php govph_displayoptions('govph_content_position'); ?>columns" role="main">
			<h1 class="border border-top-0 border-end-0 border-bottom-0 border-2 border-success ps-3">WELCOME!</h1>
			<div class="pt-5 container-fluid d-flex flex-column flex-sm-row gap-3">

				<div class="container-fluid bg-white shadow-lg rounded-4 p-3 p-md-5 mx-auto">

					<!-- Border top styling -->
					<div class=" pt-3 d-flex" style="border-top: #00B518 4px solid;">
						<div class="w-50 w-sm-100">
							<img src="<?php echo get_template_directory_uri(); ?>/images/labo.jpg" class="img-thumbnail " alt="">

							<!-- Header -->
							<header class="mb-4 border-bottom pb-3">
								<h1 class="h3 fw-bold text-dark mb-1">Brief History of Labo, Camarines Norte</h1>
								<p class="text-secondary small">A historical overview of the Bicol municipality.</p>
							</header>

						</div>
						<!-- Historical Text Content -->
						<div class="text-body lh-lg w-50 w-sm-100 ps-3">
							<p class="fs-10 p-0 m-0" style="height: 310px; text-overflow: ellipsis; overflow-y: hidden;">
								The Municipality of Labo, officially founded on September 8, 1800, is a pivotal historical and economic hub within Camarines Norte. Its history began during the Spanish colonial era and the town was recognized as a foundational municipality when the province was established in 1829. Labo holds significance in the nation's revolutionary history as the birthplace of <span class="fw-bolder" style="color:#00B518;">General Vicente R. Lukban</span>, a revered figure of the Philippine-American War. Economically, the town is defined by its abundant natural resources: its mountainous terrain contains reserves of <span class="fw-semibold text-warning">gold and other minerals</span>, while its fertile land sustains a robust agricultural sector specializing in coconut, rice, and the high-quality <span class="fw-semibold text-success">queen pineapple</span>. Labo’s enduring legacy is that of a resilient community enriched by both its historical struggles and its natural wealth.
							</p>
							<p class="text-end" style="font-size: 12px; "><a href="index.php/category/about/facts-and-figures">Continue Reading...</a></p>
						</div>

					
					</div>

				</div>

			</div>
		</div><!-- end content -->

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

	</div>
</div>


<?php govph_displayoptions('govph_panel_bottom'); ?>

<?php get_footer(); ?>