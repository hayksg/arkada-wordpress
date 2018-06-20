<?php get_header(); ?>

    <nav class="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
            <?php the_custom_logo( $blog_id ) ?>
          </div>
          <div class="col-lg-5 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-0 col-sm-offset-0" id="menu-div">
            <div class="wrap">
              <div class="wrap-block">
                <ul class="header-ul" id="menu">
                  <li><a href="#shop">Проекты</a></li>
                  <li><a href="#example">Примеры работ</a></li>
                  <li><a href="#review">Отзывы</a></li>
                  <li><a href="#contacts">Контакты</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
            <div class="wrap">
              <div class="wrap-block">
                <a href="tel:+79106287744" class="header-phone"><?php the_field('telephone'); ?></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
            <button type="submit" class="button-small popup-btn">
              Перезвоните мне
            </button>
          </div>
        </div>
      </div>
    </nav>

    <main class="main" style="background-image: url(<?php the_field(main_image); ?>);">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-md-offset-1">
            <h1><?php the_field('main_title'); ?></h1>
            <h2><?php the_field('subtitle'); ?></h2>
            <div class="main-feature">
              <img src="<?php bloginfo('template_url') ?>/site/img/main/icon-1@1x.png" alt="piggy">
              <p class="main-feature-p"><?php the_field('feature_1'); ?></p>
            </div>
            <div class="main-feature">
              <img src="<?php bloginfo('template_url') ?>/site/img/main/icon-2@1x.png" alt="clock">
              <p class="main-feature-p"><?php the_field('feature_2'); ?></p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="main-cta-block col-md-12 col-sm-12 col-xs-12">

            <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <b class="main-cta">Оставь заявку прямо сейчас</b>
              <b class="main-cta-sub">и получи <span>бесплатный расчет</span> и <span>входную дверь</span> в подарок<sup>*</sup>!</b>

              <?php echo do_shortcode( '[contact-form-7 id="152" title="Contact form 2" html_class="form"]' ); ?>

              <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                <p class="formp">Наш менеджер перезвонит Вам в течене 15 минут для консультации.<br>* при заказе строительства дома</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </main>

    <section class="features">
      <div class="container">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="media">
            <div class="media-left">
              <img class="media-object" src="<?php echo get_theme_file_uri('/site/img/features/1.png')?>" alt="Неизменная цена">
            </div>
            <div class="media-body">
              <h2 class="media-heading"><?php the_field('unchanged_price'); ?></h2>
              <p><?php the_field('unchanged_price_data'); ?></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="media">
            <div class="media-left">
              <img class="media-object" src="<?php bloginfo('template_url') ?>/site/img/features/2.png" alt="Неизменная цена">
            </div>
            <div class="media-body">
              <h2 class="media-heading"><?php the_field('team_of_specialists'); ?></h2>
              <p><?php the_field('team_of_specialists_data'); ?></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="media">
            <div class="media-left">
              <img class="media-object" src="<?php bloginfo('template_url') ?>/site/img/features/3.png" alt="Неизменная цена">
            </div>
            <div class="media-body">
              <h2 class="media-heading"><?php the_field('individual_approach'); ?></h2>
              <p><?php the_field('individual_approach_data'); ?></p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="shop" id="shop">
      <div class="container">
        <h2>Популярные проекты</h2>
        <ul class="shop-ul">
          <li><a class="active-color" href="#shop" id="a-1">Дома из бруса</a></li>
          <li><a href="#shop" id="a-2">Сруб</a></li>
          <li><a href="#shop" id="a-3">Каркасные дома</a></li>
          <li><a href="#shop" id="a-4">Кирпичные дома</a></li>
          <li><a href="#shop" id="a-5">Дома из блоков</a></li>
        </ul>
        
        <!-- Дома из бруса -->
        <div class="shop-cards active" id="shop-cards-1">

            <?php
                $args = array(
                    'posts_per_page'   => -1,
                    'category_name'    => 'houses_made_of_beams',
                    'orderby'          => 'date',
                    'order'            => 'ASC',
                    'post_type'        => 'post',
                    'suppress_filters' => true,
                );
                $posts = get_posts( $args );
            ?>

            <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="shop-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid', 'alt' => get_the_title() )) ?>
                        <?php else : ?>
                            <img src="<?php bloginfo('template_url') ?>/site/img/shop/no-image.jpg" alt="No image">
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                        <p>Площадь <?php the_field('area') ?> м<sup>2</sup></p>
                        <span><?php the_field('old_price') ?></span>
                        <b><?php the_field('new_price') ?> руб.</b>
                        <button type="submit" class="popup-btn button-small">Оставить заявку</button>
                    </div>
                </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <!-- Сруб -->
        <div class="shop-cards" id="shop-cards-2">

            <?php $args = array(
                    'posts_per_page'   => -1,
                    'category_name'    => 'log_house',
                    'orderby'          => 'date',
                    'order'            => 'ASC',
                    'post_type'        => 'post',
                    'suppress_filters' => true,
                );

                $log_houses = get_posts( $args ); 
            ?>

            <?php foreach ( $log_houses as $post ) : setup_postdata( $post );  ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="shop-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid', 'alt' => get_the_title() )) ?>
                        <?php else : ?>
                            <img src="<?php bloginfo('template_url') ?>/site/img/shop/no-image.jpg" alt="No image">
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                        <p>Площадь <?php the_field('area') ?> м<sup>2</sup></p>
                        <span><?php the_field('old_price') ?></span>
                        <b><?php the_field('new_price') ?> руб.</b>
                        <button type="submit" class="popup-btn button-small">Оставить заявку</button>
                    </div>
                  </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>

        </div>

        <!-- Каркасные дома -->
        <div class="shop-cards" id="shop-cards-3">

            <?php
                $args = array(
                    'posts_per_page'   => -1,
                    'category_name'    => 'prefabricated_houses',
                    'orderby'          => 'date',
                    'order'            => 'ASC',
                    'post_type'        => 'post',
                    'suppress_filters' => true,
                );
                $posts = get_posts( $args );
            ?>

            <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="shop-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid', 'alt' => get_the_title() )) ?>
                        <?php else : ?>
                            <img src="<?php bloginfo('template_url') ?>/site/img/shop/no-image.jpg" alt="No image">
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                        <p>Площадь <?php the_field('area') ?> м<sup>2</sup></p>
                        <span><?php the_field('old_price') ?></span>
                        <b><?php the_field('new_price') ?> руб.</b>
                        <button type="submit" class="popup-btn button-small">Оставить заявку</button>
                    </div>
                </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <!-- Кирпичные дома -->
        <div class="shop-cards" id="shop-cards-4">

            <?php
                $args = array(
                    'posts_per_page'   => -1,
                    'category_name'    => 'brick_houses',
                    'orderby'          => 'date',
                    'order'            => 'ASC',
                    'post_type'        => 'post',
                    'suppress_filters' => true,
                );
                $posts = get_posts( $args );
            ?>

            <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="shop-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid', 'alt' => get_the_title() )) ?>
                        <?php else : ?>
                            <img src="<?php bloginfo('template_url') ?>/site/img/shop/no-image.jpg" alt="No image">
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                        <p>Площадь <?php the_field('area') ?> м<sup>2</sup></p>
                        <span><?php the_field('old_price') ?></span>
                        <b><?php the_field('new_price') ?> руб.</b>
                        <button type="submit" class="popup-btn button-small">Оставить заявку</button>
                    </div>
                </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <!-- Дома из блоков -->
        <div class="shop-cards" id="shop-cards-5">

            <?php
                $args = array(
                    'posts_per_page'   => -1,
                    'category_name'    => 'houses_from_blocks',
                    'orderby'          => 'date',
                    'order'            => 'ASC',
                    'post_type'        => 'post',
                    'suppress_filters' => true,
                );
                $posts = get_posts( $args );
            ?>

            <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="shop-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid', 'alt' => get_the_title() )) ?>
                        <?php else : ?>
                            <img src="<?php bloginfo('template_url') ?>/site/img/shop/no-image.jpg" alt="No image">
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                        <p>Площадь <?php the_field('area') ?> м<sup>2</sup></p>
                        <span><?php the_field('old_price') ?></span>
                        <b><?php the_field('new_price') ?> руб.</b>
                        <button type="submit" class="popup-btn button-small">Оставить заявку</button>
                    </div>
                </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div>
  
      </div>
    </section>

    <?php $category = new WP_Query( array('category_name' => 'examples_of_our_works') ); ?>
    <?php if ( $category->have_posts() ) : ?>
        <section class="example" id="example">
            <div class="container">

                <h2>Примеры наших работ</h2>

                <div class="slider_ex">
                    <?php while ( $category->have_posts() ) : $category->the_post() ?>
                        <?php the_post_thumbnail( 'full', array('alt' => get_the_title()) ); ?>
                    <?php endwhile; ?>
                </div>

            </div>
        </section>

        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <section class="houses">
      <div class="house house-1">
        <div class="container">
          <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
            <h2>Каркасные дома</h2>
            <ul>
              <li>Низкая стоимость строительства.</li>
              <li>Низкие затраты на эксплуатацию.</li>
              <li>Можно строить в любое время года.</li>
              <li>Легкость и доступность внутренней отделки.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="house house-2">
        <div class="container">
          <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
            <h2>Кирпичные дома</h2>
            <ul>
              <li>Высокий уровень звукоизоляции.</li>
              <li>Повышенная теплоизоляция.</li>
              <li>Долговечность и прочность.</li>
              <li>Высокая противопожарная защита.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="house house-3">
        <div class="container">
          <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
            <h2>Блочные дома</h2>
            <ul>
              <li>Низкая стоимость.</li>
              <li>Безопасен для здоровья.</li>
              <li>Сохраняет тепло.</li>
              <li>Высокая противопожарная защита.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="upsell">
      <div class="container">
        <div class="row">
          <h2>Кровельные работы</h2>
          <p class="upsell-desc">Наша компания выполняет весь необходимый комплекс по монтажу кровли<br>из любых материалов:</p>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="upsell-block">
              <img src="<?php bloginfo('template_url') ?>/site/img/upsell/1.png" alt="Металлочерепица">
              <b>Металлочерепица</b>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="upsell-block">
              <img src="<?php bloginfo('template_url') ?>/site/img/upsell/2.png" alt="Мягкая гибкая черепица">
              <b>Мягкая гибкая черепица</b>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="upsell-block">
              <img src="<?php bloginfo('template_url') ?>/site/img/upsell/3.png" alt="Профнастил">
              <b>Профнастил</b>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="upsell-block">
              <img src="<?php bloginfo('template_url') ?>/site/img/upsell/4.png" alt="Шифер">
              <b>Шифер</b>
            </div>
          </div>
        </div>
        <p class="upsell-more">и много других материалов.</p>
        <div class="row">
          <div class="upsell-cta-block main-cta-block col-md-12 col-sm-12 col-xs-12">

            <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                <b class="main-cta">Мы бесплатно проконсультируем вас</b>
                <b class="main-cta-sub">по выбору <span>материала кровли</span> для Вашего дома!</b>

                <?php echo do_shortcode( '[contact-form-7 id="153" title="Contact form 3" html_class="form"]' ); ?>
                
                <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                  <p>Наш менеджер перезвонит Вам в течене 15 минут для консультации. </p>
                </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="review" id="review">
      <div class="container">
        <h2>Клиенты о нас</h2>
        <div class="row">
          <div class="slider_ex">

            <?php 
                $clients_about_us = get_posts( array(
                    'posts_per_page'   => -1,
                    'category_name'    => 'clients_about_us',
                ) );
            ?>

            <?php foreach ( $clients_about_us as $post ) : setup_postdata( $post ); ?>

                <div class="review-block">
                  <div class="media review-avatar">
                    <div class="media-left">
                      <?php the_post_thumbnail( 'full', array( 'alt' => get_field('name') ) ) ?>
                    </div>
                    <div class="media-body">
                      <p class="review-avatar-name"><?php the_field('name') ?></p>
                    </div>
                  </div>
                  <div class="review-block-text">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                  </div>
                </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>

          </div>
        </div>
      </div>
    </section>

    <div class="contacts" id="contacts">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <div class="contacts-block">
              <img src="<?php bloginfo('template_url') ?>/site/img/contacts/1.png" alt="">
              <a class="contacts-phone" href="tel:<?php the_field('telephone'); ?>"><?php the_field('telephone'); ?></a>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <div class="contacts-block">
              <img src="<?php bloginfo('template_url') ?>/site/img/contacts/2.png" alt="">
              <p><?php the_field('address'); ?></p>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <div class="contacts-block">
              <img src="<?php bloginfo('template_url') ?>/site/img/contacts/3.png" alt="">
              <a href="mailto:arkada62@yandex.ru"><?php the_field('email'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="map">
        <div class="acf-map">
     
            <?php $map = get_field( 'map_location' ); ?>
            <div class="marker" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>"></div>
            
        </div>
    </div>

    <section class="question" id="question">
      <div class="container">
        <h2>Остались вопросы?</h2>
        <a id="manager-call" href="#question">Задайте их менеджеру</a>
      </div>
    </section>

<?php get_footer(); ?>