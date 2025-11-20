<style>
     .overlay,.overlay1,.overlay2,.overlay3,.overlay4 {
        /* FIXED: Use opacity for smooth visual transition */
        opacity: 0;
        /* FIXED: Use visibility to hide/show without breaking the transition */
        visibility: hidden;
        
        /* Transition properties */
        transition: opacity 0.4s ease-in-out, visibility 0s 0.4s; /* Opacity transitions for 0.4s, visibility changes *after* the opacity transition finishes */

        /* Existing styles */
        background: rgba(0, 181, 24, 0.9);
        position: absolute;
        width: 250px;
        height: 300px;
        padding: 10px;
        z-index: 10; /* Ensure overlay is above card content */
        /* Center content inside the overlay */
        display: flex; 
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: inherit; /* Inherit rounded corners from parent */
    }

    /* Set the parent dept card to be the positioning context */
    .dept,.dept1,.dept2,.dept3,.dept4 {
        position: relative; /* KEY FIX: This makes the absolute 'overlay' position relative to 'dept' */
        /* Ensure content is fully visible before hover */
        overflow: hidden; 
        
        /* Added transition for the card itself, though not strictly needed for the overlay */
        transition: box-shadow 0.3s ease; 
    }

    /* On hover of the dept card, make the overlay fully visible and opaque */
    .dept:hover .overlay,.dept1:hover .overlay1,.dept2:hover .overlay2,.dept3:hover .overlay3,.dept4:hover .overlay4 {
        opacity: 1;
        visibility: visible;
        /* When hovering, change visibility instantly (0s) but keep it visible */
        transition: opacity 0.4s ease-in-out, visibility 0s 0s; 
    }
</style>
<div class="container-fluid d-flex  justify-content-center align-items-center flex-row flex-wrap gap-5">
    <div class="dept px-5 pt-0 pb-0 rounded d-flex flex-column justify-content-center align-items-center container-fluid " style="width:250px; height: 300px;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <img src="<?php echo get_template_directory_uri() . '/images/economic.png' ?>" style="width:80px;">
        <div class="container d-flex flex-column">
            <p class="text-center" style="font-size: 1.2em; font-weight:bold;">Economic Development</p>
            <div class="w-100 d-flex justify-content-center align-items-center" style="">
                <div class="line" style="background-color: #00B518; width:100%; height:4px;"></div>
            </div>

            <!-- <a classak="btn form-control" href="<?= WP_HOME . 'index.php/category/about/department-and-offices/economic-development/' ?>" style="background:#00B518; color:white;">View</a> -->

        </div>
        <div class="overlay">
            <p class="text-center p-0 m-0 text-white" style="font-size: 1.2em; font-weight:bold;">Economic Development</p>
            <div class=" d-flex justify-content-center align-items-center">
                <div class="line" style="background-color: #FFF; width:150px; height:4px;"></div>
            </div>
            <p class="text-center text-white h-75 d-flex justify-content-center align-items-center">The Economic Development Cluster is responsible for introducing economic growth and development in Labo.</p>
            <a class="btn form-control" href="<?= WP_HOME . 'index.php/category/about/department-and-offices/economic-development/' ?>" style="background:#FFF; color:#000;">View</a>
        </div>
    </div>

    <div class="dept1 px-5 pt-0 pb-0 rounded d-flex flex-column justify-content-center align-items-center container-fluid " style="width:250px; height: 300px;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <img src="<?php echo get_template_directory_uri() . '/images/fiscal.png' ?>" style="width:80px;">
        <p class="text-center" style="font-size: 1.5em; font-weight:bold;">Fiscal Management</p>
      
        <div class="w-100 d-flex justify-content-center align-items-center" style="">
                <div class="line" style="background-color: #00B518; width:100%; height:4px;"></div>
            </div>
        <!-- <a class="btn form-control" href="<?= WP_HOME . 'index.php/category/about/department-and-offices/fiscal/' ?>" style="background:#00B518; color:white;">View</a> -->
        <div class="overlay1">
            <p class="text-center p-0 m-0 text-white" style="font-size: 1.2em; font-weight:bold;">Fiscal Management</p>
            <div class=" d-flex justify-content-center align-items-center">
                <div class="line" style="background-color: #FFF; width:150px; height:4px;"></div>
            </div>
            <p class="text-center text-white h-75 d-flex justify-content-center align-items-center">  The Fiscal Management Cluster takes charge in properly collecting the finances of the Local Government of Labo to support the program of the town.</p>
            <a class="btn form-control" href="<?= WP_HOME . 'index.php/category/about/department-and-offices/fiscal/' ?>" style="background:#FFF; color:#000;">View</a>
        </div>
    </div>

    <div class="dept2 px-5 pt-0 pb-0 rounded d-flex flex-column justify-content-center align-items-center container-fluid " style="width:250px; height: 300px;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <img src="<?php echo get_template_directory_uri() . '/images/infrustructure.png' ?>" style="width:80px;">
        <p class="text-center" style="font-size: 1.5em; font-weight:bold;">Infrastructure</p>
       
       <div class="w-100 d-flex justify-content-center align-items-center" style="">
                <div class="line" style="background-color: #00B518; width:100%; height:4px;"></div>
            </div>
        <!-- <a class="btn form-control" href="<?= WP_HOME . 'index.php/category/about/department-and-offices/infrastructure/' ?>" style="background:#00B518; color:white;">View</a> -->
    <div class="overlay2">
            <p class="text-center p-0 m-0 text-white" style="font-size: 1.2em; font-weight:bold;">Infrastructure</p>
            <div class=" d-flex justify-content-center align-items-center">
                <div class="line" style="background-color: #FFF; width:150px; height:4px;"></div>
            </div>
            <p class="text-center text-white h-75 d-flex justify-content-center align-items-center">The Infrastructure cluster is responsible for the interconnectivity of the city and ensures the convenience of the Laboeños.</p>
            <a class="btn form-control" href="<?= WP_HOME . 'index.php/category/about/department-and-offices/infrastructure/' ?>" style="background:#FFF; color:#000;">View</a>
        </div>
    </div>


    <div class="dept3 px-5 pt-0 pb-0 rounded d-flex flex-column justify-content-center align-items-center container-fluid " style="width:250px; height: 300px;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <img src="<?php echo get_template_directory_uri() . '/images/publicAdd.png' ?>" style="width:80px;">
        <p class="text-center" style="font-size: 1.5em; font-weight:bold;">Public Administration</p>
      
      <div class="w-100 d-flex justify-content-center align-items-center" style="">
                <div class="line" style="background-color: #00B518; width:100%; height:4px;"></div>
            </div>
        <!-- <a class="btn form-control" href="<?= WP_HOME . 'index.php/category/about/department-and-offices/public-administration/' ?>" style="background:#00B518; color:white;">View</a> -->
    <div class="overlay3">
            <p class="text-center p-0 m-0 text-white" style="font-size: 1.2em; font-weight:bold;">Public Administration</p>
            <div class=" d-flex justify-content-center align-items-center">
                <div class="line" style="background-color: #FFF; width:150px; height:4px;"></div>
            </div>
            <p class="text-center text-white h-75 d-flex justify-content-center align-items-center">The Development Management and Public Administration ensures that the processes of the Local Government of Labo are properly alighed for convenience of the Laboeños.</p>
            <a class="btn form-control" href="<?= WP_HOME . 'index.php/category/about/department-and-offices/public-administration/' ?>" style="background:#FFF; color:#000;">View</a>
        </div>
    </div>


    <div class="dept4 px-5 pt-0 pb-0 rounded d-flex flex-column justify-content-center align-items-center container-fluid " style="width:250px; height: 300px;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <img src="<?php echo get_template_directory_uri() . '/images/social.png' ?>" style="width:80px;">
        <p class="text-center" style="font-size: 1.5em; font-weight:bold;">Social Services</p>
       
       <div class="w-100 d-flex justify-content-center align-items-center" style="">
                <div class="line" style="background-color: #00B518; width:100%; height:4px;"></div>
            </div>
        <!-- <a class="btn form-control" href="<?= WP_HOME . 'index.php/category/about/department-and-offices/social-services/' ?>" style="background:#00B518; color:white;">View</a> -->
        <div class="overlay4">
            <p class="text-center p-0 m-0 text-white" style="font-size: 1.2em; font-weight:bold;">Social Services</p>
            <div class=" d-flex justify-content-center align-items-center">
                <div class="line" style="background-color: #FFF; width:150px; height:4px;"></div>
            </div>
            <p class="text-center text-white h-75 d-flex justify-content-center align-items-center">The Social Services Cluster is composed of the various Local Government departments which cater to the basic needs of the Laboeños. </p>
            <a class="btn form-control" href="<?= WP_HOME . 'index.php/category/about/department-and-offices/social-services/' ?>" style="background:#FFF; color:#000;">View</a>
        </div>
    </div>


</div>