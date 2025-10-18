<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "main" div.
 *
 * @package GWT
 * @since Government Website Template 2.0
 * eol-264
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if (is_singular() && pings_open(get_queried_object())) : ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php endif; ?>
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">
	<link rel="stylesheet" href="//cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<?php wp_head(); ?>

	<style <?php the_tags(); ?>>
		@import url('https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
		
		.container-main a,
		.container-main a:active,
		.container-main a:visited,
		.anchor a,
		.anchor a:active,
		.anchor a:visited {
			<?php govph_displayoptions('govph_anchorcolor'); ?>
		}

		.container-main a:focus,
		.container-main a:hover,
		.anchor a:focus,
		.anchor a:hover {
			<?php govph_displayoptions('govph_anchorcolor_hover'); ?>
		}

		div .container-masthead {
			<?php govph_displayoptions('govph_header_setting'); ?>
		}

		h1.logo a {
			<?php govph_displayoptions('govph_logo_setting'); ?>
		}

		div.container-banner {
			<?php govph_displayoptions('govph_slider_setting'); ?>
		}

		.banner-content,
		.orbit .orbit-bullets {
			<?php govph_displayoptions('govph_slider_fullwidth'); ?>
		}

		#pst-container {
			<?php govph_displayoptions('govph_custom_pst'); ?>
		}

		#panel-top {
			<?php govph_displayoptions('govph_custom_panel_top'); ?>
		}

		#panel-bottom {
			<?php govph_displayoptions('govph_custom_panel_bottom'); ?>
		}

		#sidebar-left .widget,
		#sidebar-right .widget,
		.callout.secondary {
			<?php govph_displayoptions('govph_widget_setting'); ?>
		}

		.container-main .entry-title a {
			<?php govph_displayoptions('govph_headings_setting'); ?>
		}

		.container-banner .entry-title {
			<?php govph_displayoptions('govph_inner_headings_setting'); ?>
		}

		#footer {
			<?php govph_displayoptions('govph_custom_footer_background_color'); ?>
		}

		#sidebar-left {}

		.container-masthead {
			background-color: #00B518;
			/* padding: 10px 0px; */
			min-height: 30px;
			height: 100%;
			height: 140px;
			background: url(<?php echo get_template_directory_uri(); ?>/images/header_bg.jpg);
			background-position-x: right;
			background-position-y: center;
		}

		.mainBg {
			margin: 0 0;
			width: 100%;
			min-height: 30px;
			height: 100%;
			height: 140px;
			position: absolute;
			background-color: transparent;
			background-image: linear-gradient(50deg, #FFFFFF 48%, #FFFFFF00 100%);
			opacity: 1;
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.icon {
			z-index: 99;
			max-height: 50px;
			height: 100%;
			max-height: 120px;
			margin-left: 20px;
			max-width: 50px;
			width: 100%;
			max-width: 120px;
			margin-top: 10px;
		}

		.texts {
			z-index: 99;
			height: 100%;
			justify-content: center;
		}

		@media only screen and (max-width: 600px) {
			.icon {
				width: 80px;
				height: 80px;
				margin-top: 30px;
			}

			.h1s,
			.h3s {
				font-size: .7em;
				font-family: "BBH Sans Bogle", sans-serif;
				font-weight: 400;
				font-style: normal;
			}

			.h2s {
				font-size: 1em;
				font-family: "BBH Sans Bogle", sans-serif;
				font-weight: 400;
				font-style: normal;
			}
		}

		@media only screen and (min-width: 600px) {
			.icon {
				width: 100px;
				height: 100px;
			}

			.h1s,
			.h3s {
				font-size: 1.2em;
				font-family: "BBH Sans Bogle", sans-serif;
				font-weight: 400;
				font-style: normal;
			}

			.h2s {
				font-size: 2em;
				font-family: "BBH Sans Bogle", sans-serif;
				font-weight: 400;
				font-style: normal;
			}
		}

		@media only screen and (min-width: 768px) {
			.icon {
				width: 150px;
				height: 150px;
			}

			.h1s,
			.h3s {
				font-size: 1.2em;
				font-family: "BBH Sans Bogle", sans-serif;
				font-weight: 400;
				font-style: normal;
			}

			.h2s {
				font-size: 2em;
				font-family: "BBH Sans Bogle", sans-serif;
				font-weight: 400;
				font-style: normal;
			}
		}
#main-nav li.current-menu-item:not(.has-form) a:not(.button)::hover{
 background-color: #45c656ff;
}
		#main-nav li.current-menu-item:not(.has-form) a:not(.button), #aux-main li.current-menu-item:not(.has-form) a:not(.button), #offCanvasRight li.current-menu-item:not(.has-form) > a:not(.button) {
    background-color: #00B518;
    font-size: 0.9rem;
    font-weight: bold;
}
	</style>
	<script type="text/javascript" language="javascript">
		var template_directory = '<?php echo get_template_directory_uri() ?>';
	</script>
</head>

<body <?php body_class(); ?>>

	<div id="accessibility-shortcuts">
		<ul>
			<li><a href="#" class="skips toggle-statement" title="Toggle Accessibility Statement" accesskey="0" data-toggle="a11y-modal">Toggle Accessibility Statement</a></li>
			<?php if ($govph_acc_link_home = govph_displayoptions('govph_acc_link_home')): ?>
				<li><a href="<?php echo $govph_acc_link_home; ?>" accesskey="h">Home</a></li>
			<?php endif; ?>
			<?php if ($govph_acc_link_contact = govph_displayoptions('govph_acc_link_contact')): ?>
				<li><a href="<?php echo $govph_acc_link_contact; ?>" accesskey="c">Contacts</a></li>
			<?php endif; ?>
			<?php if ($govph_acc_link_feedback = govph_displayoptions('govph_acc_link_feedback')): ?>
				<li><a href="<?php echo $govph_acc_link_feedback; ?>" accesskey="k">Feedback</a></li>
			<?php endif; ?>
			<?php if ($govph_acc_link_faq = govph_displayoptions('govph_acc_link_faq')): ?>
				<li><a href="<?php echo $govph_acc_link_faq; ?>" accesskey="q">FAQ</a></li>
			<?php endif; ?>
			<?php if ($govph_acc_link_search = govph_displayoptions('govph_acc_link_search')): ?>
				<li><a href="<?php echo $govph_acc_link_search; ?>" accesskey="s">Search</a></li>
			<?php endif; ?>
			<?php if ($govph_acc_link_main_content = govph_displayoptions('govph_acc_link_main_content')): ?>
				<li><a href="<?php echo $govph_acc_link_main_content; ?>" accesskey="R">Skip to Main Content</a></li>
			<?php endif; ?>
			<?php if ($govph_acc_link_sitemap = govph_displayoptions('govph_acc_link_sitemap')): ?>
				<li><a href="<?php echo $govph_acc_link_sitemap; ?>" accesskey="M">Sitemap</a></li>
			<?php endif; ?>
		</ul>
	</div>


	<div id="a11y-modal" class="reveal large" title="Accessibility Statement" data-reveal>
		<textarea rows="21" class="statement-textarea" readonly>
This website adopts the Web Content Accessibility Guidelines (WCAG 2.0) as the accessibility standard for all its related web development and services. WCAG 2.0 is also an international standard, ISO 40500. This certifies it as a stable and referenceable technical standard. 

WCAG 2.0 contains 12 guidelines organized under 4 principles: Perceivable, Operable, Understandable, and Robust (POUR for short). There are testable success criteria for each guideline. Compliance to these criteria is measured in three levels: A, AA, or AAA. A guide to understanding and implementing Web Content Accessibility Guidelines 2.0 is available at: https://www.w3.org/TR/UNDERSTANDING-WCAG20/

Accessibility Features

Shortcut Keys Combination Activation Combination keys used for each browser.

	Chrome for Linux press (Alt+Shift+shortcut_key) 
	Chrome for Windows press (Alt+shortcut_key) 
	For Firefox press (Alt+Shift+shortcut_key) 
	For Internet Explorer press (Alt+Shift+shortcut_key) then press (enter)
	On Mac OS press (Ctrl+Opt+shortcut_key)

	Accessibility Statement (Combination + 0): Statement page that will show the available accessibility keys. 
	Home Page (Combination + H): Accessibility key for redirecting to homepage. 
	Main Content (Combination + R): Shortcut for viewing the content section of the current page. 
	FAQ (Combination + Q): Shortcut for FAQ page. 
	Contact (Combination + C): Shortcut for contact page or form inquiries. 
	Feedback (Combination + K): Shortcut for feedback page. 
	Site Map (Combination + M): Shortcut for site map (footer agency) section of the page. 
	Search (Combination + S): Shortcut for search page. 

Press esc, or click the close the button to close this dialog box.
	</textarea>
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

			<!-- off-canvas title bar for 'small' screen -->
			<div id="off-canvas-container" class="title-bar columns hide-for-large" data-responsive-toggle="main-nav" data-hide-for="large">
				<div class="title-bar-right">
					<span class="title-bar-title">Menu</span>
					<button class="menu-icon" type="button" data-open="offCanvasRight"></button>
				</div>
				<div class="title-bar-left">
					<span class="title-bar-title name"><a href="http://www.gov.ph">GOVPH</a></span>
				</div>
			</div>

			<!-- off-canvas right menu -->
			<nav id="offCanvasRight" class="off-canvas position-right hide-for-large" data-off-canvas data-position="right">
				<div class="list-item"><?php get_search_form(); ?></div>
				<ul class="vertical menu" data-drilldown data-parent-link="true">
					<?php wp_nav_menu(['theme_location'  => 'topbar_left', 'items_wrap' => '%3$s', 'container' => false, 'walker' => new Off_Canvass_Menu()]); ?>
					<?php wp_nav_menu(['theme_location'  => 'topbar_right', 'items_wrap' => '%3$s', 'container' => false, 'fallback_cb' => false, 'walker' => new Off_Canvass_Menu()]); ?>
					<?php // if(has_nav_menu('aux_nav')): 
					?>
					<?php //endif; 
					?>
				</ul>
			</nav>

			<!-- "main-nav" top-bar menu for 'medium' and up -->
			<div id="main-nav" style="z-index:999;">
				<div class="row">
					<div class="large-12 columns">
						<nav class="top-bar-left">
							<ul class="dropdown menu" data-dropdown-menu>
								<li class="name"><a href="http://www.gov.ph">GOVPH</a></li>
								<?php wp_nav_menu(['theme_location'  => 'topbar_left', 'items_wrap' => '%3$s', 'container' => false, 'fallback_cb' => false, 'walker' => new Topbar_Nav_Menu()]); ?>

							</ul>
						</nav>

						<nav class="top-bar-right">
							<ul class="dropdown menu" data-dropdown-menu>
								<?php wp_nav_menu(['theme_location'  => 'topbar_right', 'items_wrap' => '%3$s', 'container' => false, 'fallback_cb' => false, 'walker' => new Topbar_Nav_Menu()]); ?>
								<?php if (!govph_displayoptions('govph_disable_search')): ?>
									<li class="search right"><?php get_search_form(); ?></li>
								<?php endif ?>
								<li>
									<button id="accessibility-button" class="button" type="button">
										<span class="show-for-sr">Accessibility Button</span>
										<i class="fa fa-universal-access fa-2x" aria-hidden="true"></i>
									</button>

									<ul class="menu" style="min-width:inherit;">
										<li>
											<a href="#" id="accessibility-statement" title="Accessibility Statement" class="toggle-statement" data-toggle="a11y-modal">
												<span class="show-for-sr">Accessibility Statement</span>
												<i class="fa fa-file-text-o fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="#" id="accessibility-contrast" title="Toggle High Contrast" class="toggle-contrast">
												<span class="show-for-sr">High Contrast</span>
												<i class="fa fa-low-vision fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="#" id="accessibility-skip-content" title="Skip to Content">
												<span class="show-for-sr">Skip to Content</span>
												<i class="fa fa-arrow-circle-o-down fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="#" id="accessibility-skip-footer" title="Skip to Footer">
												<span class="show-for-sr">Skip to Footer</span>
												<i class="fa fa-chevron-down fa-2x"></i>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<!-- original content goes in this container -->
			<div class="off-canvas-content" data-off-canvas-content>
				<?php
				$name_slogan_class = 'large-12 ';
				$ear_content_class = '';
				$ear_content_2_class = '';
				if (is_active_sidebar('ear-content-1') && is_active_sidebar('ear-content-2')) {
					$name_slogan_class = 'large-6 ';
					$ear_content_class = 'large-3 ';
					$ear_content_2_class = 'large-3 ';
				} elseif (is_active_sidebar('ear-content-1') && !is_active_sidebar('ear-content-2')) {
					$name_slogan_class = 'large-9 ';
					$ear_content_class = 'large-3 ';
				} elseif (!is_active_sidebar('ear-content-1') && is_active_sidebar('ear-content-2')) {
					$name_slogan_class = 'large-9 ';
					$ear_content_2_class = 'large-3 ';
				}
				?>

				<!-- masthead -->
				<header class="container-masthead">
					<div class="mainBg"></div>
					<div class="container-fluid d-flex h-100">
						<img class="icon" src="<?= get_template_directory_uri(); ?>/images/lgu_icon.png" alt="" class="img-fluid mt-2" style="">
						<div class="d-flex flex-column texts ms-3">
							<p class="h1s p-0 m-0">REPUBLIC OF THE PHILIPPINES</p>
							<p class="p-0 m-0 h2s border border-start-0 border-end-0 border-bottom-0 border-2 border-dark pt-1	">MUNICIPAL GOVERNMENT OF LABO</p>
							<p class="p-0 m-0 h3s">LABO CAMARINES NORTE REGION V</p>
						</div>
					</div>
				</header>
				<!-- masthead -->