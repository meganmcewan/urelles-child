
var $j = jQuery.noConflict();

$j(document).ready(function() {
    "use strict";
    
$j('.plus-btn').click(function(){

    $j(event.target).closest('.faq-single').find('.faq-answer').toggleClass('open-faq')
    $j(event.target).closest('.faq-single').find('.plus-btn').toggleClass('open-faq')
    


})

    

    

	});
