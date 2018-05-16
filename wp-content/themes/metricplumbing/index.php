<?php get_header(); ?>
<div class="metric_banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-9 residential" >
			<?php
					$recent = new WP_Query("page_id=442");
			while ($recent->have_posts()) : $recent->the_post();
			?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile ?>	
			</div>
			<div class="col-sm-9 commercial" style="display:none;">
				<?php
					$recent = new WP_Query("page_id=444");
			while ($recent->have_posts()) : $recent->the_post();
			?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile ?>	
			</div>
		</div>
	</div>
<div class="metric_banner_bottom">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 text-center">
				<a id="residential">Residential Plumbing ServiceS</a>
			</div>
			<div class="col-xs-6 text-center">
				<a id="commercial">Commercial Plumbing ServiceS</a>
			</div>
		</div>
	</div>
</div>
</div>

<div class="metric_border_section">
<span id="main-content" class="hotspot hotspot-subscribe"></span>
<?php
	$recent = new WP_Query("page_id=5");
while ($recent->have_posts()) : $recent->the_post();
?>
  <div class="container">
    <h2 class="text-center text-uppercase"><?php the_title(); ?></h2>
	<div class="border_creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div>
    <!--div class="border_creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div-->
    <div class="col-xs-7">
		<div class="metric_text top-txt wow fadeIn" data-wow-duration="900ms"  data-wow-delay="400ms" >
		  <?php the_content(); ?>
		  <a href="<?php echo bloginfo('url');?>/our-projects/" class="metric_gallery">View Our Gallery</a>
		</div>
      <div class="clearfix"></div>
    </div>
    <div class="col-xs-4 no-padding wow fadeInRight" data-wow-duration="900ms"  data-wow-delay="600ms" >
		<div class="metric_img">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-responsive"/>
		</div>
	</div>
    <div class="clearfix"></div>
  </div>
  <?php endwhile; wp_reset_query(); ?>
</div>
<!--\\ Content Section -->
<!-- Content Section -->
<div class="metric_section">
  <div class="container">
    <h2 class="text-center text-uppercase">Our <span class="orange-txt">Services</span></h2>
    <div class="border_creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div>
    <div class="tabs-left services_tabs">
      <div class="col-xs-3 no-padding wow fadeInLeft" data-wow-duration="900ms"  data-wow-delay="200ms" >
        <ul class="nav nav-tabs service_list">
		<?php
			$recent = new WP_Query("page_id=110");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <li class="active"><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><span class="number-div"><img src="<?php bloginfo('template_url'); ?>/imgs/service-icon1.png"><img src="<?php bloginfo('template_url'); ?>/imgs/service-icon-h1.png"></span><span class="tab-txt"><?php the_title(); ?></span></a></li>
		  <?php endwhile; ?>
		  <?php
			$recent = new WP_Query("page_id=106");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <li><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><span class="number-div"><img src="<?php bloginfo('template_url'); ?>/imgs/service-icon2.png"><img src="<?php bloginfo('template_url'); ?>/imgs/service-icon-h2.png"></span><span class="tab-txt"><?php the_title(); ?></span></a></li>
		  <?php endwhile; ?>
		  <?php
			$recent = new WP_Query("page_id=94");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <li><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><span class="number-div"><img src="<?php bloginfo('template_url'); ?>/imgs/service-icon3.png"><img src="<?php bloginfo('template_url'); ?>/imgs/service-icon-h3.png"></span><span class="tab-txt"><?php the_title(); ?></span></a></li>
		  <?php endwhile; ?>
		  <?php
			$recent = new WP_Query("page_id=96");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <li><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><span class="number-div"><img src="<?php bloginfo('template_url'); ?>/imgs/service-icon4.png"><img src="<?php bloginfo('template_url'); ?>/imgs/service-icon-h4.png"></span><span class="tab-txt"><?php the_title(); ?></span></a></li>
		  <?php endwhile; ?>
		  <?php
			$recent = new WP_Query("page_id=98");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <li><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><span class="number-div"><img src="<?php bloginfo('template_url'); ?>/imgs/service-icon5.png"><img src="<?php bloginfo('template_url'); ?>/imgs/service-icon-h5.png"></span><span class="tab-txt"><?php the_title(); ?></span></a></li>
		  <?php endwhile; ?>
		
        </ul>
      </div>
      <div class="col-xs-9 wow fadeInRight" data-wow-duration="900ms"  data-wow-delay="400ms" >
        <div class="tab-content">
		<?php
			$recent = new WP_Query("page_id=110");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <div class="tab-pane active" id="<?php echo get_the_ID(); ?>">
            <div class="col-xs-6 border_radius"><img src="<?php echo bloginfo('template_url'); ?>/imgs/home.png" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3><?php the_title(); ?></h3>
              <p><?php the_field('content'); ?></p>
               <a href="<?php the_permalink(); ?>" class="metric_gallery">Read More..</a>
            </div>
			
            <div class="clearfix"></div>
          </div>
		 <?php endwhile; ?>
		 <?php
			$recent = new WP_Query("page_id=106");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <div class="tab-pane" id="<?php echo get_the_ID(); ?>">
            <div class="col-xs-6"><img src="<?php echo bloginfo('template_url'); ?>/imgs/home.png" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
               <a href="<?php the_permalink(); ?>" class="metric_gallery">Read More..</a>
            </div>
            <div class="clearfix"></div>
          </div>
		 <?php endwhile; ?>
		 <?php
			$recent = new WP_Query("page_id=94");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <div class="tab-pane" id="<?php echo get_the_ID(); ?>">
            <div class="col-xs-6"><img src="<?php echo bloginfo('template_url'); ?>/imgs/home.png" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
               <a href="<?php the_permalink(); ?>" class="metric_gallery">Read More..</a>
            </div>
            <div class="clearfix"></div>
          </div>
		 <?php endwhile; ?>
		 <?php
			$recent = new WP_Query("page_id=96");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <div class="tab-pane" id="<?php echo get_the_ID(); ?>">
            <div class="col-xs-6"><img src="<?php echo bloginfo('template_url'); ?>/imgs/home.png" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
               <a href="<?php the_permalink(); ?>" class="metric_gallery">Read More..</a>
            </div>
            <div class="clearfix"></div>
          </div>
		 <?php endwhile; ?>
		 <?php
			$recent = new WP_Query("page_id=98");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <div class="tab-pane" id="<?php echo get_the_ID(); ?>">
            <div class="col-xs-6"><img src="<?php echo bloginfo('template_url'); ?>/imgs/home.png" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3><?php the_title(); ?></h3>
               <?php the_excerpt(); ?>
               <a href="<?php the_permalink(); ?>" class="metric_gallery">Read More..</a>
            </div>
            <div class="clearfix"></div>
          </div>
		 <?php endwhile; ?>
	
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- /col -->
  </div>
</div>
<!--\\ services -->
<!-- Projects -->
<div class="content-section projects-section metric_bg_section">
  <div class="pattern"></div>
  <div class="container">
    <h2 class="text-center text-uppercase">Our Latest <span class="orange-txt">Projects</span></h2>
    <div class="border_creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div>
	<?php 
				$args = array(
								'post_type' => 'portfolios',
								'posts_per_page' => 9,
								
							);
				$products = new WP_Query($args);
			
				if($products){
					$protfolios = array();
					$i = 1;
					
					while ($products->have_posts()) {
						
						$products->the_post();
						get_the_ID();
						$terms = get_the_terms( $post->ID , 'portfolio_category' );
//$protfolios = '';
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
        <!--<p><?php echo join('/',$protfolios); ?></p>-->
		<p><a href="<?php the_permalink(); ?>">Read More</a></p>
      </div>
      <!--<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-responsive"/>-->
	   <div class="gallery_detail_img"><?php the_post_thumbnail('full',array('class' => 'img-responsive')); ?></div>
      <div class="clearfix"></div>
						</div><?php } else { ?>
    <div class="col-xs-2 wow fadeIn" data-wow-duration="900ms"  data-wow-delay="100ms" >
      <div class="gamma-description montserrat gallery_detail"> <a href="<?php the_permalink(); ?>" class="full-link" title=""></a>
        <h3><span class="clearfix"></span><?php the_title(); ?></h3>
		<p><a href="<?php the_permalink(); ?>">Read More</a></p>
      </div>
      <!--<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-responsive"/> -->
	  <div class="gallery_detail_img"><?php the_post_thumbnail('full',array('class' => 'img-responsive')); ?></div>
	  </div>
	 
						<?php } $i++; } } ?>
    
   
    
    
   
   
    
    <div class="clearfix"></div>
  </div>
  <div class="project-bottom wow fadeIn" data-wow-duration="900ms"  data-wow-delay="250ms" > <a href="<?php echo bloginfo('url');?>/our-projects/" class="montserrat project_btn">View our latest work </a> </div>

</div>
<!--\\ Projects -->
<!-- company certifications -->
<div class="content-section company-certification metric_border_section"  id="set-7"> <!--img src="<?php // echo bloginfo('template_url'); ?>/imgs/services-right.jpg" class="img-responsive right-services" alt=""-->
  <div class="container">
    <h2 class="text-center text-uppercase">OUR<span class="orange-txt">PROCESS</span></h2>
    <div class="border_creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div>
	<?php
	wp_reset_query();
				$args = array(
								'post_type' => 'process',
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
	
    <div class="col-xs-3 text-center">
      <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7a wow fadeInUp process_img" data-wow-duration="900ms"  data-wow-delay="100ms" >
        <div class="hi-icon"> <?php the_post_thumbnail('full',array('class' => 'img-1'));?>
		<!--<img src="<?php echo bloginfo('template_url'); ?>/imgs/circle-icons/contracting.png" class="img-1" alt=""/>--><!--img src="<?php echo $custom[0]; ?>" class="img-2" alt=""/-->
		</div>
      </div>
      <span class="wow fadeInDown process_text" data-wow-duration="900ms"  data-wow-delay="150ms">
      <h3 class="open-sans"><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
	  <!--<a href="#">Read More..</a>-->
      </span> </div>
				<?php } }  ?>
				
	  
    
   <div class="clearfix"></div>
   <div class="project-bottom wow fadeIn" data-wow-duration="900ms"  data-wow-delay="250ms" > <a href="<?php echo bloginfo('url');?>/contact-us/" class="montserrat project_btn text_colored">Request a quote </a> </div>
  </div>
</div>
           

<div class="content-section news-section metric_section">
  <div class="container">
    <h2 class="text-center text-uppercase">TRENDS & <span class="orange-txt">IDEAS</span></h2>
    <div class="border_creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div>

	<div class="trends_section">
		<div class="row">
		<?php 
	wp_reset_query();
				$args = array(
								'post_type' => 'trends_ideas',
								'posts_per_page' => 4
							);
				$products = new WP_Query($args);
			
				if($products){
					
					while ($products->have_posts()) {
						
						$products->the_post();
					?>
					<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="trends_detail">
					<figure><!--<img src="<?php echo bloginfo('template_url'); ?>/imgs/trends-img1.jpg" width="263" height="" alt="img" />-->
					<?php the_post_thumbnail('trends_size'); ?> 
					</figure>
					<div class="trends_detail_text">
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt();?>
						<a href="<?php the_permalink(); ?>">Read More..</a>
					</div>
				</div>
			</div>
				<?php } } ?>
			
		</div>
	</div>
	
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
			<div class="col-sm-3 mobile-center">
				<div class="fadeIn" data-wow-duration="900ms"  data-wow-delay="400ms">
					<a href="<?php echo bloginfo('url');?>/contact-us/" class="quote_btn">Request a quote</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>

<script>
jQuery(document).ready(function(){
	jQuery('#commercial').click(function(){
		jQuery('.commercial').show();
		jQuery('.residential').hide();
	});
	jQuery('#residential').click(function(){
		jQuery('.commercial').hide();
		jQuery('.residential').show();
	});
});
</script>

