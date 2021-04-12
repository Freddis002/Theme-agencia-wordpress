<?php get_header() ?>


<?php
// Pour la recherche de bien Acheter & Louer quand tu cliques sur l'onglet Acheter le type radio suit le mouvement 
$isRent = get_query_var('property_category', 'buy') === _x('rent','URL', 'agence');

 ?>




<div class="container page-properties">
    <div class="search-form">
  <h1 class="search-form__title">
    <?= __('All our properties', 'agencia') ?>
    <?php if ($isRent): ?>
        <?= __('for rent', 'agencia') ?>
    <?php else: ?>
        <?= __('on sale', 'agencia') ?>
      <?php endif ?>





  </h1>
  <p>Retrouver tous nos biens sur le secteur de <strong>Montpellier</strong></p>
  <hr>

  <?php get_template_part('template-parts/searchform-property') ?>


    
      
      <?php $i = 0; 
      while(have_posts()): the_post(); ?>
        <?php set_query_var('property-large', $i ===7); ?>
        <?php get_template_part('template-parts/property') ?>
    <?php $i++; 
      endwhile;  ?>
   
  </div>

  <!-- Si c'est superieur à 1 dans ce cas la je veux que tu utilises la pagination standard
  dans le cas contraire je veux que tu affiches le bouton -->

  <?php if (get_query_var('paged', 1) > 1) : ?>
  <?= agencia_paginate() ?>
  <?php elseif ($nextPostLink = get_next_posts_link(__('More properties +', 'agencia'))) : ?>
  <div class="pagination">
      <?= $nextPostLink?>
   
  </div>
  <?php endif ?>


<?php get_footer() ?>