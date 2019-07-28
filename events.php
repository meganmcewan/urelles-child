<?php 
/*
Template Name: Events
*/ 
?>

<?php get_header(); ?>

<div class="page-events">
    <div class="featured-image">
    <?php if ( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail(); ?>
    <?php endif; ?>
    </div>
    
    <div class="events-container">
        <?php the_content(); ?>      
    </div>
    <div class="events-cta" >
        <div class="cta-content">
           Want to know about upcoming events? Subscribe to our newsletter for all the latest information.
        </div>
        <div class="button-wrap">
            <a href="/join-our-newsletter/" class='cta-btn'>ABONNEZ-VOUS</a>
        </div>
	</div>
        
       

</div>


<?php get_footer(); ?>