<?php
define('THEMES_celeon', dirname(__FILE__));

if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}
require_once( THEMES_celeon ."/template-parts/simple_walker.php");
require_once THEMES_celeon . '/includes/class-themes-config.php';
require_once THEMES_celeon . '/includes/class-wp-dashboard.php';

global $stp;

$stp = new WP_Themes();

add_theme_support( 'title-tag' );

function config_exc_get_meta( $value ) {
	global $post;
	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}
function vacances_excursion_box() {
	add_meta_box('vacances-banner-animation',__( 'CONFIGURATION', 'vacances' ),'vacances_admin_exc_meta','page','normal','default');
}
function blog_my_pagination(){
	
}
add_action( 'add_meta_boxes', 'vacances_excursion_box' );
function vacances_admin_exc_meta( $post) {
	wp_nonce_field( 'vacances_exc_nonce', 'data_ex_nonce' ); ?>
		<div class="col-md-6">
			<p>
				<p>
		        <label for="case-study-bg" class="lacuna2-row-title">Icon de Présentation</label>
		        <br>
				<img style="max-width:200px;height:auto;" id="meta-image-preview" src="<?php echo config_exc_get_meta( 'meta-image' ); ?>" />
			        <input type="text" class="form-control data_class" name="meta-image" id="meta-image" class="meta_image" value="<?php echo config_exc_get_meta( 'meta-image' ); ?>" />
			        <input type="button" id="meta-image-button" class="button" value="Icon" />
			    </p>
			</p>
	</div>
</p>
<script>
jQuery('#meta-image-button').click(function() {
    var send_attachment_bkp = wp.media.editor.send.attachment;
    wp.media.editor.send.attachment = function(props, attachment) {
        jQuery('#meta-image').val(attachment.url);
	jQuery('#meta-image-preview').attr('src',attachment.url);
        wp.media.editor.send.attachment = send_attachment_bkp;
    }
    wp.media.editor.open();
    return false;

});
</script>
<?php
}
function vacances_exc_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['data_ex_nonce'] ) || ! wp_verify_nonce( $_POST['data_ex_nonce'], 'vacances_exc_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;
	
	if ( isset( $_POST['meta-image'] ) )
		update_post_meta( $post_id, 'meta-image', esc_attr( $_POST['meta-image'] ) );
}
add_action( 'save_post', 'vacances_exc_save' );
/*
	Usage: config_exc_get_meta( 'duree' )
	Usage: config_exc_get_meta( 'de' )
	Usage: config_exc_get_meta( 'le' )
	Usage: config_exc_get_meta( 'price' )
	Usage: config_exc_get_meta( 'classe' )
	config_exc_get_meta( 'meta-image' );
*/


