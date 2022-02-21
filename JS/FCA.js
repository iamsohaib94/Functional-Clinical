var weight;
var form1 = 'false';
var form2 = 'false';
var b3_check = 'false';
var b3_block3 = 'false';
var price = '$5';

$(document).ready(function() {
	
	var item_value = ['block1', 'block2', 'block3'];
	var item_value_length = item_value.length - 1;
	var item_number = 0;
	
//	Forms Valitdity
	function formValidty()
	{
		if(item_number == 0)
		   {
		   
			   
			if(form1 == 'false')
			   {
				   var f1t = $('.input__field').val().split(" ").join("");
				   var f1t2 = $('#other').val().split(" ").join("");
				   if(f1t != "" && f1t != " " && $('#male').is(':checked') || $('#fe-male').is(':checked'))
					  {
						  if($('#Skin').is(':checked') || $('#Hair').is(':checked') || $('#Adiposity').is(':checked') || $('#Nails').is(':checked'))
							  {
								   form1 = 'true';
							  }
						  else if($('#other-radio').is(':checked'))
							  {
								  if(f1t2 != "" && f1t2 != " ")
									  {
										form1 = 'true';
									  }
									  else
									  {
										  alert('Please wite your reason.')
									  }
							  }
						  else
							  {
								  alert('Please fill all feilds.');
							  }

					  }
				   else
				   {
					   alert('Please fill all feilds.');
				   }
			   }
			   
		   }
		else if(item_number == 1)
				{
					if($('.b2-img').hasClass('b2-active'))
					   {
					   		form2 = 'true';
					   }
					else
					{	
						alert('Please select picture according to your weight.')
					}
				}
	}

	function b3_block3_img()
	{
		if($('.face1').hasClass('faceActive'))
		{
			b3_block3 = 'true';
		}
		else if($('.b3-op1').hasClass('b3-itemActive') && $('.b3-op2').hasClass('b3-itemActive') && $('.b3-op3').hasClass('b3-itemActive')  && $('.b3-op4').hasClass('b3-itemActive') && $('.b3-op5').hasClass('b3-itemActive') && $('.b3-op6').hasClass('b3-itemActive'))
		{
			b3_block3 = 'true';
		}
		else
		{
			alert('Plaese Select Feilds');
		}
		
	}

	$('#Submit').click(function() {

		b3_block3_img();
		if(b3_block3 == 'true')
		{
			$('#popup').css({"display": "block"});
			$('body').css({"overflow": "hidden"});
		}

	});

	$('#Next').click(function() {
		
		formValidty();

		if(form1 == 'true')
		   {
			    form1 = 'false';
			   
			   if(item_number < item_value_length)
				   {
						item_number = item_number + 1;
				   }
				$(this).attr('data-filter', item_value[item_number]);

				const value = $(this).attr('data-filter');
				$('.block').not('.'+value).hide('1000');
				$('.block').filter('.'+value).show('1000');
			   
		   		change_button();
		
				b2_AddImage();
			   
			   	displayBlock();
			    
		   }
		else if(form2 == 'true')
		{
			   
			   if(item_number < item_value_length)
				   {
						item_number = item_number + 1;
				   }
				$(this).attr('data-filter', item_value[item_number]);

				const value = $(this).attr('data-filter');
				$('.block').not('.'+value).hide('1000');
				$('.block').filter('.'+value).show('1000');
			   
		   		change_button();
		
				b2_AddImage();
			
		}
		
	});
	$('#Previous').click(function() {
		

	   item_number = item_number - 1;

		
		$(this).attr('data-filter', item_value[item_number]);
		
		const value = $(this).attr('data-filter');
		$('.block').not('.'+value).hide('1000');
		$('.block').filter('.'+value).show('1000');
		
		if($('#Submit').hasClass('submit2'))
		   {
		   		$('#Next').addClass('next2');
				$('#Next').removeClass('next3');
				$('#Submit').removeClass('submit2');
		   }
		
		change_button();
		
		if(item_number < 1)
		   {
		   		$('.b2-img').removeClass('b2-active');
			   form1 = 'false';
			   form2 = 'false';
			   b3_check = 'false';
			   item_value = ['block1', 'block2', 'block3', 'block4'];
			   item_value_length = item_value.length - 1;
			   displayNone();
		   }
		
	});
	
	
	function change_button()
	{
		if(item_number === item_value_length)
		{
			$('#Next').removeClass('next2');
			$('#Next').addClass('next3');
			$('#Submit').addClass('submit2');
		}
		else if(item_number >= 1)
		{
			$('#Next').addClass('next2');
			$('#Previous').addClass('pre2');
		}
	
		else
		{
			$('#Next').removeClass('next2');
			$('#Previous').removeClass('pre2');
		}
		
	}
	

	$('#other-radio').click(function() {
		
		$('#other').css({"display": "block"});
		$('#Concern').css({"padding-bottom": "1.5rem"});
		
	});
	
	$('.hide').click(function() {
		
		$('#other').css({"display": "none"});
		$('#Concern').css({"padding-bottom": "5rem"});
		
	});
	
//	Block 2
	
	$('.b2-img').click(function() {
		
		$(this).addClass('b2-active').siblings().removeClass('b2-active');
		weight = $(this).attr('weight');

	});
	
	function b2_AddImage()
	{
		if($('#male').is(':checked'))
		   {
				$('.b2-img:nth-child(1)').css({"background-image": "url('Images/5 man/1a.png')"});
				$('.b2-img:nth-child(2)').css({"background-image": "url('Images/5 man/2a.png')"});
				$('.b2-img:nth-child(3)').css({"background-image": "url('Images/5 man/3a.png')"});
				$('.b2-img:nth-child(4)').css({"background-image": "url('Images/5 man/4a.png')"});
				$('.b2-img:nth-child(5)').css({"background-image": "url('Images/5 man/5a.png')"});
		   }
		else if($('#fe-male').is(':checked'))
			{
				$('.b2-img:nth-child(1)').css({"background-image": "url('Images/5 women/1a.png')"});
				$('.b2-img:nth-child(2)').css({"background-image": "url('Images/5 women/2a.png')"});
				$('.b2-img:nth-child(3)').css({"background-image": "url('Images/5 women/3a.png')"});
				$('.b2-img:nth-child(4)').css({"background-image": "url('Images/5 women/4a.png')"});
				$('.b2-img:nth-child(5)').css({"background-image": "url('Images/5 women/5a.png')"});
			}
	}
//Block 3
	
	function displayBlock()
	{
		if($('#Skin').is(':checked'))
		   {
		   		$('#b3-Skin').css({"display": "block"});
		   }
		else if($('#Hair').is(':checked'))
		   {
		   		$('#b3-Hair').css({"display": "block"});
		   }
		else if($('#Adiposity').is(':checked'))
		   {
		   		$('#b3-Adiposity').css({"display": "block"});
		   }
		else if($('#Nails').is(':checked'))
		   {
		   		$('#b3-Nails').css({"display": "block"});
		   }
		else if($('#other-radio').is(':checked'))
			{
				b3_check = 'true';
				if(b3_check === "true")
				   {
							var remove_item = 'block3';
							item_value = $.grep(item_value, function(value) {

								return value != remove_item;

							});
					   	item_value_length = item_value.length - 1;
				   }
				
			}
	}
	function displayNone()
	{
		$('#b3-Skin').css({"display": "none"});
		$('#b3-Hair').css({"display": "none"});
		$('#b3-Adiposity').css({"display": "none"});
		$('#b3-Nails').css({"display": "none"});
	}
	$('#FC').click(function() {
	
		$('#Face').css({"display": "block"});
		$('#Body').css({"display": "none"});
		$('.b3-item').removeClass('b3-itemActive');
		b3_block3 = 'false';
	});
	$('#BD').click(function() {
		
		$('#Face').css({"display": "none"});
		$('#Body').css({"display": "block"});
		$('.face1').removeClass('faceActive');
		b3_block3 = 'false';
	});
	
	$('.face1').click(function() {

		$(this).addClass('faceActive').siblings().removeClass('faceActive');

	});
	$('.b3-item').click(function() {

		$(this).addClass('b3-itemActive').siblings().removeClass('b3-itemActive');

	});
});

$('#close').click(function() {

	$('#popup').css({"display": "none"});
	$('body').css({"overflow": "visible"});
	$('body').css({"overflow-x": "hidden"});

});
$('#YourChoice').change(function() {

	var newCheck = $('#YourChoice').val();
	if(newCheck === 'QuizResult')
	{
		$('#link').css({"display": "none"});
		$('#Service').css({"display": "none"});
		$('#price').text('TOTAL: $5');
	}
	else if(newCheck === 'Service_QuizResult_VideoConsult')
	{
		$('#link').css({"display": "block"});
		$('#Service').css({"display": "block"});
		$('#price').text('TOTAL: $125');
	}

});