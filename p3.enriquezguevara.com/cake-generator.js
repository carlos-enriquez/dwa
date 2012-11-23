$(document).ready(function() {
		
	/*-----------------------------------------------------------------------------------------------*/
	
	
	$('.base-choice').click(function() {
	$('.draggable').remove();
		$('#base').css('background-color', 'white');
		$('#base').css('background-image', '');
		
		var image = $(this).attr('src');

		
		$('#base').prepend("<img class='draggable new-draggable' src='" + image + "'>");
		$(".draggable").draggable({ containment: "#base" });

	});	
	
	/*----------------------------------------------------------------------------------------------*/
	
	$('.syrup-choice').click(function() {
	
		// Select image we are going to use
		var image = $(this).css('background-image');
		
		// Change the background image of the div syrup
		$('#syrup').css('background-image', image);
	
	})
	/*----------------------------------------------------------------------------------------------*/
	$('.top-choice').click(function() {
		var image = $(this).css('background-image');
		$('#top').css('background-image', image);
	
	});	
	/*-------------------------------------------------------*/
	
$('.bottom-choice').click(function() {
	
		var image = $(this).css('background-image');
		$('#bottom').css('background-image', image);
	
	});	
	
	/*-------------------------------------------------------------------------------------------------*/
$('#refresh-button').click(function() {
					
		$('.draggable').remove();
		$('#base').css('background-color', '');
		$('#base').css('background-image', '');
		$('#syrup').css('background-color', '');
		$('#syrup').css('background-image', '');
		$('#top').css('background-color', '');
		$('#top').css('background-image', '');
		$('#bottom').css('background-color', '');
		$('#bottom').css('background-image', '');
	
	});
	
	
	/*-----------------------------------------------------------------------------------------------*/
	$('#print-button').click(function() {
		
		
	    var print_window =  window.open('','_blank','');
	    var contents = $('<div>').html($('#base').clone()).html();
	    
	    var html = '<html><head><link rel="stylesheet" href="cake-generator.css" type="text/css"></head><body>' + contents + '</body></html>';
	    
		print_window.document.open();
	    print_window.document.write(html);
	    print_window.document.close();
	    		
	});
	
			
});