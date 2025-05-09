<?php /*
@package packageName
@subpackage packageName
@since 1.0
*/
?>
<?php get_header(); ?>
<section class="indexpages">
    <div class="we__buy container flex center">
                      
        
        <?php if (have_posts() ): while (have_posts()): the_post();?>

<article <?php post_class ('article'); ?> id="post-<?php the_ID();?>">

  <div class="article-header">
    <p class="article-date"><?php the_time(get_option('date_format')); ?></p>
    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a></h2>
  <p class="article-category"><a href="#"><?php the_category(','); ?></a></p>
  </div><!-- /article-header -->

  <?php if (! has_post_format('video') && ! has_post_format('audio')) : ?>

      <?php if (has_post_thumbnail()):?>
        <a href="<?php the_permalink(); ?>">
          <?php  the_post_thumbnail('blog-size-image');?>
        </a>
      <?php endif; ?>

  <?php endif; ?>
  <div class="article-content">
      <p><?php the_excerpt(); ?></p>
      <?php if ( is_home() ): ?> 
                       <p  class="read-more-container"><a href="<?php the_permalink(); ?>" class="read-more-link"><?php _e('Read More','slan') ?></a></p>
        <?php endif?> 

</article>	<!-- /.article -->
<?php endwhile; ?>
<?php if (get_next_posts_link() || get_previous_posts_link() ) :?>

  
<?php endif; ?>
<?php else:?>

<?php get_template_part('template-parts/content','nopost'); ?>
<?php endif; ?>


    </div>
    <div class="navegacion-articulos">
      <nav>
        <div class="anterior">

          <?php next_posts_link(__('<i class="fa fa-arrow-left" aria-hidden="true"></i> Old Articles','slan')); ?>
        </div>
        <div class="siguiente">

          <?php previous_posts_link(__('New Articles <i class="fa fa-arrow-right" aria-hidden="true"></i>','slan')); ?>
        </div>
      </nav>
  </div> <!-- /.navegacion-articulos -->
    </section>
    
    
    
<?php get_footer()?>