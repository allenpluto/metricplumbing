<?php get_header(); 

while ( have_posts() ) : the_post();
?>
<!--\\ Navigation -->
<!-- Inner Header -->
<div class="inner-header">
  <div class="pattern"></div>
  <div class="display-cell">
    <div class="container">
      <div class="col-xs-12 text-left">
        <div class="home-builder-page-title">
          <h1>Blog</h1>
          <h1 class="titlecolor">page</h1>
          <img src="imgs/linew.png" alt="">
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="active">Blog Page</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
<!--\\ Inner Header -->
<!-- Content Section -->
<div class="content-section about-page-section blog-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="blog-in">
          <h1 class="montserrat"><?php the_title(); ?></h1>
          <ul class="comm-date">
            <li><?php the_time('F j, Y') ?></li>
            <li>|</li>
            <li> <span>by <?php the_author(); ?></span> </li>
            <li>|</li>
            <li>No Comments</li>
          </ul>
          <div class="img-cont">
		  <?php the_post_thumbnail('full',array('class' => 'img-responsive' )); ?>
		  <!--<img src="imgs/blog-1.jpg" alt="" title="" class="img-responsive">--></div>
          <div class="blog-text">
            <?php the_content(); ?>
          </div>
          <div class="pull-left text-uppercase" > <a href="blog-details.html" class="right-tags montserrat">Home</a> <a href="blog-details.html" class="right-tags montserrat">Repair</a> <a href="blog-details.html" class="right-tags montserrat">Service</a> <a href="blog-details.html" class="right-tags montserrat">Construction</a> </div>
          <div class="pull-right">
            <div class="share2 montserrat">
              <h4>SHARE </h4>
              <a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a> <a href="#" class="icoInsta" title="Instagram"><i class="fa fa-instagram"></i></a> <a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a> <a href="#" class="icoGoogle" title="pinterest+"><i class="fa fa-pinterest"></i></a> <a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a> </div>
          </div>
          <div class="clearfix"></div>
          <hr class="pro-hr">
          <div class="comment-section">
            <div class="dp-container"><img src="imgs/client-1.jpg" class="img-responsive" alt=""/></div>
            <div class="main-comment">
              <h4>Selina Kyle <span>8 April, 2017 at 9:00 am</span></h4>
              <p>Duis autem vel eum iriure dolor in hendrerit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsanet iusto odio dignissim qui blandit praesent. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quo.</p>
              <button data-toggle="collapse" data-target="#reply-one">Reply</button>
            </div>
            <div class="clearfix"></div>
            <div id="reply-one" class="collapse reply-form">
              <form action="/" method="post" id="blogForm">
                <h3>Reply to the Comment</h3>
                <div class="row">
                  <div class="col-xs-6">
                    <input type="text" class="form-group name-input" placeholder="Name" name="name" id="name"/>
                  </div>
                  <div class="col-xs-6 no-padding-left">
                    <input type="email" class="form-group name-input" placeholder="Email" name="email" id="email"/>
                  </div>
                  <div class="col-xs-12">
                    <textarea placeholder="Message" name="message" id="message"></textarea>
                  </div>
                  <div class="col-xs-12">
                    <input type="button" class="continue montserrat" value="SUBMIT" name="submitt" onClick="return ajaxmailblog();">
                    <!--<a href="blog-details.html" class="continue montserrat">SUBMIT <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>-->
                  </div>
                  <div class="clearfix"></div>
                </div>
              </form>
            </div>
          </div>
          <hr class="pro-hr">
          <div class="comment-section">
            <div class="dp-container"><img src="imgs/client-2.jpg" class="img-responsive" alt=""/></div>
            <div class="main-comment">
              <h4>Chris Wayne <span>8 April, 2017 at 9:00 am</span></h4>
              <p>Duis autem vel eum iriure dolor in hendrerit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsanet iusto odio dignissim qui blandit praesent. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quo.</p>
              <button data-toggle="collapse" data-target="#reply-two">Reply</button>
            </div>
            <div class="clearfix"></div>
            <div id="reply-two" class="collapse reply-form">
              <form action="/" method="post" id="blogForm">
                <h3>Reply to the Comment</h3>
                <div class="row">
                  <div class="col-xs-6">
                    <input type="text" class="form-group name-input" placeholder="Name" name="name" id="name"/>
                  </div>
                  <div class="col-xs-6 no-padding-left">
                    <input type="email" class="form-group name-input" placeholder="Email" name="email" id="email"/>
                  </div>
                  <div class="col-xs-12">
                    <textarea name="message" id="message" placeholder="Message"></textarea>
                  </div>
                  <div class="col-xs-12">
                    <input type="button" class="continue montserrat" value="SUBMIT" name="submitt" onClick="return ajaxmailblog();">
                    <!--<a href="blog-details.html" class="continue montserrat">SUBMIT <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
-->
                  </div>
                  <div class="clearfix"></div>
                </div>
              </form>
            </div>
          </div>
          <hr class="pro-hr">
          <div class="comment-section">
            <div class="clearfix"></div>
            <div class="reply-form no-margin no-background no-border no-padding">
              <form>
                <h3>Leave the comment</h3>
                <div class="row">
                  <div class="col-xs-6">
                    <input type="text" class="form-group name-input" placeholder="Name" />
                  </div>
                  <div class="col-xs-6 no-padding-left">
                    <input type="email" class="form-group name-input" placeholder="Email" />
                  </div>
                  <div class="col-xs-12">
                    <textarea placeholder="Message"></textarea>
                  </div>
                  <div class="col-xs-12"> <a href="blog-details.html" class="continue montserrat">SUBMIT <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </div>
                  <div class="clearfix"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
     <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php 
endwhile;
get_footer(); ?>
