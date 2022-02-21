$(document).ready(function() {
	
	
	$(window).scroll(function() {
		
		console.log = $(window).height();
		  
		if($(window).scrollTop() > 0)
		   {
		   		$('#header').addClass('posfix');
		   }
		else{
				$('#header').removeClass('posfix');
			}
		
	});
	
});
$('#menu-block').click(function() {
	
	$('#menu-block').toggleClass('menu-block');
	$('#menu-btn').toggleClass('open');
	if($('#SideBar').hasClass('SideBar-Close'))
	{
		$('#SideBar').removeClass('SideBar-Close');
		$('#SideBar').addClass('SideBar-Open');
		$('body').css({"overflow": "hidden"});
		$('#block-item').css({"display": "block"});
	}
	else
	{
		$('#SideBar').removeClass('SideBar-Open');
		$('#SideBar').addClass('SideBar-Close');
		$('body').css({"overflow": "visible"});
		$('#block-item').css({"display": "none"});
	}
});

$('#block-item').click(function() {
	
	$('#SideBar').removeClass('SideBar-Open');
	$('#SideBar').addClass('SideBar-Close');
	$('body').css({"overflow": "visible"});
	$('#block-item').css({"display": "none"});
	$('#menu-block').toggleClass('menu-block');
	$('#menu-btn').toggleClass('open');
});