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