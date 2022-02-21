$(document).ready(function() {
	
	$(function(){
		$('.form-holder').delegate("input", "focus", function(){
			$('.form-holder').removeClass("active");
			$(this).parent().addClass("active");
		});
			$('.form-holder').delegate("select", "focus", function(){
			$('.form-holder').removeClass("active");
			$(this).parent().addClass("active");
		});
	})

	// $('#service').change(function() {
		
	// 	var chk = this.value;
		
	// 	if(chk === 'Video Consultunt')
	// 	   {
	// 	   		$('#meeting').removeClass('meeting1');
	// 	   		$('#meeting').addClass('meeting2');
	// 	   }
	// 	else
	// 	{
	// 		$('#meeting').removeClass('meeting2');
	// 		$('#meeting').addClass('meeting1');
	// 	}
		
	// })
	
});