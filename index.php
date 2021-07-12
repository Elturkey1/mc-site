<?php require('php/settings.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anasayfa</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta charset="utf-8">

	<!-- Custom CSS for this template -->
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.js">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

</head>
<body>

	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button> 

	<div class="topnav" id="myTopnav">
		<div class="max-width">
			<?php include 'php/menu.php'; ?>
		  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		</div>
	</div>

	<!-- Header (Banner) -->
	<header id="head" class="parallax">
		<h1><?php echo "$server_ip_name";  ?></h1>
		<h3><?php echo "$home_subtitle";  ?></h3>
	</header>
	<!-- End Header -->

	<section id="home">
		<div class="row homepage">
			<div class="col-md-8">
				<p class="big-col-home">Önemli Bilgiler</p>
				<div class="big-col-home-text">
					<h5>Sunucu Kuralları</h5>
					<p>Kuralları görmek için <a href="about.php">tıklayın</a>.</p><br>
					<h5>İletişim Formu</h5>
					<p>Eğer bize ulaşmak isterseniz <a href="contact.php">tıklayın</a>.</p><br>
				</div>
			</div>
			<!-- <div class="col-md-4">
				<p class="follow-twitter">Follow us on twitter <a class="twitter-link" target="_blank" href="<?php echo "$twitter_link"; ?>">Twitter</a></p>
				<a class="twitter-timeline" data-width="500" data-tweet-limit="3" data-height="720" target="_blank" href="<?php echo "$twitter_link"; ?>">Tweets by <?php echo "$twitter_username"; ?></a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
			</div> -->
		</div>
	</section>

	<a style="display:block;" target="_blank" href="<?php echo "$discord_link"; ?>">
	  <div class="discord-banner"><img class="discord-img" width="333" src="img/Discord-Logo+Wordmark-White.svg"></div>
	</a>

	<footer>
		<div class="footer">
			<div class="copyright-notice">
				<!-- !! Replace this text in settings.php !! -->
				<p><?php echo "$copyright_footer_text";  ?></p>
				<!-- If you want to, you're allowed to delete these credits. But if you want to support my work, please leave it. -->
				<p>Made with <font color="red">❤</font> by <a target="_blank" href="https://www.rickklaasboer.online/">Rick Klaasboer</a>.</font></p>
			</div>
		</div>
	</footer>

	<script>
	function myFunction() {
	    var x = document.getElementById("myTopnav");
	    if (x.className === "topnav") {
	        x.className += " responsive";
	    } else {
	        x.className = "topnav";
	    }
	}
	</script>

	<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	        document.getElementById("myBtn").style.display = "block";
	    } else {
	        document.getElementById("myBtn").style.display = "none";
	    }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	    document.body.scrollTop = 0;
	    document.documentElement.scrollTop = 0;
	}
	</script>

</body>
</html>