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
</head>

<body>
	
<?php include 'Header.php' ?>

<div class="container">
    <div class="row"> 
        <div class="col-sm-12">
            <h2 class="one"> FCA </h2>
            <div class="two"><a class="three" href="#"> HOME </a> / <a class="three" href="#"> FCA </a></div>
        </div>
    </div>
</div>

<div id="Main">
	
    <div id="leftBox">
        <div id="lItem">
            <form action="FCA Test2.php" method="get">
                <p id="question">What is your concern category?</p>
                <div>
                    <label class="normal skinConcern">
                        <input id="concern1" class="concernradio" type="radio" name="concern" value="Skin" required checked>
                        Skin
                    </label>
                    <label class="normal skinConcern">
                        <input id="concern2" class="concernradio" type="radio" name="concern" value="Hair" required>
                        Hair
                    </label>
                    <label class="normal skinConcern">
                        <input id="concern3" class="concernradio" type="radio" name="concern" value="Adiposity" required>
                        Adiposity
                    </label>
                    <label class="normal skinConcern">
                        <input id="concern4" class="concernradio" type="radio" name="concern" value="Nails" required>
                        Nails
                    </label>
                    <label class="otherRadio skinConcern">
                        <input id="concern5" class="concernradio" type="radio" name="concern" value="Other" required>
                        Other
                    </label>
                </div>
                <div id="msgBox">
                    <textarea name="otherMsg" id="msg"></textarea>
                </div>
                <button id="next" type="submit" name="next">NEXT</button>
            </form>
        </div>
    </div>

    <div id="rightBox">

        <div id="FCAlogo"></div>
        <p style="font-size: 1.3rem; margin-left: 3.3vw; padding: 10px;">PROGRESS</p>
        <div id="progress">
            <div id="innerBar"></div>
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