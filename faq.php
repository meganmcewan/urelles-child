<?php 
/*
Template Name: FAQ 
*/ 
?>

<?php get_header(); ?>

<div class="page-faq">
    <div class="featured-image">
    <?php if ( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail(); ?>
    <?php endif; ?>
    </div>
        
        

 
    <div id="custom-container" class="container-custom">
       

        <?php the_content(); ?>
    
        </div>

</div>


<?php get_footer(); ?>