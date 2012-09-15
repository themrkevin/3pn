<!-- START footer.php -->

            </div><!--.content-->
            <?php if(is_front_page()) { ?>
              <section class="events-list">
                <?php dynamic_sidebar('Events List'); ?>
              </section>
            <?php } ?>
        </div><!--.left-->
  <?php if(!is_page( array ('members','video','photos'))) { ?>
	  <?php get_sidebar(); ?>
  <?php } ?>
    </div>
    <div class="footer-top"></div>
    <footer class="clearfix">
        <div class="footer-content clearfix">
          <div class="twitter">
            <?php dynamic_sidebar('twitter-feed-box'); ?>
          </div><!-- .twitter -->
          <div class="social-media clearfix">
            <h2>Follow Us!</h2>
            <ul>
              <li class="col-1"><a href="http://www.facebook.com/threepiecenugget" target="_blank"><img class="tilt" src="<?php  bloginfo('template_url'); ?>/img/fb-icon.png" alt="Like Three Piece Nugget on Facebook" /></a></li>
              <li class="col-2"><a href="http://www.twitter.com/threepcnugget" target="_blank"><img class="tilt" src="<?php  bloginfo('template_url'); ?>/img/twitter-icon.png" alt="Follow Three Piece Nugget on Twitter!" /></a></li>
              <li class="col-1"><a href="http://www.youtube.com/threepiecenugget" target="_blank"><img class="tilt" src="<?php  bloginfo('template_url'); ?>/img/youtube-icon.png" alt="Watch Three Piece Nugget on YouTube" /></a></li>
              <li class="col-2"><a href="http://www.reverbnation.com/threepiecenugget" target="_blank"><img class="tilt" src="<?php  bloginfo('template_url'); ?>/img/reverb-icon.png" alt="Three Piece Nugget in Reverb Nation" /></a></li>
            </ul>
          </div><!--.social-media-->
          <div class="contact-stuff">
            <h2>Contact Us</h2>
            <ul>
              <li>Dom:</li>
              <li>Sean:</li>
              <li>Russ</li>
            </ul>
          </div><!-- .contact-stuff -->  
        </div><!--footer-content-->
        <div class="bottom clearfix">
          <div class="twitter-bird">
            <img src="<?php  bloginfo('template_url'); ?>/img/twitter-bird.png" />
          </div>
          <div class="mailing-list">
            <h2>Join the Mailing List</h2>
          </div><!-- .mailing-list -->
          <p class="fineprint">Three Piece Nugget &copy; 2011 | Designed &amp; Developed by <a href="http://designjeaks.com" target="_blank"><img src="<?php  bloginfo('template_url'); ?>/img/dj-logo.png" alt="Design JEAKS" /></a> <a href="http://designjeaks.com" class="dj-link" target="_blank">Design JEAKS</a></p>          
          <div class="instruments">
            <img src="<?php  bloginfo('template_url'); ?>/img/instruments.png" />
          </div>
        </div><!-- .bottom -->
    </footer>
  </div> <!--! end of #container -->
</div><!--.wrapper-->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  <script>window.jQuery || document.write("<script src='<?php  bloginfo('template_url'); ?>/js/libs/jquery-1.7.0.min.js'>\x3C/script>")</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script src="<?php  bloginfo('template_url'); ?>/js/plugins.js"></script>
  <script src="<?php  bloginfo('template_url'); ?>/js/script.js"></script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->


  <!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
  <script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>

<?php wp_footer(); ?>

</body>

<!-- Design JEAKS template -->

</html>