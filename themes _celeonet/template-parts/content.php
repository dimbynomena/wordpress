<section id="features">
    <div class="features-bg">
        <div class="container">
            <div class="h3_BfrAfter">
                <span class="titre_section_page">
                <?php echo get_theme_mod("text_field_id");?>
                </span>
            </div>
            <div class="row margin-bottom-70">
                <?php $middle = new WP_Query(array('post_type' => 'page','post_status'=>'publish','posts_per_page' =>9,'meta_value' => 'Middle','order' => 'ASC'));
                    while($middle->have_posts()): $middle->the_post();
                    ?>
                <div class="col-md-6 md-margin-bottom-70 UnBlocSolution">
                    <div class="row">
                        <div class="features">
                            <div class="col-md-3 block-center-icon-resp">
                                <img src="<?php  echo the_post_thumbnail_url();?>">
                            </div>
                            <div class="col-md-9">
                                <div class="features-in">
                                    <div class="features-in">
                                        <h3 class="title_s"><a href="<?php echo get_field( "lien_en_savoir_plus", get_the_ID() ); ?>"><?php echo get_the_title();?></a></h3>
                                        <p class="content_s"><?php echo substr(get_the_content(), 0,200);?></p>
                                        <div class=""><a href="<?php echo get_field( "lien_en_savoir_plus", get_the_ID() ); ?>" class="btn-brd-celeon">En savoir plus</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
</section>
<br/>
<br/>
<br/>
<section id="Vousetes" class="row">
    <div class="container">
        <div class="h3_BfrAfter">
            <span class="titre_section_page">
            <?php echo get_theme_mod("slug_field_id"); ?>
            </span>
        </div>
        <div class="paragraphe">
            <span class="descriptions">
                <?php echo get_theme_mod("section_id_4"); ?>
            </span>
        </div>
    </div>
    <div class="row" id="btm-rows">
        <div class="container">
            <?php $middle = new WP_Query(array('post_type' => 'page','post_status'=>'publish','posts_per_page' =>9,'meta_value' => 'Foward','order' => 'ASC'));
                while($middle->have_posts()): $middle->the_post();
                ?>
            <div class="col-md-4">
                <img src="<?php  echo the_post_thumbnail_url();?>" class="img_btm">
                <br/>
                <div class="center_bloc"><a href="<?php echo get_field( "lien_en_savoir_plus", get_the_ID() ); ?>" class="btn-brd-celeon title_val"><?php echo get_the_title();?></a></div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
</section>
<br/>
<br/>
<div id="Temoignages" class="container-fluid temoignages temoignageAccueil">
    <div class="container cont-temoignages">
        <div class="row">
            <div class="col-md-12">
                <blockquote id="TemoignageHome" class="blc-temoignage">
                    <?php /*<img class="img-responsive quote-top" src="<?php echo site_url("wp-content/themes/celeonet/images/")?>quote_top.png">*/ ?>
                    <?php //echo do_shortcode("[testimonials ids='234']"); ?>
                    <?php echo do_shortcode('[testimonials category="non-classe" limit=1]'); ?>
                </blockquote>
            </div>
            
            <div class="col-md-12">
                <a class="btn-brd-celeon temoignages" href="/avis-hebergement">Lire tous les témoignages</a>
            </div>
        </div>
    </div>
</div>
<br/>
<br/>
<?php /*<div class="section " style="padding-bottom: 0px;background-color: #FEFEFE;">
    <div class="container">
        <div class="items_group clearfix">
            <div class="column one column_quick_form">
                <div class="quick_form">
                    <div class="h3_BfrAfter">
                        <span class="titre_section_page">
                        <?php echo get_theme_mod("section_id_3"); ?>
                        </span>
                    </div>
                    <div role="form" class="wpcf7" id="wpcf7-f9796-p4311-o1" dir="ltr">
                        <div class="screen-reader-response">
                        </div>
                        <!-- use jssor.slider-20.debug.js instead for debug -->
                        <script>
                            jQuery(document).ready(function($) {
                              var jssor_1_options = {
                                $AutoPlay: true,
                                $Idle: 0,
                                $AutoPlaySteps: 4,
                                $SlideDuration: 6000,
                                $SlideEasing: $Jease$.$Linear,
                                $PauseOnHover: 4,
                                $SlideWidth: 250,
                                $Cols: 7
                              };
                              var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
                              //responsive code begin
                              //you can remove responsive code if you don't want the slider scales while window resizes
                              function ScaleSlider() {
                                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                                if (refSize) {
                                  refSize = Math.min(refSize, 1240);
                                  jssor_1_slider.$ScaleWidth(refSize);
                                } else {
                                  window.setTimeout(ScaleSlider, 30);
                                }
                              }
                              ScaleSlider();
                              $(window).bind("load", ScaleSlider);
                              $(window).bind("resize", ScaleSlider);
                              $(window).bind("orientationchange", ScaleSlider);
                              //responsive code end
                            });
                        </script>
                        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 980px; height: 70px; overflow: hidden; visibility: hidden;">
                            <!-- Loading Screen -->
                            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                <div style="position:absolute;display:block;background:url('<?php echo site_url("wp-content/themes/celeonet/");?>img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                            </div>
                            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 70px; overflow: hidden;">
                                <?php $clients = new WP_Query(array('post_type' => 'client','post_status'=>'public','order' => 'desc')); ?>
                                <?php while($clients->have_posts()): $clients->the_post();?>
                                <div class="unClient" style="display: none;">
                                    <img class="unClientIMG" data-u="image"  src="<?php  echo the_post_thumbnail_url();?>" />
                                </div>
                                <?php endwhile;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>*/ ?>
	<div id="ReferencesClientsHome" class="section" style="padding-bottom: 0px; background-color: #FEFEFE;">
		<div class="container">
			<div class="items_group clearfix">
				<div class="column one column_quick_form">
					<div class="quick_form">
						<div class="h3_BfrAfter">
							<span class="titre_section_page">
								<?php echo get_theme_mod('section_id_3'); ?>
							</span>
						</div>
						<div>
							<?php echo do_shortcode('[logo_showcase id="515"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br/>
<br/>
<style type="text/css">
    .temoignages{
    padding: 00px 0 30px 0;
    background: url('<?php echo site_url("wp-content/themes/celeonet/images/back_temoignages.jpg")?>') top center no-repeat;
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
    margin-top:100px;
    }
</style>