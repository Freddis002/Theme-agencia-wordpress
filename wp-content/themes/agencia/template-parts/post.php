<article class="news">
                <?php if (has_post_thumbnail()): ?>
              <a href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>" class="news__image">
                
                <?php the_post_thumbnail() ?>
              </a>

                    <!-- Debut pour mettre une photo (evite le decalage des articles) !-->
                    <?php else: ?>
                        <img width="250" height="250" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mN8/+sXKwAIrQLqD9JEQAAAAABJRU5ErkJggg==">
                    <?php endif ?>

                    <!-- Fin !-->



              <div class="news__body">
                <header class="news__header">
                    <?php $categories = get_the_category();
                    
                    if (!empty($categories)):
                    ?>
                  <a class="news__tag" href="<?= get_term_link($categories[0]) ?>"> <?= $categories[0]->name ?></a>
                  <?php endif ?>
                  <a class="news__title" href="<?php the_permalink() ?>"><?php the_title() ?> </a>
                  <div class="news__date"><?= sprintf(__('Published on %s at %s', 'agencia'), get_the_date(), get_the_time()) ?> </div>
                </header>
                <div class="news__content">
                    <!-- Contient les differents paragraph !-->
                  <?php the_excerpt(); ?>
                    </div>
                <a href="<?php the_permalink() ?>" class="news__action">
                  Lire la suite
                  <?= agencia_icon('arrow') ?>
                  <svg class="icon">
                    <use xlink:href="sprite.14d9fd56.svg#arrow"></use>
                  </svg>
                </a>
              </div>
            </article>