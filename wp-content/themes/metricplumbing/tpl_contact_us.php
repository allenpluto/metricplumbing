<?php 
/*template name:Contact Us*/

get_header();

while ( have_posts() ) : the_post();

$title = get_the_title();
$title1 = explode(' ',$title);



$custom = MultiPostThumbnails::get_post_thumbnail_id('page', 'header_background', $post->ID);
		
		$custom=wp_get_attachment_image_src($custom,'post-secondary-image-thumbnail'); 
		
$main_title = get_field('main_title');

$main_title1 = explode('-',$main_title);		

		
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
          <img src="<?php echo bloginfo('template_url');?>/imgs/linew.png" alt="">
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="content-section about-page-section">
  <div class="container top-contact-main">
   <h2 class="text-center text-uppercase"><?php echo $main_title1[0]; ?> - <span class="orange-txt"><?php echo $main_title1[1]; ?></span></h2>
    <div class="border-creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div>
    <div class="top-contact get_touch_section">
      <!--<div class="col-md-4 col-xs-12  no-padding">
        <div class="col-xs-4"> <span class="icon-contact"> <img src="<?php echo bloginfo('template_url');?>/imgs/contact/contact1.png"/> </span></div>
        <div class="col-xs-8 no-padding">
          <p>PO Box 173 Kellyville NSW 2155</p>
        </div>
      </div>-->
      <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
        <div class="col-xs-4"> <span class="icon-contact"> <img src="<?php echo bloginfo('template_url');?>/imgs/contact/contact2.png"/> </span></div>
        <div class="col-xs-8 no-padding">
          <p class="phone-mail"><?php echo get_option("phone_number"); ?><br>
            <?php echo get_option("alternate"); ?></p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
        <div class="col-xs-4"> <span class="icon-contact"> <img src="<?php echo bloginfo('template_url');?>/imgs/contact/contact3.png"/> </span></div>
        <div class="col-xs-8 no-padding">
          <p  class="phone-mail"> <a href="<?php echo get_option("e_mail"); ?>"><?php echo get_option("e_mail"); ?></a></p>
        </div>
      </div>
	  <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
        <div class="col-xs-4"> <span class="icon-contact"> <img src="<?php echo bloginfo('template_url');?>/imgs/contact/contact4.png"/> </span></div>
        <div class="col-xs-8 no-padding">
          <p  class="phone-mail"> <?php echo get_option("time_mon_to_fri"); ?> <br/><?php echo get_option("time_sat"); ?> </p>
        </div>
      </div>
	  <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
        <div class="col-xs-4"> <span class="icon-contact"> <img src="<?php echo bloginfo('template_url');?>/imgs/contact/contact5.png"/> </span></div>
        <div class="col-xs-8 no-padding">
          <p  class="phone-mail"> ABN: <?php echo get_option("abn"); ?> <br/>
Licence Number - <?php echo get_option("licence_number"); ?> </p>
        </div>
      </div>
    </div>
  </div>
  <div class="content-section light-bg form-section contact_form">
    <div class="container">
	
	<h2 class="text-center text-uppercase">Contact<span class="orange-txt"> form</span></h2>
    <div class="border-creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div>
	
    <?php echo do_shortcode('[contact-form-7 id="261" title="Contact form 1" html_id="contactForm"]'); ?>
	  
      <div class="clearfix"></div>
      <!-- /col -->
    </div>
  </div>
  <div class="contact_map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.9843394794416!2d150.92600011471873!3d-33.68346968070785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129fbd3cdfa8c7%3A0xf017d68f9f2b1e0!2sThe+Hills+Centenary+Park!5e0!3m2!1sen!2sin!4v1499248164841" height="476" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
<?php endwhile;
get_footer(); ?>