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
				<div style="flex-shrink: 0;">
					<?php if (has_post_thumbnail()) : ?>
						<div class="container-fluid d-flex justify-content-center align-items-center">
							<?php the_post_thumbnail('medium', ['class' => 'resimg rounded m-0']); ?>
						</div>
					<?php endif; ?>

				</div>
				<div style="flex-grow: 1;">
					<h2 style="margin-top: 0; border-bottom: 3px solid #32CD32; display: inline-block; padding-bottom: 5px; color: #007bff;"><?php the_title(); ?></h2>
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
		<?php else:
		if ($data == "FACTS AND FIGURES"): ?>

			<div class="container-fluid d-flex flex-wrap gap-3 justify-content-center">
				<article class="container-fluid">
					<div class="d-flex flex-column">
						<h1 class="p-0 m-0" style="color: #007bff;">GEOGRAPHY</h1>
						<div style="width: 200px; height:4px; background-color: #00B518; border-radius: 30px;"></div>
					</div>
					<div class="container-fluid px-5 pt-5 bgArticle" style="font-size:18px;padding:0 30px;border-right: 2px solid #00B518;">
						&emsp;&emsp;The town of Labo is geographically located relatively at the center of the province of Camarines Norte. It is approximately 335 kilometers south of Manila and 15 kilometers away from Daet, the capital town of the province.
						<br /><br />
						&emsp;&emsp;Its aggregate land area of 648.84 km² occupies more than 25% of the total land area of the province. Its 52 component barangays represent 18.44% of the total barangays of the province.
						<br /><br />
						&emsp;&emsp;The surface of the municipality is generally rugged, rolling hills and mountainous terrain with relative small rollings and flat terrain. Mt. Cadig (736 meters above sea level), Mt. Labo(1544 meters above sea level), Mt. Bagacay (786 meters above sea level) and Mt. Nalisbitan (265 meters above sea level) form the Southern Cordillera. Boundaries of Camarines Norte, Camarines Sur, and Quezon provinces converge on Mt. Labo, which is the highest peak in the province. Mt. Bagacay serves as a boundary between municipalities of Paracale and Labo and it as well guards the municipality from strong north winds especially during typhoons. Mt. Labo, Mt. Bagacay, and Mt. Cadig are the three major known dormant volcanoes in the municipality.
					</div>
				</article>
				<div class="container-fluid container-mastheads mb-3">
					<div class="mainBg1"></div>
					<div class="container-fluid d-flex justify-content-center align-items-center flex-column flex-md-row flex-sm-row h-100 test" style="z-index: 200;">
						<div class="col-12 col-sm-3 m-3 m-sm-0 d-flex justify-content-center align-items-center" style="z-index: 200;">
							<img src="<?= get_template_directory_uri(); ?>/images/shfIcon.png" alt="" class="img-fluid mt-2" style="">

						</div>
						<div class="col-8 d-flex flex-column pt-3" style="z-index: 200;">
							<p class="tag text-center text-white" style="text-align: center;">ABOUT THE MUNICIPALITY</p>
							<div class="divider text-white">
								<span class="divider-icon"><i class="bi bi-buildings text-white"></i></span>
							</div>

							<div class="container-fluid d-flex flex-column flex-md- flex-sm-row justify-content-center align-items-center">
								<div class=" d-flex flex-column justify-content-center align-items-center p-5 p-sm-2 pt-2">
									<p class="p-0 m-0" style="color:#FFF; font-size: 50px; font-weight: bold;">648.8km<sup>2</sup></p>
									<p class="p-0 m-0 text-white" style="font-weight: bold;">Aggregated Land Area</p>
								</div>
								<div class=" d-flex justify-content-center align-items-center flex-column p-5 p-sm-2 pt-2">
									<p class="p-0 m-0" style="color:#FFF; font-size: 50px; font-weight: bold;">65.17%</p>
									<p class="p-0 m-0 text-white" style="font-weight: bold;">Land Devoted to Agriculture</p>
								</div>
								<div class=" d-flex justify-content-center align-items-center flex-column p-5 p-sm-2 pt-2">
									<p class="p-0 m-0" style="color:#FFF; font-size: 50px; font-weight: bold;">109,245</p>
									<p class="p-0 m-0 text-white" style="font-weight: bold;">Total Populations</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<article class="container-fluid">
				<div class="d-flex flex-column">
					<h1 class="p-0 m-0" style="color: #007bff;">ECONOMY</h1>
					<div style="width: 200px; height:4px; background-color: #00B518; border-radius: 30px;"></div>
				</div>
				<div class="container-fluid px-5 pt-5 bgArticle" style="font-size:18px;padding:0 30px;border-right: 2px solid #00B518;">
					&emsp;&emsp;Labo being located at the center of the province and the most populous town serves as the agricultural center as well as potential investment destination and promotion center for business, trades, and secondary industrial growth center. It is abundant with natural resources such as gold, nickel, iron, magnetite sand, copper, lead and manganese. Most of the provincial water supplies are located at barangay Tulay na Lupa and Lugui which serves seven out of the 12 municipalities. Agriculture is the leading livelihood of the residents of Labo. Due to abundant forest products such as rattan and bamboo, local folks tend to manufacture and market handicrafts.
					<br /><br />
					&emsp;&emsp;An area of 390.39 km² (65.17% of municipal’s land area) is devoted to agricultural crop production, 343.46 km² of which are coconut plantations. On the other hand, 18.47 km² is used for rice production. Banana production is also popular in the province, followed by Pineapple and Pili.
					<br /><br />
					&emsp;&emsp;Tourism is also a good source of income for Labo, being surrounded by freshwater and mountains suitable for hikings.
					<br /><br />
					&emsp;&emsp;Other community livelihood follows: pineapple and coco-based processing and preservation, pineapple weaving (Barong), jewelry making and accessories, foods manufacturing and beverages processing, other tourism related industries and wood and bamboo furniture making.
				</div>
			</article>
			<header class="brgy" style="position: relative; overflow: hidden;">
				<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,181,24,0.5); z-index: 1;"></div>
				<p class="page-titles p-0 m-0 text-center text-white" style="position: relative; z-index: 2;">
					LIST OF BARANGGAYS
				</p>
			</header>
			<article class="container-fluid ">
				<p class="pt-3 text-center"><span style="border-bottom: #00B518 2px solid; text-transform: uppercase; padding-bottom: 10px; font-size: 20px; font-weight: bold;">Labo is politically subdivided into 52 barangays.</span></p>
				<div class="container-flud d-flex flex-column flex-md-row  pt-3">
					<div class="col-12 col-md-4 ps-3 " style="border-right:2px solid #00B518;">
						<ul class="d-flex flex-column gap-2">
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/anahaw" style="text-transform: uppercase; text-decoration: none;">Anahaw (Poblacion)</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/anameam" style="text-transform: uppercase; text-decoration: none;">Anameam</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/awitan" style="text-transform: uppercase; text-decoration: none;">Awitan</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/baay" style="text-transform: uppercase; text-decoration: none;">Baay</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/bagacay" style="text-transform: uppercase; text-decoration: none;">Bagacay</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/bagong-silang-i" style="text-transform: uppercase; text-decoration: none;">Bagong Silang I</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/bagong-silang-ii" style="text-transform: uppercase; text-decoration: none;">Bagong Silang II</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/bagong-silang-iii" style="text-transform: uppercase; text-decoration: none;">Bagong Silang III</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/bakiad" style="text-transform: uppercase; text-decoration: none;">Bakiad</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/bautista" style="text-transform: uppercase; text-decoration: none;">Bautista</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/bayabas" style="text-transform: uppercase; text-decoration: none;">Bayabas</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/bayan-bayan" style="text-transform: uppercase; text-decoration: none;">Bayan-bayan</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/benit" style="text-transform: uppercase; text-decoration: none;">Benit</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/bulhao" style="text-transform: uppercase; text-decoration: none;">Bulhao</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/cabatuhan" style="text-transform: uppercase; text-decoration: none;">Cabatuhan</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/cabusay" style="text-transform: uppercase; text-decoration: none;">Cabusay</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/calabasa" style="text-transform: uppercase; text-decoration: none;">Calabasa</a>
							</li>
						</ul>
					</div>
					<div class="col-12 col-md-4 ps-3 " style="border-right:2px solid #00B518;">
						<ul class="d-flex flex-column gap-2">
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/calabasa" style="text-transform: uppercase; text-decoration: none;">Calabasa</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/canapawan" style="text-transform: uppercase; text-decoration: none;">Canapawan</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/daguit" style="text-transform: uppercase; text-decoration: none;">Daguit</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/dalas" style="text-transform: uppercase; text-decoration: none;">Dalas</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/dumagmang" style="text-transform: uppercase; text-decoration: none;">Dumagmang</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/exciban" style="text-transform: uppercase; text-decoration: none;">Exciban</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/fundado" style="text-transform: uppercase; text-decoration: none;">Fundado</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/guinacutan" style="text-transform: uppercase; text-decoration: none;">Guinacutan</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/guisican" style="text-transform: uppercase; text-decoration: none;">Guisican</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/gumamela" style="text-transform: uppercase; text-decoration: none;">Gumamela (Poblacion)</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/iberica" style="text-transform: uppercase; text-decoration: none;">Iberica</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/kalamunding" style="text-transform: uppercase; text-decoration: none;">Kalamunding (Poblacion)</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/lugui" style="text-transform: uppercase; text-decoration: none;">Lugui</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/mabilo-i" style="text-transform: uppercase; text-decoration: none;">Mabilo I</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/mabilo-ii" style="text-transform: uppercase; text-decoration: none;">Mabilo II</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/macogon" style="text-transform: uppercase; text-decoration: none;">Macogon</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/mahawan-hawan" style="text-transform: uppercase; text-decoration: none;">Mahawan-hawan</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/malangcao-basud" style="text-transform: uppercase; text-decoration: none;">Malangcao-Basud</a>
							</li>
						</ul>
					</div>
					<div class="col-12 col-md-4 ps-3 " style="border-right:2px solid #00B518;">
						<ul class="d-flex flex-column gap-2">
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/malasugui" style="text-transform: uppercase; text-decoration: none;">Malasugui</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/malatap" style="text-transform: uppercase; text-decoration: none;">Malatap</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/malaya" style="text-transform: uppercase; text-decoration: none;">Malaya</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/malibago" style="text-transform: uppercase; text-decoration: none;">Malibago</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/maot" style="text-transform: uppercase; text-decoration: none;">Maot</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/masalong" style="text-transform: uppercase; text-decoration: none;">Masalong</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/matanlang" style="text-transform: uppercase; text-decoration: none;">Matanlang</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/napaod" style="text-transform: uppercase; text-decoration: none;">Napaod</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/pag-asa" style="text-transform: uppercase; text-decoration: none;">Pag-Asa</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/pangpang" style="text-transform: uppercase; text-decoration: none;">Pangpang</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/pinya" style="text-transform: uppercase; text-decoration: none;">Pinya (Poblacion)</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/san-antonio" style="text-transform: uppercase; text-decoration: none;">San Antonio</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/san-francisco" style="text-transform: uppercase; text-decoration: none;">San Francisco (Poblacion)</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/santa-cruz" style="text-transform: uppercase; text-decoration: none;">Santa Cruz</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/submakin" style="text-transform: uppercase; text-decoration: none;">Submakin</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/talobatib" style="text-transform: uppercase; text-decoration: none;">Talobatib</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/tigbinan" style="text-transform: uppercase; text-decoration: none;">Tigbinan</a>
							</li>
							<li>
								<a class="links" href="<?php echo WP_HOME; ?>index.php/category/barangay/tulay-na-lupa" style="text-transform: uppercase; text-decoration: none;">Tulay Na Lupa</a>
							</li>
						</ul>
					</div>
				</div>
			</article>

</div>

<?php else:
			$isBrgy = 0;
			$barangays = [
				"Anahaw",
				"Anameam",
				"Awitan",
				"Baay",
				"Bagacay",
				"Bagong Silang I",
				"Bagong Silang II",
				"Bagong Silang III",
				"Bakiad",
				"Bautista",
				"Bayabas",
				"Bayan-bayan",
				"Benit",
				"Bulhao",
				"Cabatuhan",
				"Cabusay",
				"Calabasa",
				"Canapawan",
				"Daguit",
				"Dalas",
				"Dumagmang",
				"Exciban",
				"Fundado",
				"Guinacutan",
				"Guisican",
				"Gumamela",
				"Iberica",
				"Kalamunding",
				"Lugui",
				"Mabilo I",
				"Mabilo II",
				"Macogon",
				"Mahawan-hawan",
				"Malangcao-Basud",
				"Malasugui",
				"Malatap",
				"Malaya",
				"Malibago",
				"Maot",
				"Masalong",
				"Matanlang",
				"Napaod",
				"Pag-Asa",
				"Pangpang",
				"Pinya",
				"San Antonio",
				"San Francisco",
				"Santa Cruz",
				"Submakin",
				"Talobatib",
				"Tigbinan",
				"Tulay Na Lupa"
			];
			if (in_array(trim($data), $barangays, true)):
				if (in_array(trim(get_the_title()), $barangays, true)):
?>

		<div class="container-fluid d-flex flex-column flex-sm-row gap-3">
			<div class="col12 col-sm-4">
				<?php
					if (has_post_thumbnail()) :
						$content_class = 'large-12';
						the_post_thumbnail('thumbnail', ['class' => 'w-100 rounded']);
					endif;
				?>
			</div>
			<div class="col-12 col-sm-6">

				<?php
					get_template_part('template-parts/content', 'single');
				?>

			</div>
		</div>
		<hr>
		</hr>
		<h2 class="pb-0 mb-2" style="color:#00B518;">Available Tourist Spots and Activity</h2>
		<div style="width: 350px; background:#007bff;  height:4px; border-radius: 30px;"></div>

	<?php endif; ?>

	<?php if (!in_array(trim(get_the_title()), $barangays, true)): ?>
		<div class="container-fluid d-flex flex-column">
			<div class="flex-column flex-sm-row" style="display: flex; align-items: flex-start; gap: 20px; padding: 20px;">
				<div style="flex-shrink: 0;">
					<?php if (has_post_thumbnail()) : ?>
						<div class="container-fluid d-flex justify-content-center align-items-center">
							<?php the_post_thumbnail('medium', ['class' => 'resimg rounded m-0']); ?>
						</div>
					<?php endif; ?>

				</div>
				<div style="flex-grow: 1;">
					<h2 style="margin-top: 0; border-bottom: 3px solid #32CD32; display: inline-block; padding-bottom: 5px; color: #007bff;"><?php the_title(); ?></h2>
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
	<?php endif; ?>

<?php else:

?>
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
<?php endif; ?>
<?php endif; ?>
</div>