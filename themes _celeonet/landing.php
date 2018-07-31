<?php 
/*
Template Name: Landing
Template Post Type: page
*/
?>
<?php get_header(); ?>
<div id="PageInterne" class="PageLanding">
	<div class="container-fluid thumbnail-background-pages" style="background-image: url('<?php  echo the_post_thumbnail_url(); ?>');">
        <div class="container text-center">
            <div class="row">
            	<a href="/" title="Hébergeur cloud et serveurs infogérés">
					<img id="Logo" src="/wp-content/uploads/2018/05/cropped-cropped-logo-2-1.png" title="Hébergeur cloud et serveurs infogérés" alt="Logo Celeonet"/>
        		</a>
                <h1 class="title_page_head_left">
                    <?php
                    $Titre="";
					$Titre=get_field( "titre_de_la_page", get_the_ID());
					if ($Titre!='') {
						echo $Titre;
					}
                    ?>
                </h1>
            </div>
        </div>
    </div>
	<?php /*<div class="container-fluid top-contain-sct txt-sct container">
        <div class="row">
        	<div class="col-md-6">
        		<a href="/" title="Hébergeur cloud et serveurs infogérés">
        			<?php
                    $Logo="";
					$Logo=get_field( "logo_celeonet", get_the_ID());
					if ($Logo!='') {
						?>
						<img id="Logo" src="<?php echo $Logo; ?>" title="Hébergeur cloud et serveurs infogérés" alt="Logo Celeonet"/>
						<?php 
					}
                    ?>
        		</a>
                <h1 class="title_page_head_left">
                	<img src="/wp-content/themes/celeonet/images/firewallapplicatifninja.png"/>
                    <div><?php
                    $Titre="";
					$Titre=get_field( "titre_de_la_page", get_the_ID());
					if ($Titre!='') {
						echo $Titre;
					}
                    ?></div>
                </h1>
            </div>
            <div class="col-md-6 formulaire">
            	<div class="Telephones">
            		<?php
            		$Tel1="";
					$Tel1=get_field( "telephone_1", get_the_ID() );
					if ($Tel1!='') {
						echo $Tel1;
					}
					$Tel2="";
					$Tel2=get_field( "telephone_2", get_the_ID() );
					if ($Tel2!='') {
						echo $Tel2;
					}
            		?>
            	</div>
            	<div>
		    		<?php
	                $Formulaire="";
					$Formulaire=get_field( "formulaire", get_the_ID() );
					if ($Formulaire!='') {
						echo do_shortcode($Formulaire);
					}
	                ?>
	            </div>
	    	</div>
        </div>
    </div> */ ?>
	<div id="ContenuLanding" class="container-fluid top-contain-sct txt-sct container">
		<?php the_post(); ?>
	    <?php the_content();?>  	
	</div>
	<style>
		.navbar {
			display: none;
		}
	</style>
</div>
<?php get_footer(); ?>
