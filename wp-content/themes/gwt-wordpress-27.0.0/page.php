<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GWT
 * @since Government Website Template 2.0
 * eol-50
 */

get_header();
include_once('inc/banner.php');
?>
<style>
	@import url('https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&family=Carter+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

	#one {
		padding: 20px;
		border: 1px solid #00B518;
		border-radius: 16px;
		/* background-color: #00B518; */
		/* color:white; */
		/* text-align: center; */
	}

	.ninja-forms-field {
		/* 1. Reset/Base styles */
		display: block;
		/* Ensure it takes full width of its container */
		width: 100%;
		padding: 12px 16px;
		/* Comfortable padding inside the field */
		line-height: 1.5;
		/* Good line height for readability */
		font-size: 1rem;
		font-family: inherit;
		color: #333;
		background-color: #fff;

		/* 2. Border and Corners */
		border: 1px solid #ccc;
		border-radius: 8px;
		/* Slightly rounded corners */
		transition: all 0.2s ease-in-out;
		/* Smooth transitions for hover/focus */

		/* 3. Subtle Shadow for depth */
		box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
	}

	/* 4. Hover and Focus effects (most important part for interaction) */
	.ninja-forms-field:hover {
		border-color: #999;
	}

	.ninja-forms-field:focus {
		color: #000;
		background-color: #fff;
		border-color: #0d6efd;
		/* Use a primary blue color for focus */
		outline: 0;
		/* Create a strong visual indicator using box-shadow (like Bootstrap) */
		box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
	}

	/* Ensure placeholder text is slightly muted */
	.ninja-forms-field::placeholder {
		color: #999;
		opacity: 1;
		/* Override default opacity */
	}

	#nf-field-16 {
		background-color: #00B518;
		color: white;
		border: none;
		width: 100%;
		padding: 10px 20px;
		border-radius: 5px;
		cursor: pointer;
	}

	.nf-form-fields-required,
	#nf-form-title-4 {
		display: none;
	}

	.contact-form-header {
		text-align: center;
		/* Center the entire block */
		padding: 20px;
		font-family: 'Georgia', serif;
		/* Use a classic, serif font similar to the image */
	}

	.contact-form-header h1 {
		color: #2e5428;
		/* Darker green color */
		font-size: 30px;
		font-weight: bold;
		/* The text appears bold */
		letter-spacing: 2px;
		/* Slight spacing to match the image */
		margin-bottom: 5px;
		/* Adjust spacing between text and divider */
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

	.bgSocial {
		background-color: #15477aff;
		padding: 10px;
		border-radius: 8px;
		margin-right: 30px;
	}

	.social-buttons-container {
		text-align: center;
		margin-top: 30px;
		/* Space from the header */
		display: flex;
		justify-content: center;
		/* Center the buttons */
		gap: 15px;
		/* Space between buttons */
		flex-wrap: wrap;
		/* Allow buttons to wrap on smaller screens */
	}

	.social-button {
		display: flex;
		justify-content: center;
		align-items: center;
		width: 50px;
		/* Width for circular button */
		height: 50px;
		/* Height for circular button */
		border-radius: 50%;
		/* Makes it a circle */
		background-color: #00B518;
		/* Base color provided */
		color: #fff;
		/* White icon color */
		font-size: 24px;
		/* Size of the social icon */
		text-decoration: none;
		/* Remove underline from links */
		transition: background-color 0.3s ease, transform 0.3s ease;
		/* Smooth hover effects */
	}

	.social-button:hover {
		background-color: #008f13;
		/* Slightly darker green on hover */
		transform: translateY(-3px);
		/* Slight lift effect on hover */
	}

	/* Optional: Individual button colors if you want them */
	.social-button.facebook {
		/* background-color: #3b5998; */
	}

	.social-button.twitter {
		/* background-color: #1da1f2; */
	}

	.social-button.instagram {
		/* background-color: #e4405f; */
		/* You might use a gradient for Instagram's true brand color */
		/* background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); */
	}

	.social-button.tiktok {
		/* background-color: #000000; */
	}



	.headTitle {
		font-family: "Carter One", system-ui;
		font-weight: 400;
		font-style: normal;
	}

	.comma {
		color: #000;
	}

	.title {
		padding-top: 10px;
		font-style: italic;
	}

	.mayor {
		background: url(<?php echo get_template_directory_uri() . '/images/jojo.jpg' ?>);
		color: #fff;
		width: 100%;
		text-align: center;
		text-transform: uppercase;
		font-weight: bold;
		background-size: cover;
		/* background-position-y: 0px; */
		display: flex;
		align-items: center;
		justify-content: center;
		height: 180px;
		background-repeat: no-repeat;
		position: relative;

		/* background-color: #000000; */
	}

	.bgArticle {
		background: url(<?php echo get_template_directory_uri() . '/images/lgu_icon.png' ?>);
		background-size: 600px;
		background-repeat: no-repeat;
		background-position-y: 0px;
		background-position-x: 500px;
		opacity: 0.2;
		width: 100%;
		height: 400px;
		position: absolute;
	}

	.greenLine {
		width: 150px;
		height: 4px;
		background-color: #008f13;
		border-radius: 50px;
	}

	.htitle {
		font-size: 50px;
	}

	.tagline {
		font-family: "Carter One", system-ui;
		font-weight: 400;
		font-style: normal;
		display: flex;
		gap: 10px;
		color: #FFF;
		font-size: 30px;
		justify-content: center;

	}

	.qoute {
		font-size: 1em;
	}

	@media only screen and (max-width: 600px) {
		.htitle {
			font-size: 30px;
		}

		.tagline {
			font-size: 15px;
			gap: 2px;
		}

		.headTitle {
			font-size: 20px;
		}
	}

	@media only screen and (min-width: 600px) {
		.htitle {
			font-size: 50px;
		}

		.tagline {
			font-size: 30px;
		}

		.headTitle {
			font-size: 30px;
		}
	}

	@media only screen and (min-width: 768px) {
		.htitle {
			font-size: 50px;
		}

		.tagline {
			font-size: 30px;
		}

		.headTitle {
			font-size: 50px;
		}
	}

	/* If you uncomment individual colors, make sure to adjust hover effects */
	/*
.social-button.facebook:hover { background-color: #2d4373; }
.social-button.twitter:hover { background-color: #0f8ee0; }
.social-button.instagram:hover { filter: brightness(0.9); }
.social-button.tiktok:hover { background-color: #333333; }
*/
</style>
<?php govph_displayoptions('govph_panel_top'); ?>

<div id="main-content" class="container-main p-0 pb-5" role="document">
	<div>
		<?php $val = get_the_title();
		if ($val == "CONTACT US") {
			$val = "contact";
		}
		if ($val == "LABO MUNICIPAL HYMN"): ?>

			<div class="container-fluid p-0 px-4 d-flex justify-content-center align-items-center">
				<iframe width="1689" height="640" src="https://www.youtube.com/embed/_GWW2aVXeCw?list=RD_GWW2aVXeCw" title="Sulong Labo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen ></iframe>
			</div>
		<?php elseif ($val == "MAYORS PROFILE"): ?>
			<div class="container-fluid p-0">
				<header class="mayor" style="position: relative; overflow: hidden;">
					<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,181,24,0.7); z-index: 1;"></div>

					<div class="container-fluid headline p-0 m-0 d-flex flex-column justify-content-center align-items-center" style="position: relative; z-index: 2;">
						<div class="container-fluid tagline">
							<p class=" p-0 m-0 ">" </p>
							<p class=" p-0 m-0 title">my <span class="text-dark htitle">S</span>ervice. your <span class="text-dark htitle">H</span>elp. our <span class="text-dark htitle">F</span>uture.</p>
							<p class=" p-0 m-0 "> "</p>
							</p>

						</div>
						<p class="p-0 m-0 text-white qoute">- Hon. Severino H. Francisco</p>
					</div>
				</header>

				<div class="container-fluid pt-3 d-flex flex-column flex-sm-row">
					<div class="container col-12 col-sm-3 pt-5 ">
						<img src="<?php echo get_template_directory_uri() . '/images/profile.png' ?>" alt="">
					</div>
					<div class="container ps-0 ps-sm-5 pt-0 pt-sm-5 mt-5 col-12 col-sm-8">
						<div class="bgArticle"></div>
						<div class="d-flex flex-start flex-column pb-3">
							<p class="headTitle p-0 m-0">Mayor's Corner</p>
							<div class="greenLine"></div>
						</div>
						<article class="px-4" style="text-align:justify; border-right:#00B518 2px solid;">
							&emsp; Labo is a first-class municipality in Camarines Norte. It is rich in culture and beautiful sceneries. It was named after the miscommunication of two languages. Labo is blessed with natural resources, rich harvest and people. As a firs-class municipality, we offer exciting adventures. Experience and reward yourself with the beautiful nature in different waterfalls. Go on a long journey and enjoy the panoramic view of the 3 mountains in Labo. Treverse in rivers and caves and visit some historical places that made a big impact in our history. Dream… Explore… Discover the beauty of our town. Again, with the warmest of hearts and the best intentions, we welcome you!
						</article>
						<div class="container-fluid d-flex flex-column justify-content-end pt-3">
							<h3 class="p-0 m-0 text-end">Hon. Severino H. Francisco Jr.</h3>
							<p class="p-0 m-0 text-end">Municipal Mayor</p>
						</div>
					</div>
				</div>

			</div>
		<?php elseif ($val !== "contact") : 
			if($val =="MUNICIPAL OFFICIAL AND DEPARTMENT HEAD" || $val =="LEGISLATIVE"){?>
			<style>
				.bgko{
					background: url(<?= get_template_directory_uri().'/images/officer.jpg'?>);
					background-size: cover;
				}
			</style>
				<div id="content" class="container-fluid px-5 bgko" role="main">

			<?php } else{
			?>
			<div id="content" class="<?php govph_displayoptions('govph_content_position'); ?>columns" role="main">
			
			
				<?php
			}
				while (have_posts()) : the_post();
					
					get_template_part('template-parts/content', 'page');

				endwhile; //end of the loop 
				?>
			</div><!-- end content -->
		<?php else : ?>
			<div id="content" class="container-fluid px-3 d-flex flex-column flex-md-row" role="main">
				<div class="container ">
					<div class="container">
						<div class="contact-form-header">
							<h1>CONTACT FORM</h1>
							<div class="divider">
								<span class="divider-icon">i</span>
							</div>
						</div>
					</div>
					<div id="one">
						<?php
						while (have_posts()) : the_post();

							get_template_part('template-parts/content', 'page');

						endwhile; //end of the loop 
						?>
					</div>
				</div>
				<div class="container">
					<div class="container ms-0 ms-md-5 px-0 px-md-5">
						<div class="contact-form-header ps-0">
							<h1>SOCIALS</h1>
							<div class="divider">
								<span class="divider-icon"><i class="bi bi-globe2"></i></span>
							</div>
							<div class="social-buttons-container">
								<a href="https://facebook.com" target="_blank" class="social-button facebook">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a href="https://twitter.com" target="_blank" class="social-button twitter">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="https://instagram.com" target="_blank" class="social-button instagram">
									<i class="fab fa-instagram"></i>
								</a>
								<a href="https://tiktok.com" target="_blank" class="social-button tiktok">
									<i class="fab fa-tiktok"></i>
								</a>
							</div>
						</div>
						<hr>
						<div class="contact-form-header">
							<h1>EMERGENCY</h1>
							<div class="divider">
								<span class="divider-icon"><i class="bi bi-telephone-fill"></i></span>
							</div>
						</div>
						<ul class="d-flex flex-column gap-3">
							<li class="d-flex align-items-center mb-2">
								<img src="<?php echo get_template_directory_uri() . '/images/lgu_icon.png' ?>" style="width: 60px;" alt="" />
								<ul style="font-size: 18px; font-weight: bold; list-style-type: none; padding-left: 0;">
									<h3 class="p-0 m-0" style="color:#00B518;">Labo Camarines Norte</h3>
									<li class="ps-3">Smart: (054) 501-0025</li>
									<li class="ps-3">Globe: (054) 501-0030</li>

								</ul>

							</li>
							<li class="d-flex align-items-center mb-2">
								<img src="<?php echo get_template_directory_uri() . '/images/mddrm.png' ?>" style="width: 60px;" alt="" />
								<ul style="font-size: 18px; font-weight: bold; list-style-type: none; padding-left: 0;">
									<h3 class="p-0 m-0" style="color:#00B518;">Municipal Disaster Risk Reduction and Management</h3>
									<li class="ps-3">Smart: (054) 501-0025</li>
									<li class="ps-3">Globe: (054) 501-0030</li>


								</ul>

							</li>
							<li class="d-flex align-items-center mb-2">
								<img src="<?php echo get_template_directory_uri() . '/images/ldh.png' ?>" style="width: 60px;" alt="" />
								<ul style="font-size: 18px; font-weight: bold; list-style-type: none; padding-left: 0;">
									<h3 class="p-0 m-0" style="color:#00B518;">Labo District Hospital</h3>
									<li class="ps-3">Smart: (054) 501-0025</li>
									<li class="ps-3">Globe: (054) 501-0030</li>


								</ul>

							</li>
							<li class="d-flex align-items-center mb-2">
								<img src="<?php echo get_template_directory_uri() . '/images/pnp.png' ?>" style="width: 60px;" alt="" />
								<ul style="font-size: 18px; font-weight: bold; list-style-type: none; padding-left: 0;">
									<h3 class="p-0 m-0" style="color:#00B518;">Labo Municipal Police Station</h3>
									<li class="ps-3">Smart: (054) 501-0025</li>
									<li class="ps-3">Globe: (054) 501-0030</li>


								</ul>

							</li>
							<li class="d-flex align-items-center mb-2">
								<img src="<?php echo get_template_directory_uri() . '/images/bfp.png' ?>" style="width: 60px;" alt="" />
								<ul style="font-size: 18px; font-weight: bold; list-style-type: none; padding-left: 0;">
									<h3 class="p-0 m-0" style="color:#00B518;">Bureau of Fire Protection</h3>
									<li class="ps-3">Smart: (054) 501-0025</li>
									<li class="ps-3">Globe: (054) 501-0030</li>

								</ul>

							</li>
						</ul>


					</div>

				</div>
			</div><!-- end 
			content -->
		<?php endif; ?>


		<?php
		$val = get_the_title();
		if ($val == "CONTACT US") {
			$val = "contact";
		} else if ($val == "LABO MUNICIPAL HYMN") {
			$val = "hymn";
		}
		
		if ($val !== "contact" && $val !== "hymn" && $val !="MUNICIPAL OFFICIAL AND DEPARTMENT HEAD" && $val !="LEGISLATIVE") {
			if (is_active_sidebar('left-sidebar')):
				govph_displayoptions('govph_sidebar_left');
			endif;
		}
		?>
		<?php
		if (is_active_sidebar('right-sidebar')):
			govph_displayoptions('govph_sidebar_right');
		endif;
		?>

	</div><!-- end row -->
</div><!-- end main -->

<?php get_footer(); ?>