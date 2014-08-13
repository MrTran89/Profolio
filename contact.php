<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="myPortfolios.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/boostrap.min.css">
	<script type="text/javascript" src="js/tab.js"></script>
	<title>MEPortfolios</title>
</head>
<body class="bc">
			<?php include 'includes/menu.inc.php'; ?>
			
			<div class="col-lg-offset-3 col-md-6">
					<p class="title">the word "Hello" connect people to people , that word is <strong>MAGICAL</strong>.</p>
 					<p class="like">If you like my page et you have trust in my skills. Just :</p>
 					<h3 class="say"><strong>SAY ME HELLO</strong></h3>
					<p class="fb"><img class="facebook" src="image/facebook.png"> <strong>Asumiko Tran</strong></p>
					<p class="twi"><img class="tw" src="image/twitter.png"> <strong>Asumiko Tran</strong></p>
					<p class="lin"><img class="in" src="image/linkedin.png"><strong>Viet VietDung</strong></p>
					<p class="sky"><img class="skype" src="image/skype.png"> <strong>Asumiko89</strong></p>
					<p class="mail"><img class="envelope" src="image/Envelope.png"> <strong>viet-dung.tran@epitech.eu</strong></p>
					<p class="number"><img class="telephone" src="image/telephone.png"> <strong>06 42 43 55 51</strong></p>
			</div>>


		
	</div>


			<?php include 'includes/footer.inc.php'; ?>

			<script>
			  $('#loading-example-btn').click(function () {
			    var btn = $(this)
			    btn.button('loading')
			    $.ajax(...).always(function () {
			      btn.button('reset')
			    });
			  });
		</script>
</body>
</html>