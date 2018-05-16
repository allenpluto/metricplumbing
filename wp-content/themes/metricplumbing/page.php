<?php get_header();
while ( have_posts() ) : the_post();

$title = get_the_title();
$title1 = explode(' ',$title);



$custom = MultiPostThumbnails::get_post_thumbnail_id('page', 'header_background', $post->ID);
		
		$custom=wp_get_attachment_image_src($custom,'post-secondary-image-thumbnail'); 
		
$main_title = get_field('main_title');

$main_title1 = explode(' ',$main_title);		

		
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
<!--\\ Inner Header -->
<!-- Content Section -->
<div class="content-section about-page-section metric_border_section">
  <div class="container">
    <h2 class="text-center text-uppercase"><?php echo $main_title1[0]; ?> - <span class="orange-txt"><?php echo $main_title1[1]; ?></span></h2>
	<div class="border_creative text-center"><img src="<?php echo bloginfo('template_url');?>/imgs/border.png" alt=""/></div>
	
	<div class="plumber_detail">
		<div class="plumber_detail_right">
			<?php the_post_thumbnail('full'); ?>
		</div>
		<div class="plumber_detail_left">
			<div class="img-container"> 
			   <?php the_content(); ?>
			</div>
		</div>
	</div>
	
				<!--div class="col-md-6 col-xs-12">
				  <div class="img-container"> 
				   <?php // the_content(); ?>
				  </div>
				</div>
				<div class="col-md-6 col-xs-12 no-padding">
				  <?php // the_post_thumbnail('full'); ?>
				</div-->
	
	
    <div class="clearfix"></div>
  </div>
</div>
<?php if(!is_page('131')){ ?>
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
<?php } ?>
<?php endwhile;
get_footer(); ?>