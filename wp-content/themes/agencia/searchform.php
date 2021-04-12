<form action="<?= esc_url(home_url('/')) ?>" class="form-group form-search">
      <input type="search" placeholder="<?= __('Search post', 'agencia') ?>" name="s" valeu="<?= get_search_query() ?>">
      <button type="submit">
          <?= agencia_icon('search'); ?>
        <svg class="icon">
          <use xlink:href="sprite.14d9fd56.svg#search"></use>
        </svg>
      </button>
    </form>