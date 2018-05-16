<?php
/*template name:portfolio*/
get_header(); ?>

<!--\\ Navigation -->
<!-- Header Carousel -->
<!--header id="myCarousel" class="carousel carousel-1 slide carousel-fade">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <div class="fill" style="background-image:url('<?php echo bloginfo('template_url'); ?>/imgs/banner-1.jpg');"></div>
      <div class="pattern"></div>
      <div class="carousel-caption">
        <h2>Welcome to <span>HOME BUILDER</span> CONSTRUCTION SERVICES</h2>
        <h1>Neque porro quisquam</h1>
        <a href="#" class="btn-creative">Read more</a> </div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url('<?php echo bloginfo('template_url'); ?>/imgs/banner-2.jpg');"></div>
      <div class="pattern"></div>
      <div class="carousel-caption">
        <h2>Welcome to <span>HOME BUILDER</span> CONSTRUCTION SERVICES</h2>
        <h1>dolorem ipsum quia</h1>
        <a href="#" class="btn-creative">Read more</a> </div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url('<?php echo bloginfo('template_url'); ?>/imgs/banner-3.jpg');"></div>
      <div class="pattern"></div>
      <div class="carousel-caption">
        <h2>Welcome to <span>HOME BUILDER</span> CONSTRUCTION SERVICES</h2>
        <h1>consectetur, adipisci veli</h1>
        <a href="#" class="btn-creative">Read more</a> </div>
    </div>
  </div>
</header-->
<!--header bottom Section-->
<!--<div class="scroll-dwn"> <a id="scrollto" class="scrollup"> <img src="<?php echo bloginfo('template_url'); ?>/imgs/scroll-dwn.png" class="arrow bounce" alt=""/></a>
  <div class="bottom-twt">
    <div class="container pos-relative">
      <div class="col-xs-7">
        <div id="twt-carousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="item active">
              <div class="carousel-caption">
                <p class="lead orange-txt"> @ quiquam </p>
                <p class="no-margin">Neque porro quisquam est qui dolorem ipsum quia ,<span class="orange-txt">dolor sit amet</span> consectetur</p>
              </div>
            </div>
            <div class="item">
              <div class="carousel-caption">
                <p class="lead orange-txt"> @ quiquam </p>
                <p class="no-margin">Neque dolorem ipsum quia ,<span class="orange-txt">dolor sit amet</span> consectetur</p>
              </div>
            </div>
            <div class="item">
              <div class="carousel-caption">
                <p class="lead orange-txt"> @ quiquam </p>
                <p class="no-margin">Neque porro quisquam est qui dolorem ipsum quia ,<span class="orange-txt">dolor sit amet</span> consectetur</p>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#twt-carousel" data-slide="prev"><span class="icon-prev"></span> </a> <a class="right carousel-control" href="#twt-carousel" data-slide="next"><span class="icon-next"></span> </a> </div>
      </div>
      <div class="pull-right">
        <div class="news-letter-top text-center"> <a id="subscribe" class="scrollup" href="#">GET EMAIL UPDATES
          <div class="clearfix"></div>
          <i class="fa fa-angle-down" aria-hidden="true"></i> </a></div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>-->
<!-- \\ header bottom Section-->
<!--\\ Inner Header -->
<!-- Content Section -->



<div class="metric_banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h2>Fast, reliable & perfect results, is the reason to choose Metric Plumbing for...</h2>
				<ul>
					<li>Bathroom and laundry renovations</li>
					<li>Hot water system installations</li>
					<li>Complete home maintenance solutions</li>
					<li>Rain water tanks</li>
					<li>General plumbing</li>
					<li>Burst pipe repairs</li>
					<li>Blocked drain repairs</li>
				</ul>
			</div>
		</div>
	</div>
<div class="metric_banner_bottom">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 text-center">
				<a href="#" id="residential">Residential Plumbing ServiceS</a>
			</div>
			<div class="col-sm-6 text-center">
				<a href="#" id="commercial">Commercial Plumbing ServiceS</a>
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
    <!--div class="border-creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div-->
    <div class="col-xs-7">
		<div class="metric_text top-txt wow fadeIn" data-wow-duration="900ms"  data-wow-delay="400ms" >
		  <?php the_content(); ?>
		  <a href="#" class="metric_gallery">View Our Gallery</a>
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
        <ul class="nav nav-tabs">
		<?php
			$recent = new WP_Query("page_id=110");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <li class="active"><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><span class="number-div"><i class="flaticon-engineer"></i></span><span class="tab-txt"><?php the_title(); ?></span></a></li>
		  <?php endwhile; ?>
		  <?php
			$recent = new WP_Query("page_id=106");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <li><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><span class="number-div"><i class="flaticon-engineer"></i></span><span class="tab-txt"><?php the_title(); ?></span></a></li>
		  <?php endwhile; ?>
		  <?php
			$recent = new WP_Query("page_id=94");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <li><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><span class="number-div"><i class="flaticon-engineer"></i></span><span class="tab-txt"><?php the_title(); ?></span></a></li>
		  <?php endwhile; ?>
		  <?php
			$recent = new WP_Query("page_id=96");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <li><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><span class="number-div"><i class="flaticon-engineer"></i></span><span class="tab-txt"><?php the_title(); ?></span></a></li>
		  <?php endwhile; ?>
		  <?php
			$recent = new WP_Query("page_id=98");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <li><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><span class="number-div"><i class="flaticon-engineer"></i></span><span class="tab-txt"><?php the_title(); ?></span></a></li>
		  <?php endwhile; ?>
		  
          <!--<li><a href="#b" data-toggle="tab"><span class="number-div"><i class="flaticon-caution"></i></span> <span class="tab-txt">Construction Services</span></a></li>
		  
          <li><a href="#c" data-toggle="tab"><span class="number-div"><i class="flaticon-paint"></i></span> <span class="tab-txt">Building Modeling</span></a></li>
		  
          <li><a href="#d" data-toggle="tab"><span class="number-div"><i class="flaticon-settings"></i></span> <span class="tab-txt">Pre-construction</span></a></li>
		  
          <li><a href="#e" data-toggle="tab"><span class="number-div"><i class="flaticon-transport"></i></span> <span class="tab-txt">Management</span></a></li>-->
        </ul>
      </div>
      <div class="col-xs-9 wow fadeInRight" data-wow-duration="900ms"  data-wow-delay="400ms" >
        <div class="tab-content">
		<?php
			$recent = new WP_Query("page_id=110");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <div class="tab-pane active" id="<?php echo get_the_ID(); ?>">
            <div class="col-xs-6 border_radius"><img src="<?php echo bloginfo('template_url'); ?>/imgs/tab.jpg" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
              
            </div>
            <div class="clearfix"></div>
          </div>
		 <?php endwhile; ?>
		 <?php
			$recent = new WP_Query("page_id=106");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <div class="tab-pane" id="<?php echo get_the_ID(); ?>">
            <div class="col-xs-6 no-padding"><img src="<?php echo bloginfo('template_url'); ?>/imgs/tab.jpg" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
              
            </div>
            <div class="clearfix"></div>
          </div>
		 <?php endwhile; ?>
		 <?php
			$recent = new WP_Query("page_id=94");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <div class="tab-pane" id="<?php echo get_the_ID(); ?>">
            <div class="col-xs-6 no-padding"><img src="<?php echo bloginfo('template_url'); ?>/imgs/tab.jpg" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
              
            </div>
            <div class="clearfix"></div>
          </div>
		 <?php endwhile; ?>
		 <?php
			$recent = new WP_Query("page_id=96");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <div class="tab-pane" id="<?php echo get_the_ID(); ?>">
            <div class="col-xs-6 no-padding"><img src="<?php echo bloginfo('template_url'); ?>/imgs/tab.jpg" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
              
            </div>
            <div class="clearfix"></div>
          </div>
		 <?php endwhile; ?>
		 <?php
			$recent = new WP_Query("page_id=98");
		while ($recent->have_posts()) : $recent->the_post();
		?>
          <div class="tab-pane" id="<?php echo get_the_ID(); ?>">
            <div class="col-xs-6 no-padding"><img src="<?php echo bloginfo('template_url'); ?>/imgs/tab.jpg" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
              
            </div>
            <div class="clearfix"></div>
          </div>
		 <?php endwhile; ?>
		 
		 
         <!-- <div class="tab-pane" id="b">
            <div class="col-xs-6 no-padding"><img src="<?php echo bloginfo('template_url'); ?>/imgs/tab-2.jpg" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3>Construction Services</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
              <div class="icon-listing">
                <ul class="no-margin no-padding">
                  <li>
                    <div class="icon-cont"> <i class="fa fa-university" aria-hidden="true"></i> </div>
                    <div class="icon-txt">
                      <p class="lead">Building Modeling</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="icon-cont"> <i class="fa fa-users" aria-hidden="true"></i> </div>
                    <div class="icon-txt">
                      <p class="lead">Who we are</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="icon-cont"> <i class="fa fa-line-chart" aria-hidden="true"></i> </div>
                    <div class="icon-txt">
                      <p class="lead">Our Achievements</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="c">
            <div class="col-xs-6 no-padding"><img src="<?php echo bloginfo('template_url'); ?>/imgs/tab-3.jpg" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3>Building Modeling</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
              <div class="icon-listing">
                <ul class="no-margin no-padding">
                  <li>
                    <div class="icon-cont"> <i class="fa fa-university" aria-hidden="true"></i> </div>
                    <div class="icon-txt">
                      <p class="lead">Building Modeling</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="icon-cont"> <i class="fa fa-users" aria-hidden="true"></i> </div>
                    <div class="icon-txt">
                      <p class="lead">Who we are</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="icon-cont"> <i class="fa fa-line-chart" aria-hidden="true"></i> </div>
                    <div class="icon-txt">
                      <p class="lead">Our Achievements</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="d">
            <div class="col-xs-6 no-padding"><img src="<?php echo bloginfo('template_url'); ?>/imgs/tab-4.jpg" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3>Pre-construction</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
              <div class="icon-listing">
                <ul class="no-margin no-padding">
                  <li>
                    <div class="icon-cont"> <i class="fa fa-university" aria-hidden="true"></i> </div>
                    <div class="icon-txt">
                      <p class="lead">Building Modeling</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="icon-cont"> <i class="fa fa-users" aria-hidden="true"></i> </div>
                    <div class="icon-txt">
                      <p class="lead">Who we are</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="icon-cont"> <i class="fa fa-line-chart" aria-hidden="true"></i> </div>
                    <div class="icon-txt">
                      <p class="lead">Our Achievements</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>-->
          <div class="tab-pane" id="e">
            <div class="col-xs-6 no-padding"><img src="<?php echo bloginfo('template_url'); ?>/imgs/tab-5.jpg" alt="" class="img-responsive"/></div>
            <div class="col-xs-6">
              <h3>Management</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
              <div class="icon-listing">
                <ul class="no-margin no-padding">
                  <li>
                    <div class="icon-cont"> <i class="fa fa-university" aria-hidden="true"></i> </div>
                    <div class="icon-txt">
                      <p class="lead">Building Modeling</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="icon-cont"> <i class="fa fa-users" aria-hidden="true"></i> </div>
                    <div class="icon-txt">
                      <p class="lead">Who we are</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="icon-cont"> <i class="fa fa-line-chart" aria-hidden="true"></i> </div>
                    <div class="icon-txt">
                      <p class="lead">Our Achievements</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
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
								'posts_per_page' => 5,
								'paged' => $paged,
							);
				$products = new WP_Query($args);
			
				if($products){
					$protfolios = array();
					$i = 1;
					$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;	
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
        <!--<p><?php echo join('/',$protfolios); ?></p>-->
		<p><a href="<?php the_permalink(); ?>">Read More</a></p>
      </div>
      <!--<img src="<?php  // echo get_the_post_thumbnail_url(); ?>" alt="" class="img-responsive"/>-->
	   <div class="gallery_detail_img"><?php the_post_thumbnail('full',array('class' => 'img-responsive')); ?></div>
      <div class="clearfix"></div>
						</div><?php } else { ?>
    <div class="col-xs-2 wow fadeIn" data-wow-duration="900ms"  data-wow-delay="100ms" >
      <div class="gamma-description montserrat gallery_detail"> <a href="<?php the_permalink(); ?>" class="full-link" title=""></a>
        <h3><span class="clearfix"></span><?php the_title(); ?></h3>
        <!--<p><?php echo join('/',$protfolios); ?></p>-->
		<p><a href="<?php the_permalink(); ?>">Read More</a></p>
      </div>
      <!--<img src="<?php // echo get_the_post_thumbnail_url(); ?>" alt="" class="img-responsive"/> -->
	  <div class="gallery_detail_img"><?php the_post_thumbnail('full',array('class' => 'img-responsive')); ?></div>
	  </div>
	 
						<?php } $i++; } } ?>
    
   
    
    
   
   
    
    <div class="clearfix"></div>
  </div>
  <div class="project-bottom wow fadeIn" data-wow-duration="900ms"  data-wow-delay="250ms" > <a href="<?php echo bloginfo('url'); ?>/our-latest-portfolio/" class="montserrat project_btn">View our latest work </a> </div>
  <ul class="pagination">
	<?php wp_pagenavi(); 	?>
	</ul>
</div>
<!--\\ Projects -->
<!-- company certifications -->
<div class="content-section company-certification metric_border_section"  id="set-7"> <img src="<?php echo bloginfo('template_url'); ?>/imgs/services-right.jpg" class="img-responsive right-services" alt=""/>
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
      <p><?php the_excerpt(); ?></p>
	  <a href="#">Read More..</a>
      </span> </div>
				<?php } }  ?>
				
	  
    <!--<div class="col-xs-3 text-center">
      <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7a wow fadeInUp" data-wow-duration="900ms"  data-wow-delay="200ms">
        <div class="hi-icon"><img src="<?php echo bloginfo('template_url'); ?>/imgs/circle-icons/building.png" class="img-1" alt=""/><img src="<?php echo bloginfo('template_url'); ?>/imgs/circle-icons/building-hover.png" class="img-2" alt=""/></div>
      </div>
      <span class="wow fadeInDown" data-wow-duration="900ms"  data-wow-delay="250ms">
      <h3 class="open-sans">Building Modeling</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do... Audio, beds, Decor, Motion, Music </p>
      </span> </div>
    <div class="col-xs-3 text-center">
      <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7a wow fadeInUp" data-wow-duration="900ms"  data-wow-delay="300ms">
        <div class="hi-icon"><img src="<?php echo bloginfo('template_url'); ?>/imgs/circle-icons/design.png" class="img-1" alt=""/><img src="<?php echo bloginfo('template_url'); ?>/imgs/circle-icons/design-hover.png" class="img-2" alt=""/></div>
      </div>
      <span class="wow fadeInDown" data-wow-duration="900ms"  data-wow-delay="350ms">
      <h3 class="open-sans">Building Design</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do... Audio, beds, Decor, Motion, Music </p>
      </span> </div>
    <div class="col-xs-3 text-center">
      <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7a wow fadeInUp" data-wow-duration="900ms"  data-wow-delay="400ms">
        <div class="hi-icon"><img src="<?php echo bloginfo('template_url'); ?>/imgs/circle-icons/services.png" class="img-1" alt=""/><img src="<?php echo bloginfo('template_url'); ?>/imgs/circle-icons/services-hover.png" class="img-2" alt=""/></div>
      </div>
      <span class="wow fadeInDown" data-wow-duration="900ms"  data-wow-delay="450ms">
      <h3 class="open-sans">Construction Services</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do... Audio, beds, Decor, Motion, Music </p>
      </span> </div>-->
   <div class="clearfix"></div>
   <div class="project-bottom wow fadeIn" data-wow-duration="900ms"  data-wow-delay="250ms" > <a href="<?php echo bloginfo('url'); ?>/our-latest-portfolio/" class="montserrat project_btn text_colored">Request a quote </a> </div>
  </div>
</div>
<!--\\ company certifications -->
<!--subscribe -->
<!--<div class="content-section subscribe-section text-center"> <span id="subscribe-main" class="hotspot hotspot-subscribe"></span>
  <div class="pattern-2"></div>
  <div class="container">
    <h2 class="text-center text-uppercase">SUBSCRIBE FOR <span class="orange-txt">OUR NEWSLETTER!</span></h2>
    <div class="border-creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border-2.png"></div>
    <p>Sign up to our newsletter subscription and be the first to know about latest company news, special offers and discounts.</p>
    <form action="" method="post" id="subsMiddleForm" onSubmit="return ajaxmailmiddlesubscribe();">
      <input type="hidden" name="from" value="index.html" />
      <input type="email" name="subsmiddleemail" id="subsmiddleemail" placeholder="Enter your Email Address"/>
      <input type="button" value="SUBSCRIBE NOW" onClick="return ajaxmailmiddlesubscribe();"/>
    </form>
  </div>
</div>-->
<!--\\ subscribe -->
<!--staff -->
<!--<div class="content-section light-bg staff-section">
  <div class="container">
    <h2 class="text-center text-uppercase">Our Expert <span class="orange-txt">Staff</span></h2>
    <div class="border-creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div>
    <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-4.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>Jim Brown</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-1.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>John Anderson</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-2.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>Maria Smith</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-3.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>Jim Lee</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-4.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>Jim Brown</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-1.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>John Anderson</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-2.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>Maria Smith</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-3.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>Jim Lee</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-4.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>Jim Brown</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-1.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>John Anderson</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-2.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>Maria Smith</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-3.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>Jim Lee</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-4.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>Jim Brown</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-1.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>John Anderson</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-2.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>Maria Smith</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="">
          <div class="hexagon hexagon1">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background:url(<?php echo bloginfo('template_url'); ?>/imgs/staff/staff-3.png) no-repeat;"></div>
            </div>
          </div>
          <div class="staff-desc text-center">
            <h5>Jim Lee</h5>
            <p>Senior Product Officer</p>
            <div class="bottom-staff">
              <ul class="no-margin no-padding">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!-- /col -->
  <!--</div>
</div>-->
<!--\\ staff -->
<!--counter -->
<!--<div class="content-section counter-section text-center">
  <div class="pattern-2"></div>
  <div class="container">
    <div class="col-xs-3">
      <div class="counter-div">
        <div class="stats-2-img"> <i class="fa fa-suitcase" aria-hidden="true"></i> </div>
        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='120' data-delay='.5' data-increment="1">324</div>
        <p class="montserrat">project completed</p>
      </div>
    </div>
    <div class="col-xs-3">
      <div class="counter-div">
        <div class="stats-2-img"> <i class="fa fa-users" aria-hidden="true"></i> </div>
        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='324' data-delay='.5' data-increment="1">324</div>
        <p class="montserrat">workers & stuffs</p>
      </div>
    </div>
    <div class="col-xs-3">
      <div class="counter-div">
        <div class="stats-2-img"> <i class="fa fa-trophy" aria-hidden="true"></i> </div>
        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='70' data-delay='.5' data-increment="1">324</div>
        <p class="montserrat">awards won</p>
      </div>
    </div>
    <div class="col-xs-3">
      <div class="counter-div">
        <div class="stats-2-img"> <i class="fa fa-bar-chart" aria-hidden="true"></i> </div>
        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='350' data-delay='.5' data-increment="1">324</div>
        <p class="montserrat">Features</p>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>-->
<!--\\ counter-->
<!-- News -->
<!--<div class="content-section news-section">
  <div class="container">
    <h2 class="text-center text-uppercase">Our Latest <span class="orange-txt">News</span></h2>
    <div class="border-creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div>
    <div class="owl-carousel owl-theme wow fadeIn" data-wow-duration="900ms"  data-wow-delay="250ms">
	
	<?php 
	wp_reset_query();
				$args = array(
								'post_type' => 'post',
								'posts_per_page' => 9
							);
				$products = new WP_Query($args);
			
				if($products){
					
					while ($products->have_posts()) {
						
						$products->the_post();
					?>
      <div class="item">
        <div>
          <div class="grid cs-style-3">
            <div class="figure">
              <div class="overlay-div montserrat">
                <div class="linkss"><a href="<?php the_permalink(); ?>"><span><i class="fa fa-search" aria-hidden="true"></i></span></a> </div>
              </div>
			  <?php the_post_thumbnail('full',array('class' => 'img-responsive'));?>
             <!-- <img src="<?php echo bloginfo('template_url'); ?>/imgs/news/news-1.jpg" class="img-responsive" alt="img04">-->
              <!--<div class="figcaption">
                <div class="heading montserrat">
                  <h3><?php the_title(); ?></h3>
                </div>
                <div class="news-detls">
                  <ul class="no-margin no-padding montserrat">
                    <li><i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?> </li>
                    <li><i class="fa fa-heart" aria-hidden="true"></i> 126</li>
                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('F j, Y') ?></li>
                  </ul>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
				<?php } } wp_reset_query(); ?>
    
      
    </div>
    <div class="clearfix"></div>
  </div>
</div>-->

<div class="content-section news-section metric_section">
  <div class="container">
    <h2 class="text-center text-uppercase">TRENDS & <span class="orange-txt">IDEAS</span></h2>
    <div class="border_creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div>

	<div class="trends_section">
		<div class="row">
			<div class="col-sm-3">
				<div class="trends_detail">
					<figure><img src="<?php echo bloginfo('template_url'); ?>/imgs/trends-img1.jpg" width="263" height="" alt="img" /></figure>
					<div class="trends_detail_text">
						<h3>Bathroom FAQ</h3>
						<p>Your questions answered</p>
						<a href="#">Read More..</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="trends_detail">
					<figure><img src="<?php echo bloginfo('template_url'); ?>/imgs/trends-img1.jpg" width="263" height="" alt="img" /></figure>
					<div class="trends_detail_text">
						<h3>Bathroom FAQ</h3>
						<p>Your questions answered</p>
						<a href="#">Read More..</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="trends_detail">
					<figure><img src="<?php echo bloginfo('template_url'); ?>/imgs/trends-img1.jpg" width="263" height="" alt="img" /></figure>
					<div class="trends_detail_text">
						<h3>Bathroom FAQ</h3>
						<p>Your questions answered</p>
						<a href="#">Read More..</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="trends_detail">
					<figure><img src="<?php echo bloginfo('template_url'); ?>/imgs/trends-img1.jpg" width="263" height="" alt="img" /></figure>
					<div class="trends_detail_text">
						<h3>Bathroom FAQ</h3>
						<p>Your questions answered</p>
						<a href="#">Read More..</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
    <div class="clearfix"></div>
  </div>
</div>
<!--\\ news -->
<!-- client-testimonial -->
<!--<div class="testimonial-section wow fadeIn pos-relative" data-wow-duration="900ms"  data-wow-delay="150ms">
  <div class="pattern"></div>
  <div class="container pos-relative">
    <div class="text-center testi-heading">
      <h3 class="montserrat">Client's Sayings</h3>
    </div>
    <div id="quote-carousel" data-ride="carousel" class="carousel carousel-2 slide">
      <!-- Bottom Carousel Indicators -->
      <!-- Carousel Slides / Quotes -->
    <!--  <div class="carousel-inner">
        <!-- Quote 1 -->
      <!--  <div class="item active text-center">
          <blockquote>
            <div class="row">
              <div class="col-xs-12">
                <div class="img-and-name"> <img src="<?php echo bloginfo('template_url'); ?>/imgs/quote.png" class="quote-icon img-responsive" alt=""/> <img style="width: 100px;height:100px;" src="<?php echo bloginfo('template_url'); ?>/imgs/client.png" class="img-circle" alt="">
                  <div class="clearfix"></div>
                </div>
                <p class="quote-para">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              </div>
            </div>
          </blockquote>
        </div>
        <!-- Quote 2 -->
        <!--<div class="item text-center">
          <blockquote>
            <div class="row">
              <div class="col-xs-12">
                <div class="img-and-name"> <img src="<?php echo bloginfo('template_url'); ?>/imgs/quote.png" class="quote-icon img-responsive" alt=""/> <img style="width: 100px;height:100px;" src="<?php echo bloginfo('template_url'); ?>/imgs/client.png" class="img-circle" alt="">
                  <div class="clearfix"></div>
                </div>
                <p class="quote-para">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              </div>
            </div>
          </blockquote>
        </div>
        <!-- Quote 3 -->
       <!-- <div class="item text-center">
          <blockquote>
            <div class="row">
              <div class="col-xs-12">
                <div class="img-and-name"> <img src="<?php echo bloginfo('template_url'); ?>/imgs/quote.png" class="quote-icon img-responsive" alt=""/> <img style="width: 100px;height:100px;" src="<?php echo bloginfo('template_url'); ?>/imgs/client.png" class="img-circle" alt="">
                  <div class="clearfix"></div>
                </div>
                <p class="quote-para">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              </div>
            </div>
          </blockquote>
        </div>
      </div>
    </div>
    <!-- Carousel Buttons Next/Prev -->
    <!--<a class="left carousel-control" href="#quote-carousel" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i> </a> <a class="right carousel-control" href="#quote-carousel" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i> </a> </div>
</div>-->
<!-- \\ client-testimonial -->
<!-- footer-logos -->



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





<?php get_footer(); ?>
