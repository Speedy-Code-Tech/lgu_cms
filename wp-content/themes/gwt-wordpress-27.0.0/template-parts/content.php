<?php

/**
 * @package GWT
 * @since Government Website Template 2.0
 * eol-58
 */
?>

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
	$cleaned_dat = trim($dat);

	$dat_no_punc = preg_replace('/[[:punct:]]/u', '', $cleaned_dat);
	$target_no_punc = preg_replace('/[[:punct:]]/u', '', "CITIZEN's CHARTER");
	$target = str_replace("8217", "", $dat_no_punc);


	?>
	<?php if ($val == 1 && $title == "ACCOMODATIONS"):
		require(get_template_directory() . '/template-parts/custom/accommodation.php');
	?>

	<?php elseif ($val == 1 && $title == "FUN AND ADVENTURE IN LABO" || 	$title == "RESTAURANTS"):
		require(get_template_directory() . '/template-parts/custom/fun_restaurants.php');

	?>

		<?php else:
		if($dat=="ECONOMIC DEVELOPMENT" || $dat=="FISCAL MANAGEMENT" || $dat=="INFRASTRUCTURE"  || $dat=="PUBLIC ADMINISTRATION" || $dat=="SOCIAL SERVICES"):
			require(get_template_directory() . '/template-parts/custom/department_post.php');
			
		elseif ($dat == "MEMORANDUM ORDER" || $dat == "EXECUTIVE ORDER"):
			require(get_template_directory() . '/template-parts/custom/memorandum.php');
		?>

		<?php elseif (strtolower($target) == strtolower($target_no_punc)):
			require(get_template_directory() . '/template-parts/custom/charter.php');
		?>
		<?php elseif ($data == "DOWNLOADABLE FORMS"): ?>
			
			<?php
		
			require(get_template_directory() . '/template-parts/custom/downloadable_forms.php');
			?>

		<?php elseif ($data == "FACTS AND FIGURES"): ?>
			
			<?php else:
			$isBrgy = 0;
		$barangay1 = [
				"anahaw",
				"anameam",
				"awitan",
				"baay",
				"bagacay",
				"bagong silang i",
				"bagong silang ii",
				"bagong silang iii",
				"bakiad",
				"bautista",
				"bayabas",
				"bayan-bayan",
				"benit",
				"bulhao",
				"cabatuhan",
				"cabusay",
				"calabasa",
				"canapawan",
				"daguit",
				"dalas",
				"dumagmang",
				"exciban",
				"fundado",
				"guinacutan",
				"guisican",
				"gumamela",
				"iberica",
				"kalamunding",
				"lugui",
				"mabilo i",
				"mabilo ii",
				"macogon",
				"mahawan-hawan",
				"malangcao-basud",
				"malasugui",
				"malatap",
				"malaya",
				"malibago",
				"maot",
				"masalong",
				"matanlang",
				"napaod",
				"pag-asa",
				"pangpang",
				"pinya",
				"san antonio",
				"san francisco",
				"santa cruz",
				"submakin",
				"talobatib",
				"tigbinan",
				"tulay na lupa"
			];
			
			if (in_array(trim(strtolower($data)), $barangay1, true)):
				require(get_template_directory() . '/template-parts/custom/brgy-display.php');
			?>
			<?php else:
				require(get_template_directory() . '/template-parts/custom/default-template.php');
			?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
</div>