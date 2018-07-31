<?php get_header(); ?>
<?php get_template_part( 'template-parts/slider', 'none' ); ?>
<div id="Content">
	<div class="content_wrapper clearfix">
		<div class="sections_group">
			<div class="section " style="padding-top:0px; padding-bottom:0px; background-color:">
				<div class="section_wrapper clearfix">
					<div class="items_group clearfix">
						<div class="column one-second column_column" style=" text-align:justify; width: 98% !important;">
						<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
						
							<h3 class="title"><?php echo get_the_title();?></h3>
							<p style="display: inline;">
								<!-- <img src="<?php  //echo the_post_thumbnail_url(); ?>" class="hover-blue" style="width: 40%;float: left;margin-left: 0px;margin-right: 7px;"> -->
								<?php echo get_the_content();?>
							</p>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>