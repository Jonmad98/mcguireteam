<?php /*
@package packageName
@subpackage packageName
@since 1.0
*/
?>
    <!-- Header -->
    <?php get_header(); ?>

          <?php
            $options = get_theme_mod('code_settings');
            if ( !empty($options['banner']) ) {
              $banner = $options['banner'];
            }else {
              $banner = themepath . 'slide1.jpg';
            }

           ?>
          <?php if (have_posts() ): while ( have_posts() ): the_post(); ?>
          
          
      <!-- Banner -->
      <section class="container banner-principal">
            <!--<div class="overlay-banner"></div>-->
            <ul class="blogTags">
            <?php
            	global $post;
            	$post->ID;
                $tags = get_tags(array('object_ids' => $post));
                if ( $tags ) :
                    foreach ( $tags as $tag ) : ?>
                        <li class="tag-list"><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
            <div class="texto-banner">
			 <p class="article-category"><?php the_category(','); ?></p>
              <h1><?php the_title(); ?></h1>
				
            </div>
            <ul class="blogInfo">
                <li class="date">
                    <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#0000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 10H21M7 3V5M17 3V5M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                   <?php
                    echo get_the_date('F j, Y');
                    ?> 
                </li>
                <li class="readMin">
                    <svg width="16px" height="16px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g transform="translate(16 16)"> <circle cx="80" cy="80" r="74" style="fill:none;stroke:#6b7280;stroke-width:12;stroke-linejoin:round;stroke-opacity:1"></circle> <path d="M80 30v50l40 32" style="fill:none;stroke:#6b7280;stroke-width:12;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1"></path> </g> </g></svg>
                    <?php
                    function get_estimated_read_time($post_id = null) {
                        $post_id = $post_id ? $post_id : get_the_ID();
                        $content = get_post_field('post_content', $post_id);
                        $word_count = str_word_count(strip_tags($content));
                        $read_time = ceil($word_count / 200); // 200 wpm
                    
                        return $read_time . ' MIN READ';
                    }
                    
                    echo get_estimated_read_time();
                    ?>
                </li>
            </ul>

            
            
            
            <?php if (  has_post_thumbnail() ): ?>

            <?php $banner_article = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>

            <div class="banner" style="background-image: url('<?php echo $banner_article[0];?>');"></div>

            <?php else: ?>

            <div class="banner" style="background-image: url('<?php echo $banner ?>');"></div>

            <?php endif; ?>

            
            

      </section> <!-- Banner -->

      <section class="blog">
        <div class="container">
          <div class="listado-articulos">

            <article <?php post_class ('article single'); ?> id="post-<?php the_ID();?>">
              <div class="article-content">
                  <?php the_content(); ?>
              </div> <!-- /.article-content -->
  			</article>	<!-- /.article -->
          <?php endwhile; ?>
          <?php  endif; ?>
          </div>  <!-- /listado-articulos -->

        </div>
      </section> <!-- /Blog -->
      <?php
      $tags = wp_get_post_tags($post_id);

        if ($tags) {
            $tag_ids = array();
            foreach ($tags as $tag) {
                $tag_ids[] = $tag->term_id;
            }
        
            $args = array(
                'tag__in'        => $tag_ids,
                'post__not_in'   => array($post_id),
                'posts_per_page' => 3,
                'ignore_sticky_posts' => 1,
            );
        }
        ?>

    <?php get_footer(); ?>
  </body>
  

</html>