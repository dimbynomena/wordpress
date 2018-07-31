<?php
global $tw_template_args;

$atts          = $tw_template_args['atts'];
$testimonial   = $tw_template_args['testimonial'];
$widget_number = $tw_template_args['widget_number'];

$char_limit    	= $atts['char_limit'];
$content_more  	= apply_filters( 'tw_content_more', esc_html__( '…', 'testimonials-widget' ) );
$content_more  .= Axl_Testimonials_Widget::$tag_close_quote;
$do_content    	= ! $atts['hide_content'] && ! empty( $testimonial['testimonial_content'] );
$do_title		= ! $atts['hide_source_title'] && ! empty( $testimonial['testimonial_source'] );
$use_quote_tag 	= $atts['use_quote_tag'];

if ( $do_content ) {
	$content = $testimonial['testimonial_content'];
	$content = Axl_Testimonials_Widget::format_content( $content, $widget_number, $atts );
	if ( $char_limit ) {
		$content = Axl_Testimonials_Widget::testimonials_truncate( $content, $char_limit, $content_more );
		$content = force_balance_tags( $content );
	}

	$content = apply_filters( 'tw_content', $content, $widget_number, $testimonial, $atts );
	$content = make_clickable( $content );

	//Prepand Title to content if "Hide Title Above Content?" is active from Testimonials Widget settings.
	if ( $do_title && ! is_single() ) {
		$testimonial_title 		= $testimonial['testimonial_source'];
		$testimonial_title_html	= '<span class="list-title">' . $testimonial_title . '</span><br/>';
		$content 				= $testimonial_title_html . $content;
	}

	if ( ! $use_quote_tag ) {
		?>
		<div class="col-md-3 containerInfosClient hidden-md-down">
			<?php
			$Logo="";
			$Logo=get_field( "logo_de_lentreprise", $testimonial['post_id'] );
			if ($Logo!='') {
				?>
				<div class="ContainerLogoTerm"><img class="LogoTem" src="<?php echo $Logo; ?>"/></div>
				<?php
			}
			$Auteur="";
			$Auteur=get_field( "auteur_du_temoignage", $testimonial['post_id'] );
			if ($Auteur!='') {
				?>
				<div class="AuteurTem"><?php echo $Auteur; ?></div>
				<?php
			}
			?>
		</div>
		<div class="col-md-9 containerBlockquote">
			<blockquote>
				<img class="img-responsive quote-top" src="/celeonet-livrable/wp-content/themes/celeonet/images/quote_top.png"><?php echo $content; ?>
				<?php
				$FichierPDF="";
				$FichierPDF=get_field( "fichier_pdf_du_temoignage", $testimonial['post_id'] );
				if ($FichierPDF!='') {
					?>
					<div><a class="SuiteTem" style="width:auto;display:inline-block;padding:10px;height:auto;" href="<?php echo $FichierPDF; ?>" target="_blank">Lire tout le témoignage</a></div>
					<?php
				}
				?>
				<img class="img-responsive quote-bottom" src="/celeonet-livrable/wp-content/themes/celeonet/images/quote_bottom.png">
			</blockquote>
		</div>
		<div class="containerInfosClientMobile hidden-lg-up">
			<?php
			$Auteur="";
			$Auteur=get_field( "auteur_du_temoignage", $testimonial['post_id'] );
			if ($Auteur!='') {
				?>
				<div class="AuteurTem mt-3"><?php echo $Auteur; ?><span class="HomeSeule"><br/><?php echo $testimonial['testimonial_source']; ?></span></div>
				<?php
			}
			$Logo="";
			$Logo=get_field( "logo_de_lentreprise", $testimonial['post_id'] );
			if ($Logo!='') {
				?>
				<div class="ContainerLogoTerm"><img class="LogoTem" src="<?php echo $Logo; ?>"/></div>
				<?php
			}
			?>
		</div>
	<?php } else { ?>
		<p><?php echo $content; ?></p>
	<?php
	}
}
?>
