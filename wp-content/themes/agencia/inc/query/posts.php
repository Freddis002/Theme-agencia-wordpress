<?php 
add_action('pre_get_posts', function (WP_Query $query) {

if (is_admin() || 
!$query->is_main_query() ||
 !is_home() && !is_category() && !is_search()
 ) {
    return;
}


/* Sert a limite le nb d'articles dans la page */
$query->set('posts_per_page', 5);

});