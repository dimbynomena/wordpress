<?php get_header(); ?>
<?php
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                  query_posts(array(
                  'post_type'      => 'post',
                  'ID'      => 'post_id',
                  'post_status' =>  'publish',
                  'paged'          => $paged,
                  'posts_per_page' => 4
                  ));
                ?>
<div id="PageInterne">
  <div class="container-fluid thumbnail-background-pages" style="background-image: url('<?php  echo the_post_thumbnail_url(); ?>');">
    <div class="container text-center">
      <div class="row">
        <div class="hero">
          <?php $image = get_field('icon'); ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
        <h3 class="title_page_head_left">
          <?php echo get_the_title();?>
        </h3>
        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
        <div class="breadcrumbs_path">
          <p class="header-text-top-desc"><?php the_field('description');?></p>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="container-fluid top-contain-sct">
    <h1 class="page-title">Actualités</h1>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="col-md-6">
                  <div class="post-title">
                    <h3 class="title">
                      <a href="<?php the_permalink() ?>" class="about_h2"">
                      <?php the_title() ?>
                      </a>
                    </h3>
                  </div>

      <div class="row">
        <div class="separator-2"></div>
        <br>
        <div class="post-info col-md-12">
          <div class="date">
            <span class="month"><?php the_time('M'); ?></span>
            <span class="day"><?php the_time('d'); ?></span>
            <span class="month"><?php the_time('Y'); ?></span>
          </div>
        </div>
        <span style="color: #e3072A;"><?php the_field('label'); ?></span>
        <div class="timeline-item">
          <!-- blogpost start -->
          <article class="blogpost shadow light-gray-bg bordered">
            <div class="img-responsive">
              <?php the_post_thumbnail() ?>
            </div>
            <div class="blogpost-content">
              <p>
                <?php $content =  strip_tags(get_the_content('[...]')); echo wp_trim_words($content, 50, '... ')?>
              </p>
              <br>
              <div class="comments">
                <a href="<?php the_permalink(); ?>">
                <?php comments_number('0 Comment', '1 Comment', '% Comments'); ?>
                </a>
              </div>
              <p style="
    background: #dddddd;
    height:  auto;
    font-size:  15px;
    padding: 12px;
">
                <a class="continuer_lecture" href="<?php the_permalink(); ?>"> Lire plus → </a>
              </p>
            </div>
          </article>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>
<?php get_footer(); ?>
