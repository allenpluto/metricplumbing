<?php 
/*template name:plumbing*/

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
<!--\\ Inner Header -->
<!-- Content Section -->
<div class="metric_section">
  <div class="container">
    <h2 class="text-center text-uppercase"><?php echo $main_title1[0]; ?> - <span class="orange-txt"><?php echo $main_title1[1]; ?></span></h2>
    <div class="border-creative text-center"><img src="<?php echo bloginfo('template_url');?>/imgs/border.png" alt=""/></div>
	
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
  </div>
</div>
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
<div class="metric_section">
	<div class="container">
		 <h2 class="text-center text-uppercase">Plumbing <span class="orange-txt">categories</span></h2>
		<hr class="heading_hr" />
		<div class="row flx">
			<?php
	$recent = new WP_Query("page_id=96");
while ($recent->have_posts()) : $recent->the_post();
?>
			<div class="col-xs-6 col-sm-4">
				<a href="<?php the_permalink(); ?>" class="plumbing_list">
					<div class="plumbing_top">
						<!--<img src="<?php echo get_the_post_thumbnail_url('plumbing_category'); ?>" width="360" height="304" alt="img" />-->
						<?php the_post_thumbnail('plumbing_category'); ?>
						<div class="plumbing_hover">
							<div class="plumbing_hover_inner">
								<h4>View Detail</h4>
								<p><?php the_title(); ?></p>
							</div>
						</div>
					</div>
					<div class="plumbing_bottom">
						<p><?php the_title(); ?></p>
					</div>
				</a>
			</div>
			<?php endwhile; ?>
			<?php
	$recent = new WP_Query("page_id=98");
while ($recent->have_posts()) : $recent->the_post();
?>
			<div class="col-xs-6 col-sm-4">
				<a href="<?php the_permalink(); ?>" class="plumbing_list">
					<div class="plumbing_top">
						<!--<img src="<?php echo get_the_post_thumbnail_url('plumbing_category'); ?>" width="360" height="304" alt="img" />-->
						<?php the_post_thumbnail('plumbing_category'); ?>
						<div class="plumbing_hover">
							<div class="plumbing_hover_inner">
								<h4>View Detail</h4>
								<p><?php the_title(); ?></p>
							</div>
						</div>
					</div>
					<div class="plumbing_bottom">
						<p><?php the_title(); ?></p>
					</div>
				</a>
			</div>
			<?php endwhile; ?>
			<?php
	$recent = new WP_Query("page_id=100");
while ($recent->have_posts()) : $recent->the_post();
?>
			<div class="col-xs-6 col-sm-4">
				<a href="<?php the_permalink(); ?>" class="plumbing_list">
					<div class="plumbing_top">
						<!--<img src="<?php echo get_the_post_thumbnail_url('plumbing_category'); ?>" width="360" height="304" alt="img" />-->
						<?php the_post_thumbnail('plumbing_category'); ?>
						<div class="plumbing_hover">
							<div class="plumbing_hover_inner">
								<h4>View Detail</h4>
								<p><?php the_title(); ?></p>
							</div>
						</div>
					</div>
					<div class="plumbing_bottom">
						<p><?php the_title(); ?></p>
					</div>
				</a>
			</div>
			<?php endwhile; ?>
			<?php
	$recent = new WP_Query("page_id=102");
while ($recent->have_posts()) : $recent->the_post();
?>
			<div class="col-xs-6 col-sm-4">
				<a href="<?php the_permalink(); ?>" class="plumbing_list">
					<div class="plumbing_top">
						<!--<img src="<?php echo get_the_post_thumbnail_url('plumbing_category'); ?>" width="360" height="304" alt="img" />-->
						<?php the_post_thumbnail('plumbing_category'); ?>
						<div class="plumbing_hover">
							<div class="plumbing_hover_inner">
								<h4>View Detail</h4>
								<p><?php the_title(); ?></p>
							</div>
						</div>
					</div>
					<div class="plumbing_bottom">
						<p><?php the_title(); ?></p>
					</div>
				</a>
			</div>
			<?php endwhile; ?>
			<?php
	$recent = new WP_Query("page_id=104");
while ($recent->have_posts()) : $recent->the_post();
?>
			<div class="col-xs-6 col-sm-4">
				<a href="<?php the_permalink(); ?>" class="plumbing_list">
					<div class="plumbing_top">
						<!--<img src="<?php echo get_the_post_thumbnail_url('plumbing_category'); ?>" width="360" height="304" alt="img" />-->
						<?php the_post_thumbnail('plumbing_category'); ?>
						<div class="plumbing_hover">
							<div class="plumbing_hover_inner">
								<h4>View Detail</h4>
								<p><?php the_title(); ?></p>
							</div>
						</div>
					</div>
					<div class="plumbing_bottom">
						<p><?php the_title(); ?></p>
					</div>
				</a>
			</div>
			<?php endwhile; ?>
			<?php
	$recent = new WP_Query("page_id=106");
while ($recent->have_posts()) : $recent->the_post();
?>
			<div class="col-xs-6 col-sm-4">
				<a href="<?php the_permalink(); ?>" class="plumbing_list">
					<div class="plumbing_top">
						<!--<img src="<?php echo get_the_post_thumbnail_url('plumbing_category'); ?>" width="360" height="304" alt="img" />-->
						<?php the_post_thumbnail('plumbing_category'); ?>
						<div class="plumbing_hover">
							<div class="plumbing_hover_inner">
								<h4>View Detail</h4>
								<p><?php the_title(); ?></p>
							</div>
						</div>
					</div>
					<div class="plumbing_bottom">
						<p><?php the_title(); ?></p>
					</div>
				</a>
			</div>
			<?php endwhile; ?>
			
		</div>
	</div>
</div>
<?php endwhile;?>


<?php 

$recent = new WP_Query("page_id=108");
while ($recent->have_posts()) : $recent->the_post();

$commercial_img = get_field('page_image');
?> 

<div class="commercial_section">
<div class="commercial_left"> <img src="<?php echo $commercial_img['url']; ?>" width="785" height="466" alt="img" /> </div>
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-6 col-sm-6">
				<div class="commercial_right">
					<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>">View Detail</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>