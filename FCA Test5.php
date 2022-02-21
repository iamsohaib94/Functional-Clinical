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
<link rel="stylesheet" href="CSS/FCA Test.css">
<link rel="stylesheet" href="CSS/Footer.css">
<link rel="stylesheet" href="CSS/Popup.css">
</head>

<body>
	
<?php include 'Header.php' ?>
<div id="Main">
    <?php
        session_start();
        $_SESSION['weightCheck'] = 'true';
        $Weight = $_GET['txtholder'];
        $_SESSION['newtxtholder'] = $Weight;

        if(isset($_COOKIE['FCA4'])) {
            setcookie('FCA4', 'true', time() + (86400 * 30), "/");
            $_COOKIE['FCA4'] = 'false';
         }


        if($Weight != '')
        {
           $_SESSION['weight'] = $Weight;
        //    echo '<script>alert("'.$_SESSION['concernName'].'")</script>';
        //    echo '<script>alert("'.$_SESSION['FullName'].'")</script>';
        //    echo '<script>alert("'.$_SESSION['Gender'].'")</script>';
        //     echo '<script>alert("'.$_SESSION['weight'].'")</script>';
        }
        else
        {
            header('Location: FCA Test.php');
        }
        
    ?>
    <div id="leftBox">
        <div id="lItem" style="margin-top: 5vh;">
            <form id="form5">
           
       
				<p class="b3-p">-Select Your Skin Concern.</p>
				<div id="face-body">
					<div id="radio-Holder">
                    <label>
						<input id="FC" type="radio" name="faceorbody" checked>
						Face
					</label>
					<label>
						<input id="BD" type="radio" name="faceorbody">
						Body
					</label>       
                    </div>
					
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
                <button id="next5" type="submit">SUBMIT</button>
				
            </form>
            <?php include 'Popup.php' ?>
        </div>
    </div>

    <div id="rightBox">

        <div id="FCAlogo"></div>
        <p style="font-size: 1.3rem; margin-left: 3.3vw; padding: 10px;">PROGRESS</p>
        <div id="progress">
            <div id="innerBar" style="transform: translateX(0%);"></div>
        </div>

    </div>
	
</div>		

<?php include 'Footer.php' ?>

<!--BooStrap Scripts	-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>	


<!--Scripts	-->
<script type="text/javascript" src="JS/Header.js"></script>
<script src="JS/Language.js"></script>
<script src="JS/FCA Test.js"></script>

</body>
</html>