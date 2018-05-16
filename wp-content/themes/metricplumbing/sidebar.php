<div class="col-md-4">
        <div class="">
          <div class="blog-right search-blog">
            <h1>Search</h1>
            <div class="border-orange"></div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="input-group">
                  <input class="form-control" type="text" placeholder="Search your Topic">
                  <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                  </span> </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <br>
          <div class="blog-right-2 padding-left-15">
            <div class="blog-right">
              <h1>Archieves</h1>
              <div class="border-orange"></div>
              <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-12">
                  <div class="cat-list">
                    <ul>
                      <li><a href="#">April 2017</a></li>
                      <li><a href="#">March 2017</a></li>
                      <li><a href="#">February 2017</a></li>
                      <li><a href="#">January 2017</a></li>
                      <li><a href="#">December 2016</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <br>
            <div class="blog-right">
              <h1>POPULAR POSTS</h1>
              <div class="border-orange"></div>
              <div class="clearfix"></div>
              <div class="">
                <div class="col-md-5 col-sm-4 col-xs-4 no-padding"> <img src="<?php echo bloginfo('template_url');?>/imgs/a.jpg" class="img-responsive" alt=""> </div>
                <div class="col-md-7 col-sm-8 col-xs-8 no-padding-right"> <a href="blog-details.html">
                  <h4>Neque porro quisquam est qui dolorem</h4>
                  </a>
                  <p>March 31, 2017</p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-5 col-sm-4 col-xs-4 no-padding"> <img src="<?php echo bloginfo('template_url');?>/imgs/b.jpg" class="img-responsive" alt=""> </div>
                <div class="col-md-7 col-sm-8 col-xs-8 no-padding-right"> <a href="blog-details.html">
                  <h4>Neque porro quisquam est qui dolorem</h4>
                  </a>
                  <p>March 31, 2017</p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-5 col-sm-4 col-xs-4 no-padding"> <img src="<?php echo bloginfo('template_url');?>/imgs/c.jpg" class="img-responsive" alt=""> </div>
                <div class="col-md-7 col-sm-8 col-xs-8 no-padding-right"> <a href="blog-details.html">
                  <h4>Neque porro quisquam est qui dolorem</h4>
                  </a>
                  <p>March 31, 2017</p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="blog-right-2">
            <div class="blog-right">
              <h1>Categories</h1>
              <div class="border-orange"></div>
              <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-12">
                  <div class="cat-list">
                    <ul>
                      <li><a href="#">Contracting</a></li>
                      <li><a href="#">Construction</a></li>
                      <li><a href="#">Repairement</a></li>
                      <li><a href="#">Home Making</a></li>
                      <li><a href="#">Other services</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <br>
            <div class="blog-right tags-div">
              <h1>Popular tags</h1>
              <div class="border-orange"></div>
              <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-12">
                  <div class="tag-list"> 
				  <ul>
			  <?php	
$tags = get_tags();

foreach ( $tags as $tag ) {  
if($tag->slug != "migliori"){
$tag_link = get_tag_link( $tag->term_id );
?>
<li><a href="<?php echo $tag_link; ?>"><?php echo $tag->name; ?></a></li>

                   
					<?php  } } ?>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
