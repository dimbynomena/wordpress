<?php get_header(); ?>
<div id="PageInterne">
    <div class="container-fluid thumbnail-background-pages" style="background-image: url('<?php  echo the_post_thumbnail_url(); ?>');">
        <div class="container text-center">
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
    <div class="container top-contain-sct">
        <div class="row">
            <div class="col-md-8">
                <?php the_content();?>
            </div>
            <div class="col-md-4">
                <?php /*$customBackground = get_field('fond_personnalise'); ?>
                <img src="<?php echo $customBackground['url']; ?>" />*/ ?>
                <?php $the_query = new WP_Query( 'category_name=adresse&showposts=9');?>
                <?php while ( $the_query->have_posts() ) :
                            $the_query->the_post();?>
                    <div class="adresse">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content();?>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
    <?php /*<div class="container top-contain-sct_">
        <div class="row">
            
        </div>
    </div>*/ ?>
    <style type="text/css">
        h4{color: #e73d50;
        font-size: 35px;
        font-family: "Reem Kufi";}
        .vc_row{
        margin-left:inherit !important;
        margin-right: inherit !important;
    </style>
</div>
<?php get_footer(); ?>