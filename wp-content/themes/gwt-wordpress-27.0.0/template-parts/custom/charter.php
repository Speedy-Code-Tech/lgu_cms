<div class="d-flex flex-column justify-content-start align-items-center">
    <?php
    if (has_post_thumbnail()) :
        $content_class = 'large-12';
        the_post_thumbnail('thumbnail', ['class' => 'w-25 rounded m-0']);
    endif;
    ?>
    <p class="pt-0 text-center" style="color:#373737; font-size: 2.4em; text-transform: uppercase; font-weight: bold;"><?= the_title(); ?></p>
    <div style="width:100%; height:4px; background:rgba(0, 181, 24,0.4);"></div>
    <div class="col-12 col-sm-6">
        <?php
        get_template_part('template-parts/content', 'single');
        ?>
    </div>
</div>