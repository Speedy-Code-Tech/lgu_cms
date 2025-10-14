<?php

/**
 * The Template for displaying all single posts.
 *
 * @package GWT
 * @since Government Website Template 2.0
 * eol-44
 */

get_header();
include_once('inc/banner.php');
?>
<?php govph_displayoptions('govph_panel_top'); ?>
<style>
	iframe {
		width: 100%;
	}
</style>
<div id="main-content" class="container-main jes" role="document">
	<div class="mainBg1"></div>
	<div class="row">
		<?php
		$dat = single_cat_title('', false);

		if ($dat == "HOME"): ?>
			<div id="content" class="<?php govph_displayoptions('govph_content_position'); ?>columns" role="main">
			<?php else: ?>
				<div id="content" class="container-fluid columns" role="main">
				<?php endif ?>
				<?php
				while (have_posts()) :
					the_post();
					$categories = get_the_category();
					$cat_name = !empty($categories) ? $categories[0]->name : '';
					if ($cat_name == 'NEWS'):
				?>
						<div class="container-fluid d-flex flex-column justify-content-center align-items-center mb-4">
							<?php if (get_the_post_thumbnail_url()) { ?>
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="rounded" style="width: 500px;" alt="<?php the_title_attribute(); ?>">

							<?php } ?>

							<p class="h4  px-1 px-sm-5 mx-1 mx-sm-5 text-center mt-3 fw-bold" style="color: #00B518;"><?php the_title(); ?></p>
							<p class="p-0 m-0 text-secondary">Author: <?= get_the_author(); ?></p>
							<p class="p-0 m-0 text-secondary" style="text-align:justify; font-size: 12px;">Date Posted: <?= get_the_date(); ?></p>
						</div>
					<?php
						get_template_part('template-parts/content', 'single');
					else: ?>

						<div class="container-fluid d-flex flex-column flex-md-row gap-5">
							<div class="flex-shrink-0">
								<?php if (get_the_post_thumbnail_url()) { ?>
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="rounded" style="width: 500px;" alt="<?php the_title_attribute(); ?>">

								<?php } ?>
							</div>
							<div class="container-fluid">
								<div class="headers d-flex flex-column justify-content-start align-items-start mb-4">
									<h2 class="p-0 m-0" style="color:#00B518; font-weight: bold; font-size:2em;"><?= the_title(); ?></h2>
									<div class="lines mt-2" style="width:150px; height:4px; background:#4956FF; border-radius: 20px;"></div>
								</div>

								<?php if (is_numeric(get_the_title())) { ?>
									<style>
										.wp-block-file>a {
											font-size: 20px;
											padding-left: 20px;
											;
											/* color: #373737; */
										}

										.wp-block-file>a:hover {
											color: #00B518;
											font-weight: bold;
										}

										.wp-block-file>a::before {
											content: " - ";
										}
									</style>
								<?php } ?>
								<div class="container-fluid pe-3" style="text-align:justify; border-right: #00B518 2px solid;">
									<?php
									get_template_part('template-parts/content', 'single');
									?>
								</div>
							</div>
						</div>
				<?php


					endif;
				endwhile; //end of the loop 
				?>
				</div><!-- end content -->

				<?php
				$dat = single_cat_title('', false);
				if ($dat == "NEWS"): ?>
					<?php
					if (is_active_sidebar('left-sidebar')) {
						govph_displayoptions('govph_sidebar_left');
					}
					?>
				<?php
					if (is_active_sidebar('right-sidebar')) {
						govph_displayoptions('govph_sidebar_right');
					}
				endif;
				?>

			</div><!-- end row -->
	</div><!-- end main -->

	<?php govph_displayoptions('govph_panel_bottom'); ?>

	<?php get_footer(); ?>