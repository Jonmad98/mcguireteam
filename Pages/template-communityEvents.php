<?php
/*Template name: McGuireTeam Community Events


@package McGuire Team 
@subpackage McGuire Team
@since 1.0
*/ 

?>
<?php get_header(); ?>
<section class="content">
    <h2 class="textcenter">Monytly events</h2>
     <?php echo do_shortcode('[my_calendar category="2"  weekends="true"]');?>

</section>

<style>
    #mc_head_mc-948a6a8e8cd15db324902317a630b853{
        display:none;
    }
    
    #mc_2-title-mc-948a6a8e8cd15db324902317a630b853{
        color:#0e0e0e;
    }
    
    #js-modal-overlay .invisible{
        display:none;
    }
</style>

            
<?php get_footer(); ?>