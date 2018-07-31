<!--    footer code to widget -->
        <footer id="Footer" class="clearfix" style="background-color: #242c36;">
            <div class="container">
            <div class="row">
                <div class="center-block" style="width:240px;">
                    <a href="<?php echo bloginfo('url') ?>">
                    <img class="img-responsive" src="<?php echo site_url("wp-content/themes/celeonet/images/logo_footer.png")?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>">
                    </a>
                </div>

            <div class="row" style="text-align: center;padding: 50px;">
                <div class="col-md-3">
                    <aside id="text-2" class="widget widget_text">
                        <div class="textwidget" style="text-align: left;">
                            <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                        </div>
                    </aside>
                </div>
                <div class="col-md-3">
                    <aside id="text-2" class="widget widget_text">
                        <div class="textwidget" style="text-align: left;">
                            <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                        </div>
                    </aside>
                </div>
                <div class="col-md-3">
                    <aside id="text-2" class="widget widget_text">
                        <div class="textwidget" style="text-align: left;">
                            <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
                        </div>
                    </aside>
                </div>
                <div class="col-md-3">
                    <aside id="text-2" class="widget widget_text">
                        <div class="textwidget" style="text-align: left;">
                            <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
                        </div>
                    </aside>
                </div>
            </div>
            </div>
        </footer>

<div class="footer-copyright">
    <p class="text-center">
        <?php dynamic_sidebar( 'five-footer-widget-area' ); ?>
    </p>
</div>

<script type="text/javascript" src="<?php echo site_url("wp-content/themes/celeonet/assets/");?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo site_url("wp-content/themes/celeonet/assets/");?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo site_url("wp-content/themes/celeonet/assets/");?>js/jssor.slider-20.mini.js"></script>
<script>
    //<![CDATA[
    window.mfn_slider_vertical = {
      autoplay: 50000
    };
    window.mfn_slider_portfolio = {
      autoPlay: 0
    };
    //]]>
</script>
<style type="text/css">
    p a, p a:visited {
    line-height: inherit;
    color: #fff;
    font-size: 14px;
    font-family: "Roboto", sans-serif;
    }
    p a, p a:hover {
    color: #fff;
    }
    .widget_nav_menu ul li a, .widget_meta ul li a, .widget_categories ul li a, .widget_archive ul li a, .widget_mfn_menu ul li a {
    color: #fff;
    background: inherit !important;
    font-size: 14px;
    font-family: "Roboto", sans-serif;
    }
</style>
<!-- Google Code for Ad&#39;s up - Conversions Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. -->
<script type="text/javascript">
    /* <![CDATA[ */
    goog_snippet_vars = function() {
        var w = window;
        w.google_conversion_id = 960897148;
        w.google_conversion_label = "BtI9CILd-GMQ_MCYygM";
        w.google_remarketing_only = false;
    }
    // DO NOT CHANGE THE CODE BELOW.
    goog_report_conversion = function(url) {
        goog_snippet_vars();
        window.google_conversion_format = "3";
        var opt = new Object();
        var conv_handler = window['google_trackConversion'];
        if (typeof(conv_handler) == 'function') {
            conv_handler(opt);
        }
    }
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion_async.js"></script>
<?php wp_footer(); ?>
</body>
</html>