<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();  ?>
<div class="inner-header">
  <div class="pattern"></div>
  <div class="display-cell">
    <div class="container">
      <div class="col-xs-12 text-left">
        <div class="home-builder-page-title">
          <h1><?php the_archive_title(); ?></h1>
          <!--<h1 class="titlecolor">page</h1>-->
          <img src="<?php echo bloginfo('template_url');?>/imgs/linew.png" alt="">
          <ol class="breadcrumb">
            <!--<li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="active"><?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?></li>-->
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
		<?php 
	while ( have_posts() ) : the_post();
					?>
					
        <div class="blog-in">
          <h1 class="montserrat"><?php the_title(); ?></h1>
          <ul class="comm-date">
            <li><?php the_time('F j, Y') ?></li>
            <li>|</li>
            <li> <span>by <?php the_author(); ?> </span> </li>
            <li>|</li>
            <li>No Comments</li>
          </ul>
          <div class="img-cont"><img src="<?php echo bloginfo('template_url');?>/imgs/blog-1.jpg" alt="" title="" class="img-responsive"></div>
          <div class="blog-text">
            <?php the_excerpt(); ?>
          </div>
          <div class="pull-left"><a href="<?php the_permalink(); ?>" class="continue montserrat">READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a></div>
          <div class="pull-right">
            <div class="share2 montserrat">
              <h4>SHARE </h4>
              <a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a> <a href="#" class="icoInsta" title="Instagram"><i class="fa fa-instagram"></i></a> <a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a> <a href="#" class="icoGoogle" title="pinterest+"><i class="fa fa-pinterest"></i></a> <a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a> </div>
          </div>
          <div class="clearfix"></div>
        </div>
       <?php endwhile; wp_reset_query(); ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
