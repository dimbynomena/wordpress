<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php wp_head(); ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <link rel="icon" href="/favicon.ico" />
  <!-- <link href="http://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet"> -->
  <!-- <link href="http://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-56473581-2', 'auto');
    ga('send', 'pageview');
  </script>

</head>
<body <?php body_class(); ?>>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid espace-admin">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <a href="https://extranet.celeonet.fr/connexion" target="_blank" class="pull-right">
                <img src="<?php echo site_url("wp-content/themes/celeonet/images/user.png")?>" class="client_"> Espace client
              </a>
            </div>
          </div>
      </div>
    </div>
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php the_custom_logo(array("class"=>"scale-with-grid")); ?>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <?php get_template_part( 'template-parts/nav', 'bar' ); ?>
        </ul>
      </div>
    </div>
  </nav>

  <style type="text/css">
    .navbar-default{
      background: transparent;
      border: none;
  }
  </style>