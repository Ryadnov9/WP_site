<?php
/*
Template Name: news
*/
get_header();
?>
<div class="main">
  <div class="container px-4 py-5" id="featured-3">
    <h1 class="header-md">Новини</h1>
    <div class="news-wrapper">
      <?php
      $news_query = new WP_Query(array(
          'post_type' => 'all-news',
          'posts_per_page' => -1,
      ));
      
      if ($news_query->have_posts()) :
          while ($news_query->have_posts()) : $news_query->the_post();
             
              $news_image = get_field('news_image'); 
              $short_description = get_field('short_description'); 
              $custom_link = get_field('custom_link'); 
      ?>
              <div class="feature col">
                  <div
                      class=" d-inline-flex align-items-center justify-content-center  fs-2 mb-3"
                      id="feature-icon"
                  >
                      <?php if ($news_image): ?>
                          <img src="<?php echo esc_url($news_image['url']); ?>" alt="<?php echo esc_attr($news_image['alt']); ?>" width="250" height="250" />
                      <?php endif; ?>
                  </div>
                  <p><?php echo esc_html($short_description); ?></p>
                  <a href="<?php echo $custom_link ? esc_url($custom_link) : get_permalink(); ?>" class="icon-link">Детальніше</a>
              </div>
      <?php
          endwhile;
          wp_reset_postdata();
      else :
          echo '<p>Новин поки немає.</p>';
      endif;
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
