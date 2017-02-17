$(document).ready( function() {
	
	setupMobileMenu();

	
	$('.primaryNavLink').click(function(event) {
		event.preventDefault();
		$('#mobileMenu').toggleClass('show-menu');
	});
	
	console.log('haskdjhajksdhlkasd');
	
});

$(window).load(function() {

})


function setupMobileMenu() {
	var primaryNav = $('#primary-menu').clone().filter(":last").detach();

	$("#mobileMenu").append(primaryNav);

    $('#mobileMenu').delegate(".close", "click", function() {
        $('#mobileMenu').removeClass('show-menu');
    });

    $('#mobileMenu .primaryNav > li').addClass('inactive').filter('.inPath').toggleClass('active inactive');
}