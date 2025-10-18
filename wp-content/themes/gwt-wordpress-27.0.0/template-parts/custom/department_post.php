<style>
#overlay<?=the_ID()?>{
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s ease-in-out, visibility 0s 0.4s;
        background: rgba(0, 181, 24, 0.9);
        position: absolute;
        width: 350px;
        height: 350px;
        padding: 10px;
        z-index: 10;
        display: flex; 
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: inherit; 
    }


    #dept<?=the_ID()?> {
        position: relative; 
        overflow: hidden; 
        transition: box-shadow 0.3s ease; 
    }

   
    /* #dept<?=the_ID()?>:hover #overlay<?=the_ID()?> {
        opacity: 1;
        visibility: visible;
        transition: opacity 0.4s ease-in-out, visibility 0s 0s; 
    } */
</style>



<a href="<?=the_permalink();?>" style="color: black;">
    <div id="dept<?=the_ID()?>" class=" px-5 pt-0 pb-0 rounded d-flex flex-column justify-content-center align-items-center container-fluid " style="width:350px; height: 350px;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
       <?php
    if (has_post_thumbnail()) :
        $content_class = 'large-12';
        the_post_thumbnail('thumbnail', ['class' => 'w-75 rounded p-3 m-0']);
    endif;
    ?>
        <div class="container d-flex flex-column">
            <p class="text-center pb-1 mb-0" style="font-size: 1.2em; font-weight:bold;"><?= the_title();?></p>
            <div class=" d-flex justify-content-center p-0 m-0 align-items-center" style="">
                <div class="line p-0 m-0" style="background-color: #00B518; width:30%; height:4px;"></div>
            </div>
            <p class="text-secondary pb-3 m-0 text-center pt-2" style="font-size: 13px;">	<?php
						$content = get_the_content();
						$content = wp_strip_all_tags($content);
						if (mb_strlen($content) > 300) {
							$content = mb_substr($content, 0, 300) . '...';
						}
                        // echo $content;
						?></p>
        </div>
      
    </div>
</a>