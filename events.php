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
        Pour être tenu.e au courant des prochains événements, abonnez-vous.
        </div>
        <div class="button-wrap">
            <a href="/abonnez-vous/" class='cta-btn'>ABONNEZ-VOUS</a>
        </div>
	</div>
        
       

</div>


<?php get_footer(); ?>