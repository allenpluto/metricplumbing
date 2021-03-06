<?php get_header(); 

while ( have_posts() ) : the_post();
$title = get_field('main_title');
$title1 = explode('-',$title);

	$custom = MultiPostThumbnails::get_post_thumbnail_id('portfolios', 'header_background', $post->ID);
		
		$custom=wp_get_attachment_image_src($custom,'post-secondary-image-thumbnail'); 					
?>
<!--\\ Navigation -->
<!-- Inner Header -->
<div class="inner-header" style="<?php if($custom[0] !='') { echo 'background-image:url('.$custom[0].');'; } else {  echo 'background-image:url(../imgs/inner-header-bg.jpg);'; } ?> ">
  <div class="pattern"></div>
  <div class="display-cell">
    <div class="container">
      <div class="col-xs-12 text-left">
        <div class="home-builder-page-title">
           <h1><?php echo $title1[0]; ?></h1>
          <h1 class="titlecolor"><?php echo $title1[1]; ?></h1>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
<!--\\ Inner Header -->
<!-- Content Section -->

<div class="content-section news-section metric_border_section">
  <div class="container">
    <h2 class="text-center text-uppercase">Project <span class="orange-txt">Details</span></h2>
    <div class="border-creative text-center"><img src="<?php echo bloginfo('template_url');?>/imgs/border.png" alt=""/></div>
    <div class="project-details">
	 <div class="col-md-6 col-xs-12">
        <div id="amazingslider-wrapper-1" class="project-slider" style="display:block;position:relative;max-width:100%;margin:0px 0 93px;">
          <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;width:100%;">
            <ul class="amazingslider-slides" style="display:none;">
				
					
              <li><?php the_post_thumbnail('full'); ?></li>
			  
				
				<?php 
			$custom1 = MultiPostThumbnails::get_post_thumbnail_id('portfolios', 'slider_img_1', $post->ID);
		
		$custom1=wp_get_attachment_image_src($custom1,'post-secondary-image-thumbnail'); 
		
		if($custom1[0] != '') {
		?>
              <li><img src="<?php echo $custom1[0]; ?>" /></li>
		<?php } ?>
		<?php 
			$custom2 = MultiPostThumbnails::get_post_thumbnail_id('portfolios', 'slider_img_2', $post->ID);
		
		$custom2=wp_get_attachment_image_src($custom2,'post-secondary-image-thumbnail'); 
		if($custom2[0] != '') {
		?>
               <li><img src="<?php echo $custom2[0]; ?>" /></li>
		<?php } ?>
		<?php 
			$custom3 = MultiPostThumbnails::get_post_thumbnail_id('portfolios', 'slider_img_3', $post->ID);
		
		$custom3=wp_get_attachment_image_src($custom3,'post-secondary-image-thumbnail'); 
		if($custom3[0] != '') {
		?>
              <li><img src="<?php echo $custom3[0]; ?>" /></li>
		<?php } ?>
		<?php 
			$custom4 = MultiPostThumbnails::get_post_thumbnail_id('portfolios', 'slider_img_1', $post->ID);
		
		$custom4=wp_get_attachment_image_src($custom4,'post-secondary-image-thumbnail'); 
		if($custom4[0] != '') {
		?>
               <li><img src="<?php echo $custom4[0]; ?>" /></li>
		<?php } ?>
		
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
			<?php 
			$custom1 = MultiPostThumbnails::get_post_thumbnail_id('portfolios', 'slider_img_1', $post->ID);
		
		$custom1=wp_get_attachment_image_src($custom1,'post-secondary-image-thumbnail'); 
		
		if($custom1[0] != '') {
		?>
              <li><img src="<?php echo $custom1[0]; ?>" /></li>
		<?php } ?>
		<?php 
			$custom2 = MultiPostThumbnails::get_post_thumbnail_id('portfolios', 'slider_img_2', $post->ID);
		
		$custom2=wp_get_attachment_image_src($custom2,'post-secondary-image-thumbnail'); 
		if($custom2[0] != '') {
		?>
               <li><img src="<?php echo $custom2[0]; ?>" /></li>
		<?php } ?>
		<?php 
			$custom3 = MultiPostThumbnails::get_post_thumbnail_id('portfolios', 'slider_img_3', $post->ID);
		
		$custom3=wp_get_attachment_image_src($custom3,'post-secondary-image-thumbnail'); 
		if($custom3[0] != '') {
		?>
              <li><img src="<?php echo $custom3[0]; ?>" /></li>
		<?php } ?>
		<?php 
			$custom4 = MultiPostThumbnails::get_post_thumbnail_id('portfolios', 'slider_img_1', $post->ID);
		
		$custom4=wp_get_attachment_image_src($custom4,'post-secondary-image-thumbnail'); 
		if($custom4[0] != '') {
		?>
               <li><img src="<?php echo $custom4[0]; ?>" /></li>
		<?php } ?>
		
            </ul>
            <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive Slider jQuery">Responsive Slider jQuery</a></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xs-12">
		  <div class="castle_hill_section">
		  <h3>Project Description:</h3>
		   <?php the_excerpt(); ?>
		  <h3>Work Included:</h3>
		   <?php the_content(); ?>
		   <a href="<?php echo bloginfo('url');?>/contact-us/" class="quote_detail_btn">Request a quote</a>
		   <a href="<?php echo bloginfo('url');?>/our-projects/" class="quote_detail_btn_back">Back</a>
		  </div>
      </div>
     
    </div>
    <div class="clearfix"></div>
  </div>
  </div>
  <div class="content-section news-section metric_section">
  <div class="container">
    <h2 class="text-center text-uppercase">Similar <span class="orange-txt">Projects</span></h2>
	
    <div class="border-creative text-center"><img src="<?php echo bloginfo('template_url');?>/imgs/border.png" alt=""/></div>
	
	
	
	<div class="trends_section">
		<div class="row">
		<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
								'post_type' => 'portfolios',
								'paged' => $paged,
								'posts_per_page' => 4,
								
							);
				
				$products = new WP_Query($args);
			
				if($products){
						
					while ($products->have_posts()) {
						
						$products->the_post();
						
						
					?>
	
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="trends_detail">
					<figure><?php the_post_thumbnail('trends_size'); ?></figure>
					<div class="trends_detail_text">
						<h3><?php the_title(); ?></h3> 
						<br />
						<a href="<?php the_permalink(); ?>">Read More..</a>
					</div>
				</div>
			</div>
				<?php } } ?>
			
	
		</div>
	</div>
	

	
	
	
	
	
	
	
	
	
	
    <!--div class="row other-row">
      <div class="owl-carousel owl-theme">
	  <?php
                    //$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

    //                    $the_query = new WP_Query( array(
    // 'post_type' => array('portfolios'),
    // 'tax_query' => array(
    //     array(
    //         'taxonomy' => 'portfolio_category',
     //        'field' => 'slug',
     //        'terms' => $protfolios1,
     //    ),
    // ),  
// ) );

                    ?>
                    <?php//  if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 
					// $protfolios = array();

					// $terms = get_the_terms( get_the_ID() , 'portfolio_category' );
					// $protfolios = '';


					// 	if ( $terms != null ){
					// 	foreach( $terms as $term ) {
					// 	$term_link = get_term_link( $term, 'portfolio_category' );
						
//echo $term->name;						
					// 	$protfolios[] = $term->name;
						
					// 	unset($term); } }
					?>
        <div class="item">
          <div class="portfolio">
            <div class="grid-2">
              <figure class="effect-jazz"> 
			  <?php //  the_post_thumbnail('full',array('class' => 'img-responsive'));?>
			  <!--<img src="<?php //  echo bloginfo('template_url');?>/imgs/portfolio/recent/item3.png" class="img-responsive" alt="img25"/>-->
                <!--figcaption>
                  <h2><i class="fa fa-search" aria-hidden="true"></i></h2>
                  <a href="<?php//  the_permalink(); ?>"  title="Project Details">View more</a> </figcaption>
              </figure>
              <div class="clearfix"></div>
              <div class="headl montserrat">
                <h2><?php //  the_title(); ?></h2>
				
              </div>
              <div class="tags"><?php //  echo join(', ',$protfolios); ?></div>
            </div>
          </div>
        </div>
		<?php 
		// endwhile;
		// endif;
        // wp_reset_postdata();
		 ?>
        
      </div>
      <div class="clearfix"></div>
    </div-->
  </div>
  </div>
  <!--div class="clearfix"></div>
  </div>

<div class="quote_section">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div class="fadeIn" data-wow-duration="900ms"  data-wow-delay="400ms">
					<p><strong>Trust Sydney's</strong> leading Plumbing experts to provide you <br /> with High quality plumbing service at affordable prices br call metric plumbing today <strong>on</strong> <a href="#">1300 944 566</a></p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="fadeIn" data-wow-duration="900ms"  data-wow-delay="400ms">
					<a href="#" class="quote_btn">Request a quote</a>
				</div>
			</div>
		</div>
	</div>
</div>


  <!--div class="video-wrapper text-center">
    <div class="pattern"></div>
    <div class="player-container montserrat text-uppercase"> <a href="#myModal" data-toggle="modal"><span><i class="fa fa-play" aria-hidden="true"></i></span>
      <h3>watch US IN ACTION</h3>
      </a> </div>
  </div-->


<div class="quote_section">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div class="fadeIn" data-wow-duration="900ms"  data-wow-delay="400ms">
					<p><?php echo get_option('trust_sydneys_leading_plumbing_experts_content'); ?></p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="fadeIn" data-wow-duration="900ms"  data-wow-delay="400ms">
					<a href="<?php echo bloginfo('url');?>/contact-us/" class="quote_btn">Request a quote</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php endwhile; get_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mixitup.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/amazing-slider-plugin/thumb-slider/thumb-slider-jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/amazing-slider-plugin/thumb-slider/thumb-slider.css">
<script>
jQuery(document).ready(function(){
	
	jQuery('a2a_button_facebook').addClass('fa-facebook');
	
"use strict";
    var scripts = document.getElementsByTagName("script");

    var jsFolder = "";

    for (var i= 0; i< scripts.length; i++)

    {

        if( scripts[i].src && scripts[i].src.match(/initslider-1\.js/i))

            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);

    }

    jQuery("#amazingslider-1").amazingslider({

        sliderid:1,

        jsfolder:jsFolder,


        height:368,

        skinsfoldername:"",

        loadimageondemand:false,

        videohidecontrols:false,

        donotresize:false,

        enabletouchswipe:true,

        fullscreen:false,

        autoplayvideo:false,

        addmargin:true,

        randomplay:false,

        isresponsive:false,

        pauseonmouseover:false,

        playvideoonclickthumb:true,

        slideinterval:5000,

        fullwidth:false,

        transitiononfirstslide:false,

        scalemode:"fill",

        loop:0,

        autoplay:true,

        navpreviewheight:60,

        timerheight:1,

        descriptioncssresponsive:"font-size:12px;",

        shownumbering:false,

        skin:"Thumbnails",

        addgooglefonts:false,

        navshowplaypause:true,

        navshowplayvideo:true,

        navshowplaypausestandalonemarginx:8,

        navshowplaypausestandalonemarginy:8,

        navbuttonradius:0,

        navthumbnavigationarrowimageheight:32,

        navpreviewarrowheight:8,

        lightboxshownavigation:false,

        showshadow:false,

        navfeaturedarrowimagewidth:16,

        navpreviewwidth:120,

        googlefonts:"",

        navborderhighlightcolor:"",

        bordercolor:"#ffffff",

        lightboxdescriptionbottomcss:"{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}",

        lightboxthumbwidth:80,

        navthumbnavigationarrowimagewidth:32,

        navthumbtitlehovercss:"text-decoration:underline;",

        texteffectresponsivesize:600,

        navcolor:"#999999",

        arrowwidth:32,

        texteffecteasing:"easeOutCubic",

        texteffect:"slide",

        lightboxthumbheight:60,

        navspacing:5,

        navwidth:120,

        navheight:72,

        arrowimage:"<?php echo bloginfo('template_url'); ?>/js/amazing-slider-plugin/thumb-slider/arrows-32-32-4.png",

        timeropacity:0.6,

        arrowhideonmouseleave:1000,

        navthumbnavigationarrowimage:"<?php echo bloginfo('template_url'); ?>/js/amazing-slider-plugin/thumb-slider/carouselarrows-32-32-3.png",

        navshowplaypausestandalone:false,

        texteffect1:"slide",

        navpreviewbordercolor:"#ffffff",

        texteffect2:"slide",

        customcss:"",

        ribbonposition:"topleft",

        navthumbdescriptioncss:"display:block;position:relative;padding:2px 4px;text-align:left;font:normal 12px Arial,Helvetica,sans-serif;color:#333;",

        lightboxtitlebottomcss:"{color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}",

        arrowstyle:"always",

        navthumbtitleheight:20,

        textpositionmargintop:24,

        buttoncssresponsive:"",

        navswitchonmouseover:false,

        arrowtop:50,

        textstyle:"static",

        playvideoimageheight:64,

        navfonthighlightcolor:"#666666",

        showbackgroundimage:false,

        navpreviewborder:4,

        navshowplaypausestandaloneheight:48,

        shadowcolor:"#aaaaaa",

        navbuttonshowbgimage:true,

        textbgcss:"display:none;",

        textpositiondynamic:"bottomleft",

        navpreviewarrowwidth:16,

        playvideoimagewidth:64,

        buttoncss:"display:block; position:relative; margin-top:8px;",

        navshowpreviewontouch:false,

        bottomshadowimagewidth:110,

        showtimer:true,

        navradius:0,

        navmultirows:false,

        navshowpreview:false,

        navmarginy:5,

        navmarginx:16,

        showribbon:false,

        navstyle:"thumbnails",

        textpositionmarginleft:24,

        descriptioncss:"display:block; position:relative; font:12px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff; margin-top:8px;",

        backgroundimagetop:-10,

        timercolor:"#ffffff",

        numberingformat:"%NUM/%TOTAL ",

        navdirection:"horizontal",

        navfontsize:12,

        navhighlightcolor:"#333333",

        texteffectdelay1:1000,

        texteffectdelay2:1500,

        texteffectduration1:600,

        navshowplaypausestandaloneautohide:true,

        texteffectduration2:600,

        navbuttoncolor:"",

        navshowarrow:false,

        texteffectslidedirection:"left",

        navshowfeaturedarrow:false,

        lightboxbarheight:64,

        titlecss:"display:block; position:relative; font:bold 14px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff;",

        ribbonimagey:0,

        ribbonimagex:0,

        texteffectslidedistance1:120,

        texteffectslidedistance2:120,

        navrowspacing:8,

        navshowplaypausestandaloneposition:"bottomright",

        navshowbuttons:false,

        lightboxthumbtopmargin:12,

        titlecssresponsive:"font-size:12px;",

        navshowplaypausestandalonewidth:48,

        navfeaturedarrowimageheight:8,

        navopacity:0.7,

        textpositionmarginright:24,

        backgroundimagewidth:120,

        textautohide:true,

        navthumbtitlewidth:120,

        navpreviewposition:"top",

        texteffectseparate:false,

        arrowheight:32,

        arrowmargin:8,

        texteffectduration:600,

        border:0,

        lightboxshowdescription:false,

        timerposition:"bottom",

        navfontcolor:"#333333",

        navthumbnavigationstyle:"arrowinside",

        borderradius:0,

        navbuttonhighlightcolor:"",

        textpositionstatic:"bottom",

        texteffecteasing2:"easeOutCubic",

        navthumbstyle:"imageonly",

        texteffecteasing1:"easeOutCubic",

        textcss:"display:block; padding:12px; text-align:left;",

        navbordercolor:"#fff",

        navthumbtitlecss:"display:block;position:relative;padding:2px 4px;text-align:left;font:bold 14px Arial,Helvetica,sans-serif;color:#333;",

        showbottomshadow:false,

        texteffectslidedistance:30,

        texteffectdelay:500,

        textpositionmarginstatic:0,

        backgroundimage:"",

        navposition:"bottom",

        texteffectslidedirection1:"right",

        navborder:0,

        textformat:"Bottom left",

        texteffectslidedirection2:"right",

        bottomshadowimagetop:98,

        texteffectresponsive:true,

        shadowsize:5,

        lightboxthumbbottommargin:8,

        textpositionmarginbottom:24,

        lightboxshowtitle:true,

        fade: {

            duration:1000,

            easing:"easeOutCubic",

            checked:true

        },

        transition:"fade",

        scalemode:"fill",

        isfullscreen:false,

        textformat: {



        }

    });

});
</script>
  