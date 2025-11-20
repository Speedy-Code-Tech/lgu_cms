<div class="d-flex flex-row shadow border p-5 justify-content-start align-items-center">
    <div class="container-fluid m-0 gap-4 d-flex flex-column justify-content-center align-items-center" style="width:30%;">
        <?php
        if (has_post_thumbnail()) :
            $content_class = 'large-12';
            the_post_thumbnail('thumbnail', ['class' => 'w-50 rounded m-0']);
        endif;
        ?>
        <p class="pt-0 text-center" style="color:#373737; font-size: 1.3em; text-transform: uppercase; font-weight: bold;"><?= the_title(); ?></p>

    </div>
    <div class="container-fluid m-0" style="width:70%;">
        <div style="width:100%; height:4px; background:rgba(0, 181, 24,0.4);"></div>
        <div class="col-12">
            <?php
            get_template_part('template-parts/content', 'single');
            ?>
        </div>
    </div>
</div>