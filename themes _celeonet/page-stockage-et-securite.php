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
    <div class="container-fluid top-contain-sct">
        <?php the_content();?>
    </div>
    <style type="text/css">
        .temoignages {
            padding-left: inherit !important;
            padding-right: inherit !important;
            background: url(<?php echo get_bloginfo( 'template_directory' );?>/images/back_services.jpg) top center no-repeat;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-position-x: center;
            background-position-y: top;
            background-size: auto auto;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: #333d47;
            margin-top: 70px;
            margin-bottom: 70px !important;

        }
        .vc_column_container>.vc_column-inner{padding: 0 !important;}
        .vc_row{margin-left:inherit !important; margin-right:inherit !important;}
        .container-fluid{padding: 0px;}
    </style>
</div>
<?php get_footer(); ?>