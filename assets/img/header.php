<?php
/**
 * Header Template

 * @file           header.php
 
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!doctype html>

<html>
<head>
<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"UUA8n1a4KM10em", domain:"aviation-defence-universe.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript>
<img src="http://certify.alexametrics.com/atrk.gif?account=UUA8n1a4KM10em" style="display:none" height="1" width="1" alt="" />
</noscript>
<!-- End Alexa Certify Javascript -->

<!-- Alex AMP Code-->
<!-- Start Alexa AMP Certify Javascript -->
<script async custom-element="amp-analytics" src="http://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
<amp-analytics type="alexametrics">
  <script type="application/json"> {"vars": { "atrk_acct": "UUA8n1a4KM10em", "domain": "aviation-defence-universe.com" }}</script>
</amp-analytics>
<!-- End Alexa AMP Certify Javascript -->
<!-- End Alexa AMP Code-->
<meta http-equiv="X-Frame-Options" content="deny">
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
<?php wp_title( '&#124;', true, 'right' ); ?>
</title>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "http://www.aviation-defence-universe.com",
  "name": "Aviation & Defence Universe",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91-9810633540",
    "contactType": "ADU Advertise Team"
  }
}
</script>
<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/core/images/favicon.ico" />
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/core/css/bootstrap.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
<link rel="alternate" href="https://www.aviation-defence-universe.com/" hreflang="en-us" />
<meta name="msvalidate.01" content="F6FFF13469A4CD84A00125048FE0692B" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69070042-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- Crausal-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php wp_head(); ?>
</head><body <?php body_class(); ?>>
<div class="header-static">
  <div class="headline_full">
    <div class="headline grid">
      <h2><span>H</span>eadlines</h2>
      <img src="<?php bloginfo(template_directory); ?>/core/images/Headlines-icon.jpg" alt="aviation-defence-universe" > </div>
    <style>
  .news-ticker ul li {display: inline;}  
   .news-ticker ul li a {color: #fff;}
    .news-ticker ul { margin:0 auto;}
     
      </style>
    <div class="grid  news col-540 news-ticker">
      <ul>
        <marquee>
        <?php
global $post;
$args = array( 'posts_per_page' => 10, 'offset'=> 0, 'category' => -10000 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <li><a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          ||</span></a> </li>
        <?php endforeach; 
wp_reset_postdata();?>
        </marquee>
      </ul>
    </div>
    <div class="grid-right">
      <?php get_search_form();?>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="inner">
    <div class="row">
      <div class="col-md-3">
        <div id="logo">
          <div class="inner-logo"> <a href="/"> <img src="https://www.aviation-defence-universe.com/wp-content/uploads/2017/04/adu-logo.png"> </a> </div>
          <!-- end of #logo --></div>
      </div>
      <div class="col-md-2" style="margin:5px 0 0 0">
        <div style="background:#0e5f8b;text-align:center;color:#fff;padding:10px 0;">
              <center>
               <a style="color:#fff; font-size:16px;font-weight:bold;text-transform:uppercase" 
			  href="/aero-india-2019/"> Aero India 2019

			  </a>     <br/>          

              <a style="color:#fff; font-size:16px;font-weight:bold;text-transform:uppercase" 
			  href="/aero-india-video-gallery-2019/"> Video Gallery

			  </a> <br/><a style="color:#fff; font-size:16px;font-weight:bold;text-transform:uppercase" 
			  href="/aero-india-photo-gallery-2019/"> Photo Gallery

			  </a> <br/>
<a style="color:#fff; font-size:16px;font-weight:bold;text-transform:uppercase" 
			  href="/aero-india-interviews-2019/"> Interviews

			  </a>			  

			  </center>
</div>
      </div>
      <div class="col-md-7" style="margin:10px 0 0 0"> <a href="https://www.rolls-royce.com/" target="_blank"><img src="<?php bloginfo('template_directory');?>/media-partner/rr-2019-feb.jpg"/></a> </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
  <div class="menuber">
    <div class="inner">
      <?php get_sidebar( 'top' ); ?>
      <?php wp_nav_menu( array(
			'container'       => 'div',
			'container_class' => 'main-nav',
			'fallback_cb'     => 'responsive_fallback_menu',
			'theme_location'  => 'header-menu'
		) ); ?>
    </div>
  </div>
  <div class="clearfix"></div>
  <?php responsive_container(); // before container hook ?>
  <?php responsive_header(); // before header hook ?>
  <!-- .skip-container -->
  <div id="header">
    <?php responsive_header_top(); // before header content hook ?>
    <?php responsive_in_header(); // header hook ?>
    <?php if ( get_header_image() != '' ) : ?>
    <?php endif; // header image was removed ?>
    <?php if ( !get_header_image() ) : ?>
    <?php endif; // header image was removed (again) ?>
    <?php responsive_header_bottom(); // after header content hook ?>
  </div>
  <div class="clearfix"></div>
  <!-- end of #header -->
  
  <div class="clearfix"></div>
  <?php responsive_header_end(); // after header container hook ?>
  <?php responsive_wrapper(); // before wrapper container hook ?>
</div>
<div class="clearfix"></div>
<div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script> 
<script src="<?php bloginfo('template_directory');?>/core/js/jquery.tickerNews.min.js"></script> 
<script type="text/javascript">
	    	$(function(){
	    		var timer = !1;
				_Ticker = $("#T1").newsTicker();
				_Ticker.on("mouseenter",function(){
					var __self = this;
					timer = setTimeout(function(){
						__self.pauseTicker();
					},200);
				});
				_Ticker.on("mouseleave",function(){
					clearTimeout(timer);
					if(!timer) return !1;
					this.startTicker();
				});
			});
	    </script> 
