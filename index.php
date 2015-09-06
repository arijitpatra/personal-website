<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/ap.css">
	<link rel="shortcut icon" href="fav.png">

	<title>Arijit Patra</title>
</head>
<body>

	<?php 
		include 'header.php';
	?>

	<div class="container pad-100 content" id="about">
		<div class="row">
		<div class="col-sm-4">
      			<img src="assets/img/favicon.png" class="img-responsive img-circle dp-dimension dp-margin">
    		</div>
    		<div class="col-sm-8">
      			<b>I began my career on the Earth on June 26th, 1994 in Kolkata.</b>
      			<br><br>
 				While I am not forced to do something I like to spend my time doing photography, meeting and talking with people, travelling, discovering new places, spending time with my laptop developing something, designing, strumming and trying to learn the guitar, watching or reading news, playing some racing games, cycling or having a plate of <kbd>Biryani</kbd>.
 				<br>
 				Some people were kind enough to give me the honors of 3 first prize, 3 second prize & 1 third prize in the field of photography. Plus, a third prize for quiz.
    		</div>
  		</div>
  	</div>

<div id="result"></div>

    

    <footer class="site-footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12 text-center footer-social-font">
	    			<i class="fa fa-github"></i>
	    			<i class="fa fa-instagram"></i>
			    	<i class="fa fa-linkedin"></i>
			    	<i class="fa fa-facebook"></i>
			    	<i class="fa fa-google-plus"></i>
			    	<i class="fa fa-skype"></i>
			    	<i class="fa fa-whatsapp"></i>
			    	<i class="fa fa-twitter"></i>
			    	<i class="fa fa-envelope-o"></i>
			 
			    	<!-- <span class="fa-stack fa-lg">
	  						<i class="fa fa-circle fa-stack-2x"></i>
	  						<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
					</span> -->

				<!-- 	<span class="fa-stack fa-lg">
			  			<i class="fa fa-circle fa-stack-2x"></i>
			  			<i class="fa fa-github fa-stack-1x fa-inverse"></i>
					</span> -->
				</div>
			</div>
			<div class="row">	
				<div class="col-sm-12 text-center footer-madein-font">
					<span>www.arijitpatra.in | Made with <i class="fa fa-heart"></i> by Arijit Patra | 2015</span>
				</div>
			</div>	
		</div>
    </footer>

 <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $("#pic").click(function(){
        $("#result").load("hello.html").addClass("content");
        $("#about").hide().removeClass("content");
    });
     $("#contact").click(function(){
        $("#result").load("resume.php").addClass("content");
        $("#about").hide().removeClass("content");
    });
     $("#photo").click(function(){
 		$("#result").hide().removeClass("content");
        $("#about").show().addClass("content");
    });
});
</script>
</body>
</html>