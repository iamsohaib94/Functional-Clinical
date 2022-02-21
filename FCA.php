<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FCA</title>

<!--BootStrap CDN-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
	
<!--JQuery CDN	-->
	
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>	

<!--Font Awesome	-->
	
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
<!--Style Sheets-->
<link rel="stylesheet" href="CSS/Header.css">
<link rel="stylesheet" href="CSS/FCA.css">
<link rel="stylesheet" href="CSS/Footer.css">
<link rel="stylesheet" href="CSS/Popup.css">
</head>

<body>
	
	<?php include 'Header.php' ?>
<div id="Main">

<div id="item-holder">
	<div id="block1" class="block block1">
		<p id="quiz">QUIZ FOR SKINCARE</p>
		<div id="input-holder">
			 <input class="input__field" type="text" placeholder="Full Name" />
			<div id="AgeGender" class="row row-cols-1 row-cols-xl-2">
				<div id="side1" class="col">
					<label id="label-age" for="Age">Age: </label>
					 <select id="Age">

						 <?php
							for($number = 12; $number <= 60; $number++)
							{
								echo '<option vlaue="'.$number.'">'.$number.'</option>';
							}
						 ?>

					</select>
				</div>
				<div id="side2" class="col">
					<label id="label_Gender">Gender: </label>
					<label class="gen">
						Male
						<input id="male" class="radio" type="radio" name="Gender">
					</label>
					
					<label class="gen">
						Female
						<input id="fe-male" class="radio" type="radio" name="Gender">
					</label>
					
				</div>
			</div>
			<div id="label-concern">Concerns Category:</div>
			<div id="Concern" class="row row-cols-2 row-cols-xxl-5">
				
				<div class="col">
					<label>
					<input id="Skin" class="radio hide" type="radio" name="concern">
					Skin	</label>
				</div>
				<div class="col">
					<label>
					<input id="Hair" class="radio hide" type="radio" name="concern">
					Hair
						</label>
				</div>
				<div class="col">
					<label>
					<input id="Adiposity" class="radio hide" type="radio" name="concern">
					Adiposity
					</label>
				</div>
				<div class="col">
					<label>
					<input id="Nails" class="radio hide" type="radio" name="concern">
					Nails
						</label>
				</div>
				<div class="col">
					<label>
					<input id="other-radio" type="radio" name="concern">
					Other
						</label>
				</div>
			</div>
			<textarea id="other"></textarea>
		</div>
	</div>	

	<div id="block2" class="block block2" style="display: none">
		
		<div id="b2-content">
			<p id="b2-p">-Select your current physical shape.</p>
			
			<div id="b2-image" class="row row-cols-2 row-cols-xl-5">
				<div class="col b2-img" weight="100KG"></div>
				<div class="col b2-img" weight="70KG"></div>
				<div class="col b2-img" weight="50KG"></div>
				<div class="col b2-img" weight="40KG"></div>
				<div class="col b2-img" weight="30KG"></div>
			</div>
			
		</div>
	
	</div>
	
	<div id="block3" class="block block3" style="display: none">
		<div id="b3-content">
			<div id="b3-Skin" class="b3-same">
				<p class="b3-p">-Select Your Skin Concern.</p>
				<div id="face-body">
					<label>
						<input id="FC" type="radio" name="faceorbody" checked>
						Face
					</label>
					<label>
						<input id="BD" type="radio" name="faceorbody">
						Body
					</label>
					
					<div id="Face">
						<p id="face-heading">Select Your Face Shape.</p>
						<div id="faces">
							<div class="faceLine1 row row-cols-2 row-cols-md-4">
								<div class="col face1" shape="Oval"></div>
								<div class="col face1" shape="Rectangle"></div>
								<div class="col face1" shape="Circle"></div>
								<div class="col face1" shape="upsideDown-Triangle"></div>
								<div class="col face1" shape="Triangle"></div>
								<div class="col face1" shape="Diamond"></div>
								<div class="col face1" shape="Heart"></div>
								<div class="col face1" shape="Square"></div>
							</div>
						</div>
					</div>
					<div id="Body">
						<p id="body-heading">Select Your Skin Complexion.</p>
						<div id="body-con">
							<div id="body-img"></div>
							<div class="b3-itemHolder">
								<p class="roman">I</p>
								<div class="b3-itemblock">
									<p class="b3-item b3-op1">Pale white skin, blue/green eyes, blond/red hair</p>
									<p class="b3-item b3-op1">Always burns, does not tan</p>
								</div>
							</div>
							<div class="b3-itemHolder">
								<p class="roman">II</p>
								<div class="b3-itemblock">
									<p class="b3-item b3-op2">Fair skin, blue eyes</p>
									<p class="b3-item b3-op2">Burns easily, tans poorly</p>
								</div>
							</div>
							<div class="b3-itemHolder">
								<p class="roman">III</p>
								<div class="b3-itemblock">
									<p class="b3-item b3-op3">Darker white skin</p>
									<p class="b3-item b3-op3">Tans after initial burn</p>
								</div>
							</div>
							<div class="b3-itemHolder">
								<p class="roman">IV</p>
								<div class="b3-itemblock">
									<p class="b3-item b3-op4">Light brown skin</p>
									<p class="b3-item b3-op4">Burns minimally, tans easily</p>
								</div>
							</div>
							<div class="b3-itemHolder">
								<p class="roman">V</p>
								<div class="b3-itemblock">
									<p class="b3-item b3-op5">Brown skin</p>
									<p class="b3-item b3-op5">Rarely burns, tans darkly easily</p>
								</div>
							</div>
							<div class="b3-itemHolder">
								<p class="roman">VI</p>
								<div class="b3-itemblock">
									<p class="b3-item b3-op6">Dark brown or black skin</p>
									<p class="b3-item b3-op6">Never burns, always tans darkly</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div id="b3-Hair" class="b3-same">
				<p class="b3-p">-Select Your Hair Type.</p>
			</div>
			<div id="b3-Adiposity" class="b3-same">
				<p class="b3-p">-Select Your Adiposity Type.</p>
			</div>
			<div id="b3-Nails" class="b3-same">
				<p class="b3-p">-Select Your Nails Type.</p>
			</div>
		</div>
	</div>	
	
	<div id="block4" class="block block4" style="display: none">
		<p>Question 4</p>
	</div>	
</div>	
	<div id="btn-holder">
		
			<button id="Previous" class="btn pre1" data-filter="">PREVIOUS</button>
			<button id="Next" class="btn next1" data-filter="">NEXT</button>
			<button id="Submit" class="btn submit" data-filter="" name="submit">SUBMIT</button>
	</div>
	
	<?php
		include 'Popup.php';
	?>
	

	<?php

		include 'Footer.php';

	?>
</div>		


<!--BooStrap Scripts	-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>	


<!--Scripts	-->
<script type="text/javascript" src="JS/Header.js"></script>
<script src="JS/Language.js"></script>
<script type="text/javascript" src="JS/FCA.js"></script>
	
</body>
</html>