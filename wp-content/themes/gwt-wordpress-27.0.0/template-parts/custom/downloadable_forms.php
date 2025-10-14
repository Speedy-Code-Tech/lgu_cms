<div class="container-fluid mb-5" style="border-right:4px solid #00B518">
    <div class="title d-flex flex-column">
        <h2 style="color:#00B518;"><?= the_title(); ?></h2>
        <div style="width:300px; height:4px; background:#1A66FE; border-radius: 30px;"></div>
    </div>
    <div class="container-fluid fs-5">
        <style>
            .wp-block-file>a{
                font-size: 20px;
                /* color:#373737; */
            }
        </style>
        <?php
        get_template_part('template-parts/content', 'single');
        ?>
    </div>
</div>