jQuery(function(){
	
	//Tile Grid Mechanics
	
	$('.tile-grid .tile-info').hide();
	
	$('.tile-grid .tile').on('click', function(e){
		e.preventDefault();
		$('.tile-grid .tile').not(this).removeClass('active');
		$('.tile-grid .tile').not(this).next('.tile-info').hide();
		$(this).toggleClass('active');
		$(this).next('.tile-info').toggle();
		
	});
	
	//Show or Hide Designer Bios
	
	$('.team-members .nav').show();
	$('.team-members .nav li:first-child').addClass('active');
	$('.team-members .info-cards .card:gt(0)').hide();
	
	$('.team-members .nav li').on('click', function(){
		var $index = $(this).index();
		$('.team-members .nav li').removeClass('active');
		$(this).addClass('active');
		$('.team-members .info-cards .card').hide();
		$('.team-members .info-cards .card').eq($index).show();
	});
	
});