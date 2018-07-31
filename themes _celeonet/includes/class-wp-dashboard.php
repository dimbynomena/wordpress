<?php

class Replace_WP_Dashboard {
    protected static $_url_name;
   function __construct()
    {
            static::$_url_name = basename(THEMES_VACANCES);
            $this->set_hook_conf();
    }
    public function set_hook_conf(){
        //add_action('admin_init', array($this,'disable_dashboard_widgets'));
        //add_action( 'wp_dashboard_setup', array($this,'celeon_widget_dashboard' ));
        //add_action( 'admin_bar_menu',  array($this,'wp_admin_bar_wp_menu_new'), 11 );
        add_action( 'init', array($this,'rudr_custom_status_creation') );
        add_action('admin_footer-edit.php',array($this,'rudr_status_into_inline_edit'));
        add_filter( 'display_post_states',array($this,'custom_post_state'));
        add_action( 'post_submitbox_misc_actions', array($this,'custom_status_metabox') );
        add_action('save_post', array($this,'save_status'));
        add_action( 'admin_head', array($this,'status_css') );
        add_action( 'admin_init', array($this,'role_edit') );
        add_action( 'widgets_init', array($this,'celeon_custom_footer' ));
    }
    // public function disable_dashboard_widgets() { 
    //         remove_meta_box('dashboard_right_now', 'dashboard', 'core');
    //         remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
    //         remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
    //         remove_meta_box('dashboard_plugins', 'dashboard', 'core');
    //         remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
    //         remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
    //         remove_meta_box('dashboard_primary', 'dashboard', 'core');
    //         remove_meta_box('dashboard_secondary', 'dashboard', 'core');
    //         remove_meta_box('dashboard_activity', 'dashboard', 'core');
    //         remove_action( 'welcome_panel', 'wp_welcome_panel' );
    // }
    // public function celeon_widget_dashboard() {
    //     wp_add_dashboard_widget( 'wptutsplus_dashboard_welcome', 'Welcome', array($this,'celeon_widget_top_template' ));
    // }
    // public  function celeon_widget_top_template(){ 
    //      require_once THEMES_celeon . '/template-parts/widget-admin-dashboard.php';   
    // }
    // public function wp_admin_bar_wp_menu_new( $wp_admin_bar ) {

    //        $wp_admin_bar->remove_menu('wp-logo');

    //        $wp_admin_bar->add_menu( array(
    //                'id'         => 'wp-logo',
    //                'title'         => '<span class="ab-icon"></span>',
    //                'href'         => self_admin_url( '/' ),//replace this url with the one of your choice
    //                'meta'         => array(
    //                        'title' => __( 'About My Site' ),
    //                ),
    //        ) );
    // }

    public function rudr_custom_status_creation(){
      register_post_status( 'featured', array(
        'label'                     => _x( 'Featured', 'post' ), // I used only minimum of parameters
        'label_count'               => _n_noop( 'Featured <span class="count">(%s)</span>', 'Featured <span class="count">(%s)</span>'),
        'public'                    => true
      ));
    }
    public function rudr_status_into_inline_edit() { // ultra-simple example
      echo "<script>
      jQuery(document).ready( function() {
        jQuery( 'select[name=\"_status\"]' ).append( '<option value=\"featured\">Featured</option>' );
      });
      </script>";
    }
    public function custom_post_state( $states ) {
            global $post;
            $show_custom_state = get_post_meta( $post->ID, '_status' );
               if ( $show_custom_state ) {
                    $states[] = __( '<span class="custom_state '.strtolower($show_custom_state[0]).'">'.$show_custom_state[0].'</span>' );
                    }
            return $states;
    }
    public function custom_status_metabox(){
          global $post;
          $custom  = get_post_custom($post->ID);
          $status  = $custom["_status"][0];
          $i   = 0;
          $custom_status = array( 'Foward','Middle','Commit','Rejected');
          echo '<div class="misc-pub-section custom">';
          echo '<label>Status d\'emplacement: </label><select name="status">';
          echo '<option class="default">Status d\'emplacement</option>';
          echo '<option>-----------------</option>';
          for($i=0;$i<count($custom_status);$i++){
                  if($status == $custom_status[$i]){
                      echo '<option value="'.$custom_status[$i].'" selected="true">'.$custom_status[$i].'</option>';
                    }else{
                      echo '<option value="'.$custom_status[$i].'">'.$custom_status[$i].'</option>';
                    }
                  }
          echo '</select>';
          echo '<br /></div>';
        }
    public function save_status(){
            global $post;
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){ return $post->ID; }
            update_post_meta($post->ID, "_status", $_POST["status"]);
    }
    public function status_css() {
          echo '<style type="text/css">
          .default{font-weight:bold;}
          .custom{border-top:solid 1px #0cb541;}
          .custom_state{
                  font-size:9px;
                  color:#FFF;
                  background:#000;
                  padding:3px 6px 3px 6px;
                  -moz-border-radius:3px;
                  }
                  /* ----------------------------------- */
                  /*   change color of messages bellow            */
                  /* ----------------------------------- */
                  .foward{background:#4BC8EB ;color:#fff;}
                  .middle{background:#CB4BEB;color:#fff;}
                  .commit{background:#ceca25;color:#fff;}
                  .rejected{background:#FF0000;color:#fff;}
                  </style>';
  }
  public function role_edit(){
    $editor = get_role('editor');
    $editor->add_cap('edit_theme_options');
  }
  public function celeon_custom_footer() {
        register_sidebar( array(
            'name' => __( 'First Footer Widget Area', 'tutsplus' ),
            'id' => 'first-footer-widget-area',
            'description' => __( 'The first footer widget area', 'tutsplus' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );

        register_sidebar( array(
            'name' => __( 'Second Footer Widget Area', 'tutsplus' ),
            'id' => 'second-footer-widget-area',
            'description' => __( 'The second footer widget area', 'tutsplus' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => __( 'Third Footer Widget Area', 'tutsplus' ),
            'id' => 'third-footer-widget-area',
            'description' => __( 'The third footer widget area', 'tutsplus' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => __( 'Fourth Footer Widget Area', 'tutsplus' ),
            'id' => 'fourth-footer-widget-area',
            'description' => __( 'The fourth footer widget area', 'tutsplus' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => __( 'sub footer widget', 'tutsplus' ),
            'id' => 'five-footer-widget-area',
            'description' => __( 'Five widget copyright sub footer', 'tutsplus' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
      }
    
     
}
new Replace_WP_Dashboard();