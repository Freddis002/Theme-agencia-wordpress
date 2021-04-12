<?php 
add_action('pre_get_posts', function (WP_Query $query) {

if (is_admin() || 
!$query->is_main_query() ||
 !is_post_type_archive('property')
 ) {
    return;
}


/* Sert a limite le nb de biens dans la page - Nos biens  */
$query->set('posts_per_page', 20);

});

