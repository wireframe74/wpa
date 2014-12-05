$(document).ready(function() {
    $(".imgLiquidFill").imgLiquid();

$("input[type='text']").addClass('form-control');

    $("li.comment-make a").click(function(e){

		  e.preventDefault();
		  $( ".comment-wrap" ).slideToggle( "slow");
    });

    $('iframe').parent().addClass('video-container');

    $('.comment-meta').after('<br>');

 $( "#menu-main-navigation a:contains('Business')" ).click(
	  
	  function() {
	   document.location.href='category/business-advice/';
	   })
	  ;


 $( "#menu-main-navigation a:contains('Inspiration')" ).click(
	  
	  function() {
	   document.location.href='category/ideas-inspiration/';
	   })
	  ;
	  
	  



});