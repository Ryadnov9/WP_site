<?php get_header(); ?>
<main>
<div class="header">
      <div class="">
        <h3 class="main-header"><?php the_field('title'); ?></h3>
        <p class="subtext"><?php the_field('subtitle1'); ?></p>
        <p class="subtext"><?php the_field('subtitle2'); ?></p>
      </div>
    </div>
    <div class="container px-4 py-5 container-main" id="featured-3">
      <h2 class="pb-2 border-bottom"></h2>
      <p class="intro" id="intro"><?php the_field('intro'); ?></p>
      <div
        class="row g-4 py-5 row-cols1-1 row-cols-lg-4 align-items-stretch"
        id="main"
      >
        <div class="feature col" id="feature">
          <div
            class="feature-icon d-inline-flex align-items-center justify-content-center  fs-2 mb-3"
          >
            <svg class="bi" width="8em" height="8em" viewBox="0 0 300 300">
              <image
                href="<?php the_field('photo1'); ?>"
                x="0"
                y="0"
                width="300"
                height="300"
              />
              <use xlink:href="#collection" />
            </svg>
          </div>
          <h3 class="fs-2 text-body-emphasis text-center" id="name">
            Співаковський Олександр Володимирович
          </h3>
          <p class="text-center"><?php the_field('Spivakovsky'); ?></p>
          <a
            href="https://www.kspu.edu/About/UniversityAdministration/ABC.aspx?lang=uk"
            class="icon-link"
          >
            Детальніше
          </a>
        </div>
        <div class="feature col" id="feature">
          <div
            class="feature-icon d-inline-flex align-items-center justify-content-center  fs-2 mb-3"
          >
            <svg class="bi" width="8em" height="8em" viewBox="0 0 300 300">
              <image
                href="<?php the_field('photo2'); ?>"
                x="0"
                y="0"
                width="300"
                height="300"
              />
              <use xlink:href="#collection" />
            </svg>
          </div>
          <h3 class="fs-2 text-body-emphasis" id="name">
            Курило Віталій Семенович
          </h3>
          <p><?php the_field('Kurilo'); ?></p>
          <a
            href="https://luguniv.edu.ua/?page_id=3144&lang=en"
            class="icon-link"
          >
            Детальніше
          </a>
        </div>
        <div class="feature col" id="feature">
          <div
            class="feature-icon d-inline-flex align-items-center justify-content-center  fs-2 mb-3"
          >
            <svg class="bi" width="8em" height="8em" viewBox="0 0 300 300">
              <image
                href="<?php the_field('photo3'); ?>"
                x="0"
                y="0"
                width="300"
                height="300"
              />
              <use xlink:href="#collection" />
            </svg>
          </div>
          <h3 class="fs-2 text-body-emphasis" id="name">
            Караман ОленаЛеонідівна
          </h3>
          <p><?php the_field('Karaman'); ?></p>
          <a
            href="https://luguniv.edu.ua/?page_id=3144&lang=en"
            class="icon-link"
          >
            Детальніше
          </a>
        </div>
        <div class="feature col" id="feature">
          <div
            class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3"
          >
            <svg class="bi" width="8em" height="8em" viewBox="0 0 300 300">
              <image
                href="<?php the_field('photo4'); ?>"
                x="0"
                y="0"
                width="300"
                height="300"
              />
              <use xlink:href="#collection" />
            </svg>
          </div>
          <h3 class="fs-2 text-body-emphasis" id="name">
            Омельченко Світлана Олександрівна
          </h3>
          <p><?php the_field('Omelchenko'); ?></p>
          <a
            href="https://ddpu.edu.ua/index.php/home/rektorat/414-2013-04-12-11-35-39"
            class="icon-link"
          >
            Детальніше
          </a>
        </div>
        <div class="feature col" id="feature">
          <div
            class="feature-icon d-inline-flex align-items-center justify-content-center  fs-2 mb-3"
          >
            <svg class="bi" width="8em" height="8em" viewBox="0 0 300 300">
              <image
                href="<?php the_field('photo5'); ?>"
                x="0"
                y="0"
                width="300"
                height="300"
              />
              <use xlink:href="#collection" />
            </svg>
          </div>
          <h3 class="fs-2 text-body-emphasis" id="name">
            Цимбал Ірина Іванівна
          </h3>
          <p><?php the_field('Cymbal'); ?></p>
          <a
            href="https://loippo.edu.ua/blog-top/kerivnytstvo"
            class="icon-link"
          >
            Детальніше
          </a>
        </div>
        <div class="feature col" id="feature">
          <div
            class="feature-icon d-inline-flex align-items-center justify-content-center  fs-2 mb-3"
          >
            <svg class="bi" width="8em" height="8em" viewBox="0 0 300 300">
              <image
                href="<?php the_field('photo6'); ?>"
                x="0"
                y="0"
                width="300"
                height="300"
              />
              <use xlink:href="#collection" />
            </svg>
          </div>
          <h3 class="fs-2 text-body-emphasis" id="name">
            Фалько Наталя Миколаївна
          </h3>
          <p><?php the_field('Falco'); ?></p>
          <a
            href="https://inst.mdpu.org.ua/navchalno-naukovyj-instytut-sotsialno-pedagogichnoyi-ta-mystetskoyi-osvity/kafedra-psihologiyi/sklad-kafedry-psyhologiyi/falko-natalya-mykolayivna/"
            class="icon-link"
          >
            Детальніше
          </a>
        </div>
        <div class="feature col" id="feature">
          <div
            class="feature-icon d-inline-flex align-items-center justify-content-center  fs-2 mb-3"
          >
            <svg
              class="bi"
              width="8em"
              height="8em"
              viewBox="0 0 300 300"
              preserveAspectRatio="xMidYMid slice"
            >
              <image
                href="<?php the_field('photo7'); ?>"
                x="0"
                y="0"
                width="300"
                height="300"
                preserveAspectRatio="none"
              />
              <use xlink:href="#collection" />
            </svg>
          </div>
          <h3 class="fs-2 text-body-emphasis" id="name">
            Богданов Ігор Тимофійович
          </h3>
          <p><?php the_field('Bogdanov'); ?></p>
          <a
            href="https://bdpu.org.ua/management-university/bogdanov/"
            class="icon-link"
          >
            Детальніше
          </a>
        </div>
      </div>

      <hr class="hr" />

      <div class="container px-4 py-4" id="featured-3" id="py-5">
        <h1 class="header-md">Візія</h1>
        <div class="text" id="text">
          <p class="text-1" id="text-1"><?php the_field('visia'); ?></p>
        </div>
      </div>
      <hr class="hr" />
      <div class="container px-4 py-4" id="featured-3">
        <h1 class="header-md">Мета</h1>
        <div class="text" id="text">
          <p class="text-1" id="tex-1"><?php the_field('meta'); ?></p>
        </div>
      </div>
      <hr class="hr" />
      <div
        class="container px-4 py-4"
        id="featured-3 featured-2 direction"
        style="margin-top: 53px"
      >
        <h1 class="header-md">Напрямки</h1>
        <div class="text" id="text">
          <ul class="list">
            <p class="text-2" id="text-2">Напрямки діяльності:</p>
            <li class="li"><?php the_field('nap1'); ?></li>
            <li class="li"><?php the_field('nap2'); ?></li>
            <li class="li"><?php the_field('nap3'); ?></li>
            <li class="li"><?php the_field('nap4'); ?></li>
          </ul>
        </div>
      </div>

      <hr class="hr" />
      <h3 class="fs-2 text-body-emphasis" id="news-hed">Останні новини</h3>
      



      <div id="newsSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
  <div class="carousel-inner">
    <?php
    // Отримуємо всі новини (пости)
    $news_query = new WP_Query([
        'post_type' => 'post', // Тип записів (новини)
        'posts_per_page' => 10, // Кількість новин
    ]);

    if ($news_query->have_posts()) :
        $active_class = 'active'; // Для першого слайда додаємо клас active
        while ($news_query->have_posts()) : $news_query->the_post();
            // Отримуємо додаткові поля через ACF
            $news_image = get_field('news_image'); // Поле для зображення
            $news_description = get_field('news_description');
            $link = get_field('link'); // Поле для зовнішнього лінку
            // Якщо лінк не вказаний, використовуємо стандартну пермалінк запису
            $post_link = $link ? $link : get_permalink(); 
    ?>
            <div class="carousel-item <?php echo $active_class; ?>">
                <img src="<?php echo esc_url($news_image); ?>" class="d-block w-100" alt="<?php the_title(); ?>" />
                <div class="carousel-caption d-block">
                    <a href="<?php echo esc_url($post_link); ?>" class="news-1">
                        <h5><?php the_title(); ?></h5>
                    </a>
                    <p class="text-news"><?php echo esc_html($news_description); ?></p>
                </div>
            </div>
    <?php
            $active_class = ''; // Скидаємо active для наступних слайдів
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Новини поки що відсутні.</p>';
    endif;
    ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#newsSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Попередня</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#newsSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Наступна</span>
  </button>
</div>




      <div class="ratio ratio-21x9 map">
        <iframe
          class="map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2739.0487661724023!2d32.62753631195133!3d46.64555172099739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c41aabdda30403%3A0x65d34033537796fb!2z0KXQtdGA0YHQvtC90YHRjNC60LjQuSDQtNC10YDQttCw0LLQvdC40Lkg0YPQvWnQstC10YDRgdC40YLQtdGC!5e0!3m2!1sru!2sru!4v1731947233454!5m2!1sru!2sru"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>


<?php get_footer(); ?>
