<?php wp_footer(); ?>
<div class="footer-logos content-section metric_section">
  <div class="container">
    <h2 class="text-center text-uppercase">Our <span class="orange-txt">Brands</span></h2>
    <div class="border-creative text-center"><img src="<?php echo bloginfo('template_url'); ?>/imgs/border.png" alt=""/></div>
   
	
	<div class="brand_list">
	<div class="row">
	<?php
	 wp_reset_query();
	 					$args = array(
							'post_type' => 'brands',
	 							'posts_per_page' => 9
							);
	 			$products = new WP_Query($args);
			
				if($products){
					
	 				while ($products->have_posts()) {
						
	 					$products->the_post();
					?>
		<div class="col-sm-2 col-xs-6">
			<figure class="text-center"><?php the_post_thumbnail(); ?></figure>
		</div>
				<?php } } ?>
		
	</div>
	</div>
	
	
  </div>
</div>
<!-- \\footer-logos -->
<!-- footer -->
<div class="footer">
  <div class="newsletter wow fadeInUp footer_contact" data-wow-duration="900ms"  data-wow-delay="100ms">
	<div class="col-sm-offset-1 col-sm-10 col-xs-12">
		<div class="row">
			
			<div class="col-xs-6">
				<div class="footer_icon"><img src="<?php echo bloginfo('template_url'); ?>/imgs/footer-icon2.png" width="27" height="27" alt="icon" /></div>
				<div class="footer_icon_detail">
					<h3>Phone</h3>
					<p><a href="tel:<?php echo get_option("phone_number"); ?>"><?php echo get_option("phone_number"); ?></a> , <a href="tel:<?php echo get_option("alternate"); ?>"><?php echo get_option("alternate"); ?></a></p>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="footer_icon"><img src="<?php echo bloginfo('template_url'); ?>/imgs/footer-icon3.png" width="29" height="20" alt="icon" /></div>
				<div class="footer_icon_detail">
					<h3>Mail Us</h3>
					<p><a href="mailto:<?php echo get_option("e_mail"); ?>"><?php echo get_option("e_mail"); ?></a></p>
				</div>
			</div>
		</div>
	</div>
    
  </div>
  <div class="footer-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3 col-xs-12 wow fadeIn" data-wow-duration="900ms"  data-wow-delay="150ms">
         
		  <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 wow fadeIn" data-wow-duration="900ms"  data-wow-delay="250ms" >
       
		  <!--<h3>Bathroom Renovations</h3>
		  <ul>
		  	<li><a href="#">Bathroom Packages</a></li>
			<li><a href="#">Custom Bathroom Design + Build services</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">Projects</a></li>
			<li><a href="#">Trends and ideas</a></li>
		  </ul>-->
		  <?php dynamic_sidebar('sidebar-3'); ?>
		 
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 wow fadeIn" data-wow-duration="900ms"  data-wow-delay="350ms">
         
		   <?php dynamic_sidebar('sidebar-2'); ?>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 wow fadeIn" data-wow-duration="900ms" data-wow-delay="450ms">
        
		  <?php wp_nav_menu(array('theme_location' => 'footerlink4')); ?>	
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="pull-left">
		<a href="/" class="footer_logo"><img src="<?php echo bloginfo('template_url'); ?>/imgs/metric-bathroom-renovation-services-sydney.png" alt="footer Image" class="img-responsive"/></a>
      </div>
      <div class="pull-right">
        <div class="footer_facebook">Like Us on <a href="<?php echo get_option('facebook_link'); ?>">Facebook</a></div>
		<div class="footer_top4"><a target="_blank" href="https://www.top4.com.au/business/metric-plumbing-103212">A Top4 <span>Business</span></a></div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- footer-->
</div>
<!-- Scroll Top Button -->
<a href="#top"></a>
<!--  Form Submission Popup -->
<p data-toggle="modal" class="no-margin" data-target="#myModal" id="model2"></p>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body"> <br />
        <br />
        <h3 class="modal-title">Thank You</h3>
        <h4>We will get back to you as soon as possible.</h4>
        <br />
        <br />
        <br />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--  \\ Form Submission Popup -->
<!-- Jquery Section  -->
<!-- Form Script -->
<script src="<?php echo bloginfo('template_url'); ?>/js/ajax.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/formValidation.js"></script>
<!-- JavaScript Library-->
<script src="<?php echo bloginfo('template_url'); ?>/js/jquery-1.12.4.min.js"></script>
<!-- Number Counter -->
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/numscroller-1.0.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<!--<script src="js/bootstrap-colorpicker.js"></script>
<script>
          $(function () {
              $('#cp11').colorpicker();
          });
      </script>
--><!-- Owl Carousel -->
<script src="<?php echo bloginfo('template_url'); ?>/js/owlcarousel/owl.carousel.staff.js"></script>

<!-- Animation JS -->
<script src="<?php echo bloginfo('template_url'); ?>/js/wow.min.js"></script>
<!-- Custom JS -->
<script src="<?php echo bloginfo('template_url'); ?>/js/custom-index.js"></script>
<!-- Fixed Header -->
<script src="<?php echo bloginfo('template_url'); ?>/js/classie.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/cbpAnimatedHeader.js"></script>
</body>
<!-- // Body -->
</html>
<!-- // HTML -->
<!-- Scroll to Top -->
<script>
"use strict";
var scrolltotop={
	//startline: Integer. Number of pixels from top of doc scrollbar is scrolled before showing control
	//scrollto: Keyword (Integer, or "Scroll_to_Element_ID"). How far to scroll document up when control is clicked on (0=top).
	setting: {startline:100, scrollto: 0, scrollduration:1000, fadeduration:[500, 100]},
	controlHTML: '<img src="<?php echo bloginfo('template_url'); ?>/imgs/up.png" style="width:48px; height:48px" />', //HTML for control, which is auto wrapped in DIV w/ ID="topcontrol"
	controlattrs: {offsetx:5, offsety:5}, //offset of control relative to right/ bottom of window corner
	anchorkeyword: '#top', //Enter href value of HTML anchors on the page that should also act as "Scroll Up" links
	state: {isvisible:false, shouldvisible:false},
	scrollup:function(){
		if (!this.cssfixedsupport) //if control is positioned using JavaScript
			this.$control.css({opacity:0}) //hide control immediately after clicking it
		var dest=isNaN(this.setting.scrollto)? this.setting.scrollto : parseInt(this.setting.scrollto)
		if (typeof dest=="string" && jQuery('#'+dest).length==1) //check element set by string exists
			dest=jQuery('#'+dest).offset().top
		else
			dest=0
		this.$body.animate({scrollTop: dest}, this.setting.scrollduration);
	},
	keepfixed:function(){
		var $window=jQuery(window)
		var controlx=$window.scrollLeft() + $window.width() - this.$control.width() - this.controlattrs.offsetx
		var controly=$window.scrollTop() + $window.height() - this.$control.height() - this.controlattrs.offsety
		this.$control.css({left:controlx+'px', top:controly+'px'})
	},
	togglecontrol:function(){
		var scrolltop=jQuery(window).scrollTop()
		if (!this.cssfixedsupport)
			this.keepfixed()
		this.state.shouldvisible=(scrolltop>=this.setting.startline)? true : false
		if (this.state.shouldvisible && !this.state.isvisible){
			this.$control.stop().animate({opacity:1}, this.setting.fadeduration[0])
			this.state.isvisible=true
		}
		else if (this.state.shouldvisible==false && this.state.isvisible){
			this.$control.stop().animate({opacity:0}, this.setting.fadeduration[1])
			this.state.isvisible=false
		}
	},
	init:function(){
		jQuery(document).ready(function($){
		var mainobj=scrolltotop
		var iebrws=document.all
		mainobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest//not IE or IE7+ browsers in standards mode
		mainobj.$body=(window.opera)? (document.compatMode=="CSS1Compat"? $('html') : $('body')) : $('html,body')
		mainobj.$control=$('<div id="topcontrol">'+mainobj.controlHTML+'</div>')
			.css({position:mainobj.cssfixedsupport? 'fixed' : 'absolute', bottom:mainobj.controlattrs.offsety, right:mainobj.controlattrs.offsetx, opacity:0, cursor:'pointer'})
		.attr({title:'Scroll Back to Top'})
		.on('click',function(){mainobj.scrollup(); return false})
		.appendTo('body')
		if (document.all && !window.XMLHttpRequest && mainobj.$control.text()!='')//loose check for IE6 and below, plus whether control contains any text
		mainobj.$control.css({width:mainobj.$control.width()}) //IE6- seems to require an explicit width on a DIV containing text
		mainobj.togglecontrol()
		$('a[href="' + mainobj.anchorkeyword +'"]').on('click', function(){
		mainobj.scrollup()
			return false
		})
		$(window).bind('scroll resize', function(e){
			mainobj.togglecontrol()
			})
		})
		}
	}
scrolltotop.init()
jQuery(window).on('load', function() {
"use strict";
    // will first fade out the loading animation
    jQuery("#status").fadeOut();
    // will fade out the whole DIV that covers the website.
jQuery("#preloader").delay(1000).fadeOut("slow");
  $("#preloader").fadeOut(1000, function() {
      $('body').removeClass('loading');
  });

})
</script>