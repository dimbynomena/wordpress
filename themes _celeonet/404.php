<?php get_header(); ?>
<div id="PageInterne">
    <div class="container-fluid thumbnail-background-pages" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/illustration-404.png');">
        <div class="container text-center">
            <div class="row">
                <h1 class="title_page_head_left">
                    ERREUR 404<br/>
                    Cette page n'existe plus&nbsp;!
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid top-contain-sct">
      <div class="container txt-sct">
        <p style="text-align: center;">
          Il semble que cette page a été modifiée et n'existe plus...<br/>
          <a href="/" title="Hébergement Cloud Serveur dédiés">Rendez-vous en page d'accueil pour découvrir nos solutions d'hébergement web.</a>
        </p>
        <p><br/><br/></p>
      </div>
    </div>
    <style type="text/css">
        h4{color: #e73d50;
        font-size: 35px;
        font-family: "Reem Kufi";}
        .vc_row{
        margin-left:inherit !important;
        margin-right: inherit !important;
    </style>
</div>
<?php /*<section class="w100P ff2 ombreBloc pad10">
    <aside class="right w80P padL20 ff2" id="col_droite">
      <div class="ba noneMobile">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/404.png">
      </div>
      	 <!-- Start Container-->    
    <div class="container content-inner">
      <div class="row content">        
        <div class="col-md-12" style="text-align: center;padding-bottom: 60px;padding-top: 10px;">
          <!-- Start 404 TEXT-->        
          <section class="main">
            <h2 class="text404 animated Out">         
              <span class="text404-cut">404!
              </span>         
              <span class="text404-mid">Page Innéxistant!
              </span>         
              <span class="text404-cut">404!
              </span>       
            </h2>        
          </section>       
          <section class="desc animated Out">    
            <h4 class="not_found">Il semble que cette page n'existe plus. Voudrais-tu aller à la page <a href="<?php echo site_url();?>"><span style="
    color: #e73d50;font-weight: bold;
">d'acceuil</span></a></h4>
          </section>
          <section class="search animated Out">
      </section>
        </div> 
      </div> 
    </div>   
    </aside>
   
    
  </section>
<footer id="Footer" class="clearfix" style="background-color: #242c36;">
  <div class="container">
    <div class="row">
      <div class="center-block" style="width:240px;">
        <a href="<?php echo bloginfo('url') ?>">
          <img class="img-responsive" src="<?php echo site_url("wp-content/themes/celeonet/images/logo_footer.png")?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>">
        </a>
      </div>
    </div>
  </div>
</footer>
<style type="text/css">
  html {
    background-color: #242c36;
} 
</style>*/ ?>
<?php get_footer(); ?>