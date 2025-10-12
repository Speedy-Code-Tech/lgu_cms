<style>
	.orbit-caption {
		background: rgb(0, 181, 24);
		color: #fff;
		padding: 10px;
		position: absolute;
		bottom: 0;
		width: 100%;
		text-align: end;
		text-transform: uppercase;
		font-weight: bold;
	}

	.news {
		background: url(<?php echo get_template_directory_uri() . '/images/news.jpg' ?>);
		color: #fff;
		width: 100%;
		text-align: center;
		text-transform: uppercase;
		font-weight: bold;
		background-size: cover;
		background-position-y: 0px;
		display: flex;
		align-items: center;
		justify-content: center;
		height: 150px;
		background-size: contain;
		background-repeat: no-repeat;
	}

	.tourism {
		background: url(<?php echo get_template_directory_uri() . '/images/news.png' ?>);
		color: #fff;
		width: 100%;
		text-align: center;
		text-transform: uppercase;
		font-weight: bold;
		background-size: cover;
		background-position-y: 200px;
		display: flex;
		align-items: center;
		justify-content: center;
		height: 150px;

	}

	.contact {
		background: url(<?php echo get_template_directory_uri() . '/images/contact.jpg' ?>);
		color: #fff;
		width: 100%;
		text-align: center;
		text-transform: uppercase;
		font-weight: bold;
		background-size: cover;
		display: flex;
		align-items: center;
		justify-content: center;
		height: 150px;

	}
	.mayorsprofile {
	display: none;
	}

	@media only screen and (max-width: 600px) {
		.news {
			background-size: cover;
		}
	}

	@media only screen and (min-width: 600px) {
		.news {
			background-size: cover;
		}
	}

	@media only screen and (min-width: 768px) {
		.news {
			background-size: fill;
		}
	}
</style>

<?php
/*
 * eol-144
 */
if (is_home()) {
	$banner_class = 'large-12';
	$banner_2_class = '';
	$banner_3_class = '';
	if (is_active_sidebar('banner-section-1') && is_active_sidebar('banner-section-2')) {
		$banner_class = 'large-6 columns';
		$banner_2_class = 'large-3 columns';
		$banner_3_class = 'large-3 columns';
	} elseif (is_active_sidebar('banner-section-1') && !is_active_sidebar('banner-section-2')) {
		$banner_class = 'large-8 columns';
		$banner_2_class = 'large-4 columns';
	} elseif (!is_active_sidebar('banner-section-1') && is_active_sidebar('banner-section-2')) {
		$banner_class = 'large-8 columns';
		$banner_3_class = 'large-4 columns';
	}
	$banner_class .= ' hide-for-small-only';
}

$container_class = '';
if (!is_home()) {
	$container_class = 'banner-pads';
}
?>
<!-- banner -->
<div class="container-banner <?php echo $container_class; ?>">
	<?php govph_displayoptions('govph_slider_start'); ?>

	<?php if (is_home()): ?>
		<?php if ($banner_slider = efs_get_slider()): ?>
			<?php if (govph_displayoptions('govph_slider_full') == 'active'): ?>
				<div id="banner-slider" class="large-12 hide-for-small-only">
				<?php else: ?>
					<div id="banner-slider" class="<?php echo $banner_class ?>">
					<?php endif; ?>
					<?php echo $banner_slider ?>
					</div>
				<?php endif; ?>

				<?php if (is_active_sidebar('banner-section-1')): ?>
					<div id="banner-section-1" class="<?php echo $banner_2_class ?>">
						<?php do_action('before_sidebar'); ?>
						<?php dynamic_sidebar('banner-section-1') ?>
					</div>
				<?php endif; ?>

				<?php if (is_active_sidebar('banner-section-2')): ?>
					<div id="banner-section-2" class="<?php echo $banner_3_class ?>">
						<?php do_action('before_sidebar'); ?>
						<?php dynamic_sidebar('banner-section-2') ?>
					</div>
				<?php endif; ?>

			<?php else: ?>
				<?php if (is_404()): ?>
					<?php govph_displayoptions('govph_banner_title_start'); ?>
					<div class="large-9 columns container-main">
						<header>
							<h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'gwt_wp'); ?></h1>
						</header>
					</div>
					<?php govph_displayoptions('govph_banner_title_end'); ?>
				<?php elseif (is_search()): ?>
					<?php govph_displayoptions('govph_banner_title_start'); ?>
					<div class="large-9 columns container-main">
						<header>
							<h1 class="page-title"><?php printf(__('Search Results for: %s', 'gwt_wp'), '<span>' . get_search_query() . '</span>'); ?></h1>
						</header>
					</div>
					<?php govph_displayoptions('govph_banner_title_end'); ?>
				<?php elseif (is_archive()): ?>
					<?php govph_displayoptions('govph_banner_title_start'); ?>
					<div class="large-9 columns container-main p-0" style="width:100vw;">
						<?php
						$val = "";
						$titles = single_cat_title('', false);

						if ($titles == "TOURISM" || $titles == "WHERE TO STAY" || $titles == "THINGS TO DO$titles == " || $titles == "RESTAURANTS" || $titles == "FUN AND ADVENTURE" || $titles == "LABO TOURISM AVP")
							$titles = "TOURISM";
					
						switch ($titles) {
							case "TOURISM":
								$val = "tourism";
								break;
							case "NEWS":
								$val = "news";
								break;
							case "CONTACT US":
								$val = "contact";
								break;

							default:
								$val = "myHead";
						}
						?>

					
							<header class="<?php echo esc_attr($val); ?>" style="position: relative; overflow: hidden;">
								<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,181,24,0.7); z-index: 1;"></div>
								<h1 class="page-title text-center" style="position: relative; z-index: 2;">

									<?php
									if (is_category()) :

										$dat = single_cat_title('', false);

										if ($dat == "HOME") {
											echo "<script>location.href = '/LGU';</script>";
										} else if (str_word_count($dat) <= 2) {
											echo $dat;
										} else {

											echo $dat;
										}

									elseif (is_tag()) : single_tag_title();
									elseif (is_author()) :
										/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							 */
										the_post();
										printf(__('Author: %s', 'gwt_wp'), '<span class="vcard">' . get_the_author() . '</span>');
										/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
										rewind_posts();

									elseif (is_day()) : printf(__('Day: %s', 'gwt_wp'), '<span>' . get_the_date() . '</span>');
									elseif (is_month()) : printf(__('Month: %s', 'gwt_wp'), '<span>' . get_the_date('F Y') . '</span>');
									elseif (is_year()) : printf(__('Year: %s', 'gwt_wp'), '<span>' . get_the_date('Y') . '</span>');
									elseif (is_tax('post_format', 'post-format-aside')) : _e('Asides', 'gwt_wp');
									elseif (is_tax('post_format', 'post-format-image')) : _e('Images', 'gwt_wp');
									elseif (is_tax('post_format', 'post-format-video')) : _e('Videos', 'gwt_wp');
									elseif (is_tax('post_format', 'post-format-quote')) : _e('Quotes', 'gwt_wp');
									elseif (is_tax('post_format', 'post-format-link')) : _e('Links', 'gwt_wp');
									else : _e('Archives', 'gwt_wp');
									endif;
									?>
								</h1>
								<?php
								$val = get_the_title();

								// Show an optional term description.
								$term_description = term_description();
								if (! empty($term_description)) : printf('<div class="taxonomy-description">%s</div>', $term_description);
								endif;
								?>

							</header>
					
					</div>
					<?php govph_displayoptions('govph_banner_title_end'); ?>
				<?php else: ?>
					<?php govph_displayoptions('govph_banner_title_start'); ?>
					<div class="container-fluid p-0 m-0 columns container-main">
						<?php

						$val = get_the_title();
						if ($val == "CONTACT US") {
							$val = "contact";
						}
						if(get_the_title() =="CONTACT US"){
							$val = "contact";
						}else if(get_the_title() =="MAYORS PROFILE"){
							$val = "mayorsprofile";
						}
						else if (get_the_title() !== "NEWS") {
							$val = "news";
						}
						if (is_page()):
							
						?>

							<header class="<?= esc_attr($val); ?>" style="position: relative; overflow: hidden;">
								<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,181,24,0.7); z-index: 1;"></div>
								<h1 class="page-title text-center" style="position: relative; z-index: 2;">

									<?php
									$categories = get_the_category();
									$cat_name = !empty($categories) ? $categories[0]->name : '';
									if ($cat_name == ''):
										$cat_name = get_the_title();
										echo esc_html(get_the_title());
									endif;
									?>
									<?php while (have_posts()) : the_post(); ?>
										<!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
									<?php endwhile; // end of the loop. 
									?>
								</h1>
							</header>
						<?php
						endif; ?>
					</div>
					<?php govph_displayoptions('govph_banner_title_end'); ?>
				<?php endif ?>
			<?php endif ?>

			<?php govph_displayoptions('govph_slider_end'); ?>
				</div>

				<div id="auxiliary" class="show-for-large">
					<div class="row">
						<div class="small-12 large-12 columns toplayer">
							<nav id="aux-main" class="nomargin show-for-medium-up" data-dropdown-content>
								<ul class="dropdown menu" data-dropdown-menu>
									<?php wp_nav_menu(['theme_location'  => 'aux_nav', 'items_wrap' => '%3$s', 'container' => false, 'fallback_cb' => false, 'walker' => new Topbar_Nav_Menu()]); ?>
								</ul>
							</nav>
						</div>
					</div>
				</div>

				<?php include_once('breadcrumbs.php'); ?>