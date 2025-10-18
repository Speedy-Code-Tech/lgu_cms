<style>
    #post-<?php the_ID(); ?>{
        display: flex;
    }
    
     @media only screen and (max-width: 600px) {
		#post-<?php the_ID(); ?>{
            flex-direction: column;
        }
      
	}

	@media only screen and (min-width: 600px) {
		#post-<?php the_ID(); ?>{
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
     
	}

	@media only screen and (min-width: 768px) {
		 #post-<?php the_ID(); ?>{
            flex-direction: row;
        }
     
	}
</style>

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