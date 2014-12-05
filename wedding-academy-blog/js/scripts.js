(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$('.sub-menu').removeClass('sub-menu').addClass('dropdown-menu');
	
	$('ul.nav li.dropdown').hover(function(){
       $(this).children('ul.dropdown-menu').slideDown(); 
    }, function(){
       $(this).children('ul.dropdown-menu').slideUp(); 
	});

		
	});
	
})(jQuery, this);





	

	  