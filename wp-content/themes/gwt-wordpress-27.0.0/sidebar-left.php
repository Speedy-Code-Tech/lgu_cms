<?php

/**
 * The Sidebar containing the main widget areas.
 *
 * @package gwt_wp
 * eol-15
 */
?>
<style>
	::-webkit-scrollbar {
    width: 1px; /* Set the width for the vertical scrollbar */
    height: 1px; /* Set the height for the horizontal scrollbar */
}

::-webkit-scrollbar-track {
    background: #f1f1f1; /* A light, neutral background */
    border-radius: 10px;
    box-shadow: inset 0 0 1px rgba(255, 255, 255, 0.1); /* Subtle inner shadow */
}
::-webkit-scrollbar-thumb {
    background: #ffffffff; /* A dark gray thumb */
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: #ffffffff; /* Darker gray on hover */
}

::-webkit-scrollbar-corner {
    background: transparent;
}
	#sidebar-left>aside {
		border: 0px;
		background-color: white;
	}

	#block-10 {
		margin-bottom: 0;
		padding-bottom: 5px;
	}

	#text-6 {
		margin-top: 0;
		padding-top: 0;
		margin-bottom: 0;
		padding-bottom: 0;
	}
	#text-9{
		padding-bottom: 0;
	}
	#block-12 {
		height: 300px;
		overflow-y: scroll;
		margin-top:0;
		padding-top:0;
	}

	#block-12>.wp-block-latest-posts.wp-block-latest-posts__list li {
		padding: 10px 0;
		font-weight: bold;
	}
	#block-12>.wp-block-latest-posts.wp-block-latest-posts__list li>a {
		color: #373737;	
		font-size: 12px;

	}
	#block-12>.wp-block-latest-posts.wp-block-latest-posts__list li>a:hover {
		color: #00B518;	

	}
	#block-13{
		padding-top: 0;
		margin-top: 0;
	}
	#block-13 .wp-block-latest-posts__list li{
		border-bottom: #00B518 1px solid;
		padding: 10px 0;
			transition: 1s;
	}
	#block-13 .wp-block-latest-posts__list li a:hover{
		color: #00B518;
		font-weight: bold;
	
	}
	#block-13 .wp-block-latest-posts__list li a{
		color:#373737;
					transition: cubic-bezier(0.86, 0, 0.07, 1);

	}
	#block-13 .wp-block-latest-posts__list li a:before{
		content: "- ";
	}
</style>
<?php if (is_active_sidebar('left-sidebar')) : 
	if(get_the_title() !="MAYORS PROFILE"):
	?>
	
	<aside id="sidebar-left" class="<?php govph_displayoptions('govph_sidebar_position_left'); ?>columns" role="complementary">
		<?php do_action('before_sidebar'); ?>
		<?php dynamic_sidebar('left-sidebar'); ?>
	
	</aside>
	
<?php endif; endif; ?>