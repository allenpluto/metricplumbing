<?php
/* template name:adhfahdsf */
get_header(); 


$custom = MultiPostThumbnails::get_post_thumbnail_id('page', 'header_background', $post->ID);
		
$custom=wp_get_attachment_image_src($custom,'post-secondary-image-thumbnail'); 
?>

<!--\\ Navigation -->
<!-- Inner Header -->
<div class="inner-header" style="<?php if($custom[0] !='') { echo 'background-image:url('.$custom[0].');'; } else {  echo 'background-image:url(../imgs/inner-header-bg.jpg);'; } ?>">
  <div class="pattern"></div>
  <div class="display-cell">
    <div class="container">
      <div class="col-xs-12 text-left">
        <div class="home-builder-page-title">
          <h1>Our</h1>
          <h1 class="titlecolor">Projects</h1>
          <img src="<?php echo bloginfo('template_url');?>/imgs/linew.png" alt="">
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="active">Our Projects</li>
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
    <h2 class="text-center text-uppercase">Projects <span class="orange-txt">gallery</span></h2>
    <div class="border_creative text-center"><img src="<?php echo bloginfo('template_url');?>/imgs/border.png" alt=""/></div>
   <div class="trends_section">
		<div class="row">
		<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
								'post_type' => 'portfolios',
								'paged' => $paged,
								'posts_per_page' => 8,
								
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
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">Read More..</a>
					</div>
				</div>
			</div>
				<?php } } ?>
			
	
		</div>
		<ul class="pagination">
	<?php wp_pagenavi( array( 'query' => $products )); ?>
	</ul>
	</div>
    <div class="clearfix"></div>
  </div>
  
</div>

<?php get_footer(); ?> 
<script src="<?php echo bloginfo('template_url'); ?>/js/custom-projects.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.mixitup.min.js"></script>
<script>
// Portfolio JavaScript Document
$(function () {
		'use strict';
		var filterList = {
			init: function () {
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '<?php echo (is_array($all_tabs)?join(', ',$all_tabs):''); ?>'  
      		}     
				});								
			
			}
		};
		// Run the show!
		filterList.init();
});	
</script>

