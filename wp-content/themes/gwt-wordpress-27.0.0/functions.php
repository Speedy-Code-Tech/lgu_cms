<?php
/**
 * gwt_wp functions and definitions
 *
 * @package gwt_wp
 * eol-119
 */

/**
 * Template Initialize
 */

require get_template_directory() . '/inc/function-initialize.php';

/**
 * Register widgetized area
 */
require get_template_directory() . '/inc/function-widget.php';

/**
 * Breadcrumbs
 */
require get_template_directory() . '/inc/function-breadcrumbs.php';

/**
 * Govph Excerpt
 */
require get_template_directory() . '/inc/function-excerpt.php';

/**
 * Enqueue scripts and styles
 */
require get_template_directory() . '/inc/function-enqueue_scripts.php';

/**
 * Disable comment functions
 */
require get_template_directory() . '/inc/function-disable_comments.php';

/**
 * GovPH default widgets
 */
require get_template_directory() . '/inc/govph-widget.php';

/**
 * Default sidebar contents
 */
require get_template_directory() . '/inc/sidebar.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// require get_template_directory() . '/inc/jetpack.php';

/**
 * Theme Options Page.
 */
require get_template_directory() . '/inc/function-options.php';

/**
 * Custom Post Types
 */
// require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
* Function for Access
*/
require get_template_directory() . '/inc/function-access.php';

/**
* Function for Activity
*/
require get_template_directory() . '/inc/function-activity.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Envato Flexslider
 */
require get_template_directory() . '/inc/vendors/envato-flex-slider/envato-flex-slider.php';

/**
* Disable rest api for users additions.
*/
require get_template_directory() . '/inc/function-disable_api.php';

/**
 * GWT only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

/**
* Anti-Click Jacking
*/
require get_template_directory() . '/inc/addsec.php';

/**
 * Change the default post order to oldest-to-newest (ASC)
 * on the main archive pages.
 */
function custom_dynamic_category_sort( $query ) {
    // 1. Only modify the main query on the front-end (not in admin)
    if ( $query->is_main_query() && ! is_admin() && $query->is_category() ) {
        
        // 2. Define your list of barangays inside the function
        $barangays = [
            "Anahaw", "Anameam", "Awitan", "Baay", "Bagacay", "Bagong Silang I", 
            "Bagong Silang II", "Bagong Silang III", "Bakiad", "Bautista", "Bayabas", 
            "Bayan-bayan", "Benit", "Bulhao", "Cabatuhan", "Cabusay", "Calabasa", 
            "Canapawan", "Daguit", "Dalas", "Dumagmang", "Exciban", "Fundado", 
            "Guinacutan", "Guisican", "Gumamela", "Iberica", "Kalamunding", "Lugui", 
            "Mabilo I", "Mabilo II", "Macogon", "Mahawan-hawan", "Malangcao-Basud", 
            "Malasugui", "Malatap", "Malaya", "Malibago", "Maot", "Masalong", 
            "Matanlang", "Napaod", "Pag-Asa", "Pangpang", "Pinya", "San Antonio", 
            "San Francisco", "Santa Cruz", "Submakin", "Talobatib", "Tigbinan", 
            "Tulay Na Lupa"
        ];
        
        // 3. Get the title/name of the current category (term)
        // We use get_queried_object() which is the most reliable method here
        $queried_object = get_queried_object();
        $current_category_name = '';

        if ( $queried_object && property_exists( $queried_object, 'name' ) ) {
            $current_category_name = trim( $queried_object->name );
        }

        // 4. Check if the current category name is in the barangays list
        if ( in_array( $current_category_name, $barangays, true ) ) {
            // If it IS a barangay category, set the order to DESC (Newest to Oldest)
            $query->set( 'order', 'ASC' ); 
        } else {
            // If it is NOT a barangay category, set the order to ASC (Oldest to Newest)
            $query->set( 'order', 'DESC' );
        }
        
        // Always order by date
        $query->set( 'orderby', 'date' );
    }
}

add_action( 'pre_get_posts', 'custom_dynamic_category_sort' );