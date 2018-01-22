<?php get_header(); ?>

<div class="content">
  <article <?php post_class('no-results not-found'); ?>>
    <header class="entry-header">
      <h1 class="entry-title"><?php _e('Nothing Found', 'frontierline'); ?></h1>
    </header>

    <div class="entry-content">
      <p><?php _e('Sorry, we looked everywhere, but we couldn’t find the page or file you were looking for. A few possible explanations:', 'frontierline'); ?></p>
      <ul>
        <li><?php _e('You may have followed an out-dated link or bookmark.', 'frontierline'); ?></li>
        <li><?php _e('If you entered the address by hand, you may have mistyped it.', 'frontierline'); ?></li>
        <li><?php _e('You might have just discovered an error. Congratulations!', 'frontierline'); ?></li>
      </ul>
      <p>
        Každopádně jsme vzbudili naši cvičenou pandu, aby to šla webmásterovi oznámit.
        Pokud by snad cestou opět usnula, dejte nám prosím o chybném odkazu vědět na <a href="mailto:info@mozilla.cz">náš e-mail</a> a my se s tím pokusíme něco udělat.
        Nemusíte to též řešit a místo toho použít vyhledávání po pravé straně stránky.
      </p>
      <div class="wp-caption aligncenter">
        <a href="https://commons.wikimedia.org/wiki/File:La_Palmyre_027.jpg">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/panda.jpg" alt="Spící panda" />
        </a>
        <p class="wp-caption-text">Autor: <a href="https://commons.wikimedia.org/wiki/User:Manchot">William Scot</a>, CC-BY-SA</p>
      </div>
    </div>
  </article>
</div>

<?php get_footer(); ?>

