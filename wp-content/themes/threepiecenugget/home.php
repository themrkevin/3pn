<?php get_header(); ?>

<!-- START blog.php -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article>
      <div class="post-entry">
         <h2><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
         <?php the_excerpt(); ?>
      
      
         <div class="entry-meta">
            <p>
               <span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
               <span class="author vcard"><a target="_blank" class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
               <span class="meta-sep"> | </span>
               <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'your-theme'); ?></span>
               <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
               <span class="meta-sep"> | </span>
               <span class="cat-links">
                  <span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'your-theme' ); ?></span>
                  <?php echo get_the_category_list(', '); ?>
               </span>
               <span class="meta-sep"> | </span>
               <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'your-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
               <span class="comments-link">
                  <?php comments_popup_link( __( 'Leave a comment', 'your-theme' ), __( '1 Comment', 'your-theme' ), __( '% Comments', 'your-theme' ) ) ?>
               </span>
            </p>
         </div>
              
         
      </div>
      </article>
    <?php endwhile; else: ?>
    <?php endif; ?>
    <div class="pagination">
    <?php 
        global $wp_query, $wp_rewrite;
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
        
        $pagination = array(
            'base' => @add_query_arg('paged','%#%'),
            'format' => '',
            'total' => $wp_query->max_num_pages,
            'current' => $current,
            'show_all' => true,
            'type' => 'plain'
            );
        
        if( $wp_rewrite->using_permalinks() )
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%', 'paged' );
        
        if( !empty($wp_query->query_vars['s']) )
            $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
        
        echo paginate_links( $pagination );
    ?> 
    </div>    

<!-- END blog.php -->

<?php get_footer(); ?>