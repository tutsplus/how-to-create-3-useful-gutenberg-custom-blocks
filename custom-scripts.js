jQuery(document).ready(function($) {
	var tabLinks = $('.tab-links a'),
		panels = $('.panel');
	
	tabLinks.click(function(e) {
		var $this = $(this),
			targetPanel = $this.attr('href');
		
		e.preventDefault();
		
		// Remove the active class from all tab links.
		tabLinks.removeClass('active');
		
		// Add the active class to the clicked item.
		$this.addClass('active');
		
		// Hide all content panels.
		panels.removeClass('active');
		
		// Show the panel corresponding to the clicked item.
		$(targetPanel).addClass('active');
	});
});