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
        <h1 class="events-title">Events</h1>
        <h3>Stay up to date with events that we're organizing, attenting and just excited about!</h3>

        <div class="month-wrapper">
            <h2>July</h2>
            <div class="event-row">
                <div class="event-single">
                <div class="event-content">
                    <p>Get exicted something cool is happening in your neighbourhood</p>
                    <h3>The big event</h3>
                    <h6 class="event-date">July 30th</h6>
                    <a href="#">Register Now</a>
                    <p>see more</p>

                        
                        </div>
                    <div class="event-img">
                        <img src="https://placebear.com/800/400" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
       

        
    
        </div>
        <!-- <?php the_content(); ?> -->

</div>


<?php get_footer(); ?>