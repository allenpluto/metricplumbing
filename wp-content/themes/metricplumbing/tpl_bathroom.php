<?php 
/*template name:bathroom*/

get_header();

while ( have_posts() ) : the_post();

if(is_page('114')){
$title = get_the_title();
$title1 = explode('+',$title);
}else{
$title = get_the_title();
$title1 = explode(' ',$title);
}



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
		<?php if(is_page('112')) { ?>
		 <h1><?php echo $title1[0].' '.$title1[1].' '.$title1[2]; ?></h1>
          <h1 class="titlecolor"><?php echo $title1[3]; ?></h1>
		<?php }else { ?>
          <h1><?php echo $title1[0]; ?></h1>
          <h1 class="titlecolor"><?php echo $title1[1]; ?></h1>
		<?php } ?>
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
		<h2 class="text-center text-uppercase">bathroom RENOVATION <span class="orange-txt">services</span></h2>
		<hr class="heading_hr" />
		<div class="row flx">
			<?php
	$recent = new WP_Query("page_id=112");
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
						<p><?php the_field('bathroom_service_section_name') ?></p>
					</div>
				</a>
			</div>
			<?php endwhile; ?>
			<?php
	$recent = new WP_Query("page_id=114");
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
						<p><?php the_field('bathroom_service_section_name') ?></p>
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

		</div>
	</div>
</div>
<?php endwhile;?>


<div class="content-section projects-section metric_bg_section">
  <div class="pattern"></div>
  <div class="container">
    <h2 class="text-center text-uppercase">Project<span class="orange-txt">Gallery</span></h2>
    <div class="border_creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div>
	<?php 
				$args = array(
								'post_type' => 'portfolios',
								'posts_per_page' => 9
							);
				$products = new WP_Query($args);
			
				if($products){
					$protfolios = array();
					$i = 1;
					while ($products->have_posts()) {
						
						$products->the_post();
						get_the_ID();
						$terms = get_the_terms( $post->ID , 'portfolio_category' );
$protfolios = '';
						if ( $terms != null ){
						foreach( $terms as $term ) {
						$term_link = get_term_link( $term, 'portfolio_category' );
						
//echo $term->name;						
						$protfolios[] = $term->name;

						unset($term); } } 
						if($i % 3 == 0) {
							//print_r( $protfolios);
							//echo join('/',$protfolios);
						?>
						<div class="col-xs-4 wow fadeIn" data-wow-duration="900ms"  data-wow-delay="200ms" >
      <div class="gamma-description montserrat gallery_detail"><a href="<?php the_permalink(); ?>" class="full-link" title=""></a>
        <h3><span class="clearfix"></span><?php the_title(); ?></h3>
		<p><a href="<?php the_permalink(); ?>">Read More</a></p>
      </div>
      <!--<img src="<?php // echo get_the_post_thumbnail_url(); ?>" alt="" class="img-responsive"/>-->
	   <div class="gallery_detail_img"><?php the_post_thumbnail('full',array('class' => 'img-responsive')); ?></div>
      <div class="clearfix"></div>
						</div><?php } else { ?>
    <div class="col-xs-2 wow fadeIn" data-wow-duration="900ms"  data-wow-delay="100ms" >
      <div class="gamma-description montserrat gallery_detail"> <a href="<?php the_permalink(); ?>" class="full-link" title=""></a>
        <h3><span class="clearfix"></span><?php the_title(); ?></h3>
		<p><a href="<?php the_permalink(); ?>">Read More</a></p>
      </div>
      <!--<img src="<?php // echo get_the_post_thumbnail_url(); ?>" alt="" class="img-responsive"/> -->
	  <div class="gallery_detail_img"><?php the_post_thumbnail('full',array('class' => 'img-responsive')); ?></div>
	  </div>
	 
						<?php } $i++; } } ?>
   
    <div class="clearfix"></div>
  </div>
  <div class="project-bottom wow fadeIn" data-wow-duration="900ms"  data-wow-delay="550ms" > <a href="<?php echo bloginfo('url'); ?>/our-latest-portfolio/" class="montserrat project_btn">View Our latest work<i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </div>
</div>
<?php if(!is_page('112') && !is_page('114')){ ?>
<div class="content-section news-section metric_border_section">
  <div class="container">
    <h2 class="text-center text-uppercase">TRENDS & <span class="orange-txt">IDEAS</span></h2>
    <div class="border_creative text-center"><img src="<?php // echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div>

	<div class="trends_section">
		<div class="row">
		<?php
	 wp_reset_query();
	 	$args = array(
	 							'post_type' => 'trends_ideas',
	 							'order' => 'ASC'
	 						);
	 			$products = new WP_Query($args);
	 		
	 			if($products){
	 				
	 				while ($products->have_posts()) {
	 					
	 					$products->the_post();
	 					$custom = MultiPostThumbnails::get_post_thumbnail_id('process', 'image_2', $post->ID);
		
	 				$custom=wp_get_attachment_image_src($custom,'post-secondary-image-thumbnail');
 $custom[0];						
		
					?>
	
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="trends_detail">
					<figure><?php the_post_thumbnail('trends_size'); ?></figure>
					<div class="trends_detail_text">
						<h3><?php  the_title(); ?></h3> 
						<?php  the_excerpt(); ?>
						<a href="<?php  the_permalink(); ?>">Read More..</a>
					</div>
				</div>
			</div>
				<?php  } } ?>
			
		</div>
	</div>
	
    <div class="clearfix"></div>
  </div>
</div>
<?php } ?>
<?php   get_footer(); ?>
