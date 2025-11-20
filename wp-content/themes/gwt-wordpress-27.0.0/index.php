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
	.greens{
    width: 100%;
    height: 200px;
    border-radius: 10px;
    background-color: #00B518;
    position: absolute;
    top: 0; left: 0;               /* cover the card */
    opacity: 0;                    /* invisible */
    visibility: hidden;            /* not in tab order */
    cursor: pointer;
    transition: opacity 0.55s ease, visibility 0.55s ease;   /* <-- transition here */
    display: flex;                 /* keep flex so children layout correctly */
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 1rem;
    color: white;
}

/* 2. Show it on hover */
.t1:hover .target1,
.t2:hover .target2,
.t3:hover .target3{
    opacity: 1;
    visibility: visible;
    transition: opacity 0.55s ease, visibility 0s 0s;   /* instant visibility after opacity */
}
</style>
<?php govph_displayoptions('govph_panel_top'); ?>

<div class="container-main" role="document">

	<div id="main-content">
		<div id="content" class="<?php govph_displayoptions('govph_content_position'); ?>columns" role="main">
			<h1 class="border border-top-0 border-end-0 border-bottom-0 border-2 border-success ps-3">WELCOME!</h1>
			<div class="container-fluid">
				<video class="img-fluid rounded pt-3" src="<?= get_template_directory_uri() . '/images/video.mp4' ?>" autoplay muted loop> </video>
				<div class="container-fluid text-secondary text-end p-0 m-0" style="font-size:10px;">Video Courtesy: Camarines Norte Provincial Information Office</div>
			</div>
			<div class="pt-5 container-fluid d-flex flex-column flex-sm-row gap-3">

				<div class="container-fluid bg-white shadow-lg rounded-4 p-3 p-md-5 mx-auto">

					<!-- Border top styling -->
					<div class=" pt-3 d-flex flex-column flex-md-row" style="border-top: #00B518 4px solid;">
						<div class="col-12 col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/images/labo.jpg" class="img-thumbnail " alt="">

							<!-- Header -->
							<header class="mb-4 border-bottom pb-3">
								<h1 class="h3 fw-bold text-dark mb-1">Brief History of Labo, Camarines Norte</h1>
								<p class="text-secondary small">A historical overview of the Bicol municipality.</p>
							</header>

						</div>
						<!-- Historical Text Content -->
						<div class="text-body lh-lg col-12 col-md-6 ps-3">
							<p class="fs-10 p-0 m-0" style="height: 310px; text-overflow: ellipsis; overflow-y: hidden;">
								The Municipality of Labo, officially founded on September 8, 1800, is a pivotal historical and economic hub within Camarines Norte. Its history began during the Spanish colonial era and the town was recognized as a foundational municipality when the province was established in 1829. Labo holds significance in the nation's revolutionary history as the birthplace of <span class="fw-bolder" style="color:#00B518;">General Vicente R. Lukban</span>, a revered figure of the Philippine-American War. Economically, the town is defined by its abundant natural resources: its mountainous terrain contains reserves of <span class="fw-semibold text-warning">gold and other minerals</span>, while its fertile land sustains a robust agricultural sector specializing in coconut, rice, and the high-quality <span class="fw-semibold text-success">queen pineapple</span>. Labo’s enduring legacy is that of a resilient community enriched by both its historical struggles and its natural wealth.
							</p>
							<p class="text-end" style="font-size: 12px; "><a href="index.php/category/about/facts-and-figures">Continue Reading...</a></p>
						</div>


					</div>

				</div>

			</div>
			<!-- ADD THIS ENTIRE BLOCK HERE -->
			<div class="pt-5 container-fluid">
				<h2 class="border border-top-0 border-end-0 border-bottom-0 border-2 border-success ps-3 mb-4">Disclosure Posts</h2>

				<div class="row g-4">
					<?php
					// QUERY FOR DISCLOSURE CATEGORY POSTS
					$disclosure_posts = new WP_Query(array(
						'category_name' => 'disclosure',  // Your slug
						'posts_per_page' => 3,           // Show 6 posts
						'post_status' => 'publish'
					));

					if ($disclosure_posts->have_posts()) :
						while ($disclosure_posts->have_posts()) : $disclosure_posts->the_post();
					?>
							<style>
								#disclosure_<?php echo get_the_ID(); ?> {
									background-color: white;
									transition: 0.2s;
								}

								.link1 {
									color: black;
									transition: 1.5s;
									background: transparent;
								}

								#disclosure_<?php echo get_the_ID(); ?>:hover,
								#disclosure_<?php echo get_the_ID(); ?>:hover div h5 .link1 {
									/* background-color: #00B518; */
									color: #00B518;
								}
							</style>
							<div class="col-md-6 col-lg-4">
								<div id="disclosure_<?= get_the_ID();; ?>" class=" card h-100 shadow-sm border-0 boxs rounded-4 overflow-hidden">
									<?php if (has_post_thumbnail()) : ?>
										<img src="<?php the_post_thumbnail_url('medium'); ?>"
											class="card-img-top"
											alt="<?php the_title(); ?>"
											style="height: 200px; object-fit: cover;">
									<?php endif; ?>

									<div class="card-body d-flex flex-column p-4">
										<h5 class="card-title fw-bold  mb-2">
											<a href="<?php the_permalink(); ?>" class="text-decoration-none link1"><?php the_title(); ?></a>
										</h5>
										<a href="<?php the_permalink(); ?>" class="card-text  flex-grow-1" style="font-size: 14px;">
											<?php echo wp_trim_words(get_the_excerpt(), 15); ?>
										</a>
										<div class="d-flex justify-content-between align-items-end mt-auto">
											<small class="text-muted">Date Posted: <?php echo get_the_date('M j, Y'); ?></small>
											<!-- <a href="<?php the_permalink(); ?>" class="btn btn-outline-success btn-sm">Read More</a> -->
										</div>
									</div>
								</div>

							</div>
						<?php
						endwhile;
						wp_reset_postdata();
					else :
						?>
						<div class="col-12">
							<p class="text-center text-muted">No disclosure posts found.</p>
						</div>
					<?php endif; ?>
				</div>
				<div class="container-fluid text-center">
					<div class="mx-5 mt-3" style="width: 90%; height:2px; background: #00B518; border-radius: 20px;"></div>
				</div>
			</div>
			<!-- END OF BLOCK -->
			<!-- ADD THIS ENTIRE BLOCK HERE -->
			<div class="pt-5 container-fluid">
				<h2 class="border border-top-0 border-end-0 border-bottom-0 border-2 border-success ps-3 mb-4">Transparency</h2>

				<div class="row g-4">
					<?php
					// QUERY FOR DISCLOSURE CATEGORY POSTS
					$disclosure_posts = new WP_Query(array(
						'category_name' => 'executive-order,memorandum-order',  // Your slug
						'posts_per_page' => 3,           // Show 6 posts
						'post_status' => 'publish'
					));

					if ($disclosure_posts->have_posts()) :
						while ($disclosure_posts->have_posts()) : $disclosure_posts->the_post();
					?>
							<style>
								#transparency_<?php echo get_the_ID(); ?> {
									background-color: white;
									transition: 0.2s;
								}

								.link1 {
									color: black;
									transition: 1.5s;
									background: transparent;
								}

								#transparency_<?php echo get_the_ID(); ?>:hover,
								#transparency_<?php echo get_the_ID(); ?>:hover div h5 .link1 {
									/* background-color: #00B518; */
									color: #00B518;
								}
							</style>
							<div class="col-md-6 col-lg-4">
								<div id="transparency_<?php echo get_the_ID(); ?>" class=" card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
									<?php if (has_post_thumbnail()) : ?>
										<!-- <img src="<?php the_post_thumbnail_url('medium'); ?>"
												class="card-img-top"
												alt="<?php the_title(); ?>"
												style="height: 200px; object-fit: cover;"> -->
									<?php endif; ?>

									<div class="card-body d-flex flex-column p-4">
										<h5 class="card-title fw-bold text-dark mb-2">
											<a href="<?php the_permalink(); ?>" class="text-decoration-none link1"><?php the_title(); ?></a>
										</h5>
										<a href="<?php the_permalink(); ?>" class="card-text text-secondary flex-grow-1" style="font-size: 14px;">

										</a>
										<div class="d-flex justify-content-between align-items-end mt-auto">
											<small class="text-muted">Date Posted: <?php echo get_the_date('M j, Y'); ?></small>
											<!-- <a href="<?php the_permalink(); ?>" class="btn btn-outline-success btn-sm">Read More</a> -->
										</div>
									</div>
								</div>

							</div>
						<?php
						endwhile;
						wp_reset_postdata();
					else :
						?>
						<div class="col-12">
							<p class="text-center text-muted">No Transparency posts found.</p>
						</div>
					<?php endif; ?>
				</div>
				<div class="container-fluid text-center">
					<div class="mx-5 mt-3" style="width: 90%; height:2px; background: #00B518; border-radius: 20px;"></div>
				</div>
			</div>
			<div class="pt-5 container-fluid">
				<h2 class="border border-top-0 border-end-0 border-bottom-0 border-2 border-success ps-3 mb-4">Bids & Awards</h2>

				<div class="row g-4">
					<?php
					// QUERY FOR DISCLOSURE CATEGORY POSTS
					$disclosure_posts = new WP_Query(array(
						'category_name' => 'bids-and-awards',  // Your slug
						'posts_per_page' => 3,           // Show 6 posts
						'post_status' => 'publish'
					));

					if ($disclosure_posts->have_posts()) :
						while ($disclosure_posts->have_posts()) : $disclosure_posts->the_post();
					?>
							<style>
								#bids_<?php echo get_the_ID(); ?> {
									background-color: white;
									transition: 0.2s;
								}

								.link1 {
									color: black;
									transition: 1.5s;
									background: transparent;
								}

								#bids_<?php echo get_the_ID(); ?>:hover,
								#bids_<?php echo get_the_ID(); ?>:hover div h5 .link1 {
									/* background-color: #00B518; */
									color: #00B518;
								}
							</style>
							<div class="col-md-6 col-lg-4">
								<div id="bids_<?php echo get_the_ID(); ?>" class=" card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
									<?php if (has_post_thumbnail()) : ?>
										<!-- <img src="<?php the_post_thumbnail_url('medium'); ?>"
												class="card-img-top"
												alt="<?php the_title(); ?>"
												style="height: 200px; object-fit: cover;"> -->
									<?php endif; ?>

									<div class="card-body d-flex flex-column p-4">
										<h5 class="card-title fw-bold text-dark mb-2">
											<a href="<?php the_permalink(); ?>" class="text-decoration-none link1"><?php the_title(); ?></a>
										</h5>
										<a href="<?php the_permalink(); ?>" class="card-text text-secondary flex-grow-1" style="font-size: 14px;">

										</a>
										<div class="d-flex justify-content-between align-items-end mt-auto">
											<small class="text-muted">Date Posted: <?php echo get_the_date('M j, Y'); ?></small>
											<!-- <a href="<?php the_permalink(); ?>" class="btn btn-outline-success btn-sm">Read More</a> -->
										</div>
									</div>
								</div>

							</div>
						<?php
						endwhile;
						wp_reset_postdata();
					else :
						?>
						<div class="col-12">
							<p class="text-center text-muted">No Bids and Awards posts found.</p>
						</div>
					<?php endif; ?>
				</div>
				<div class="container-fluid text-center">
					<div class="mx-5 mt-3" style="width: 90%; height:2px; background: #00B518; border-radius: 20px;"></div>
				</div>
			</div>
			<!-- ADD THIS ENTIRE BLOCK HERE -->
			<div class="pt-5 container-fluid">
				<h2 class="border border-top-0 border-end-0 border-bottom-0 border-2 border-success ps-3 mb-4">NEWS & ANNOUNCEMENTS</h2>

				<div class="row g-4">
					<?php
					// QUERY FOR DISCLOSURE CATEGORY POSTS
					$disclosure_posts = new WP_Query(array(
						'category_name' => 'news',  // Your slug
						'posts_per_page' => 3,           // Show 6 posts
						'post_status' => 'publish'
					));

					if ($disclosure_posts->have_posts()) :
						while ($disclosure_posts->have_posts()) : $disclosure_posts->the_post();
					?>
							<div class="col-md-6 col-lg-4">
								<div class="card h-100 shadow-sm border-0 bg-white rounded-4 overflow-hidden">
									<?php if (has_post_thumbnail()) : ?>
										<img src="<?php the_post_thumbnail_url('medium'); ?>"
											class="card-img-top"
											alt="<?php the_title(); ?>"
											style="height: 200px; object-fit: cover;">
									<?php endif; ?>

									<div class="card-body d-flex flex-column p-4">
										<h5 class="card-title fw-bold text-dark mb-2">
											<a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark"><?php the_title(); ?></a>
										</h5>
										<a href="<?php the_permalink(); ?>" class="card-text text-secondary flex-grow-1" style="font-size: 14px;">
											<?php echo wp_trim_words(get_the_excerpt(), 15); ?>
										</a>
										<div class="d-flex justify-content-between align-items-end mt-auto">
											<small class="text-muted">Date Posted: <?php echo get_the_date('M j, Y'); ?></small>
											<!-- <a href="<?php the_permalink(); ?>" class="btn btn-outline-success btn-sm">Read More</a> -->
										</div>
									</div>
								</div>

							</div>
						<?php
						endwhile;
						wp_reset_postdata();
					else :
						?>
						<div class="col-12">
							<p class="text-center text-muted">No News posts found.</p>
						</div>
					<?php endif; ?>
				</div>
				<div class="container-fluid text-center">
					<div class="mx-5 mt-3" style="width: 90%; height:2px; background: #00B518; border-radius: 20px;"></div>
				</div>
			</div>
			<!-- END OF BLOCK -->

			<!-- ADD THIS ENTIRE BLOCK HERE -->
			<div class="pt-5 container-fluid">
				<h2 class="border border-top-0 border-end-0 border-bottom-0 border-2 border-success ps-3 mb-4">TOURISM & ACTIVITY</h2>

				<div class="row g-4">
					<?php
					// QUERY FOR DISCLOSURE CATEGORY POSTS
					$disclosure_posts = new WP_Query(array(
						'category_name' => 'where-to-stay,restaurants,fun-and-adventure',  // Your slug
						'posts_per_page' => 3,           // Show 6 posts
						'post_status' => 'publish'
					));

					if ($disclosure_posts->have_posts()) :
						while ($disclosure_posts->have_posts()) : $disclosure_posts->the_post();
					?>
							<div class="col-md-6 col-lg-4">
								<div class="card h-100 shadow-sm border-0 bg-white rounded-4 overflow-hidden">
									<?php if (has_post_thumbnail()) : ?>
										<img src="<?php the_post_thumbnail_url('medium'); ?>"
											class="card-img-top"
											alt="<?php the_title(); ?>"
											style="height: 200px; object-fit: cover;">
									<?php endif; ?>

									<div class="card-body d-flex flex-column p-4">
										<h5 class="card-title fw-bold text-dark mb-2">
											<a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark"><?php the_title(); ?></a>
										</h5>
										<a href="<?php the_permalink(); ?>" class="card-text text-secondary flex-grow-1" style="font-size: 14px;">
											<?php echo wp_trim_words(get_the_excerpt(), 15); ?>
										</a>
										<div class="d-flex justify-content-between align-items-end mt-auto">
											<small class="text-muted">Date Posted: <?php echo get_the_date('M j, Y'); ?></small>
											<!-- <a href="<?php the_permalink(); ?>" class="btn btn-outline-success btn-sm">Read More</a> -->
										</div>
									</div>
								</div>

							</div>
						<?php
						endwhile;
						wp_reset_postdata();
					else :
						?>
						<div class="col-12">
							<p class="text-center text-muted">No Tourism found.</p>
						</div>
					<?php endif; ?>
				</div>
				<div class="container-fluid text-center">
					<div class="mx-5 mt-3" style="width: 90%; height:2px; background: #00B518; border-radius: 20px;"></div>
				</div>
			</div>
			<!-- END OF BLOCK -->
			<div class="pt-5 container-fluid">
				<h2 class="border border-top-0 border-end-0 border-bottom-0 border-2 border-success ps-3 mb-4">QUICK LINKS</h2>

				<div class="row gap-4 d-flex  justify-content-center align-items-center">
					<div style="height: 200px;" class="t1 quick-links d-flex gap-4 justify-content-center align-items-center p-3 card col-3 bg-white shadow rounded">
						<img style="width:50px; height:50px;" src="<?= get_template_directory_uri() . '/images/star.png' ?>" />
						<h2 class="text-center" style="color:#00B518;">BPLO PAGE</h2>
						<div class="target1 greens p-3 gap-3 text-white  flex-column justify-content-center align-items-center">
							<h4>Access the Business Permits and Licenses Office (BPLO)</h4>
							<a target="_blank" href="https://prod.ebpls.com/labocamarinesnorte/" class="btn btn-outline-light form-control">VIEW HERE</a>
						</div>
					</div>
					<div style="height: 200px;" class="t2 quick-links d-flex gap-4 justify-content-center align-items-center p-3 card col-3 bg-white shadow rounded">
						<img style="width:50px; height:50px;" src="<?= get_template_directory_uri() . '/images/bulb.png' ?>" />

						<h2 class="text-center" style="color:#00B518;">PROCUREMENT</h2>
						<div class="target2 greens p-3 gap-3 text-white  flex-column justify-content-center align-items-center">
							<h4>Access the BIDS AND AWARDS COMMITTEE</h4>
							<a target="_blank" href="<?= WP_HOME.'index.php/category/bids-and-awards'?>" class="btn btn-outline-light form-control">KNOW MORE</a>
						</div>
					</div>
					<div style="height: 200px;" class="t3 quick-links d-flex gap-4 justify-content-center align-items-center p-3 card col-3 bg-white shadow rounded">
						<img style="width:50px; height:50px;" src="<?= get_template_directory_uri() . '/images/building.png' ?>" />

						<h2 class="text-center" style="color:#00B518;">DEPARTMENT AND OFFICES</h2>
							<div class="target3 greens p-3 gap-3 text-white  flex-column justify-content-center align-items-center">
							<h4>Access all the Departments and Offices of Labo</h4>
							<a target="_blank" href="<?php echo WP_HOME.'index.php/category/about/department-and-offices/'?>" class="btn btn-outline-light form-control">VIEW HERE</a>
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