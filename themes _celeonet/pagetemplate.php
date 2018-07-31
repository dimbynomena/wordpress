<?php
 /* Template Name: Full Width Page */
get_header(); ?>
<?php $customBackground = get_field('fond_personnalise'); ?>
<div class="container-fluid thumbnail-background-pages" style="min-height: 625px; background-size: cover !important;background-position: center 40%; background: url('<?php echo $customBackground['url']; ?>');">
       <div class="container text-center" style="margin-top: 150px;text-align:  left;color: #242c36;">
        <div class="row">
            <div class="hero">
                <?php $image = get_field('icon'); ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
            <h1 class="title_page_head_left">
                <?php echo get_the_title();?>
            </h1>
            <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                <div class="breadcrumbs_path">
                    <p class="header-text-top-desc"><?php the_field('description');?></p>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="container">
    <?php the_content();?>
</div>

<?php get_footer(); ?>