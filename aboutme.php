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
<body class="ba">
				<?php include 'includes/menu.inc.php'; ?>
<script>
  $('#loading-example-btn').click(function () {
    var btn = $(this)
    btn.button('loading')
    $.ajax(...).always(function () {
      btn.button('reset')
    });
  });
</script>
		<div class="aboutme">
  				<div class="col-lg-offset-3 col-xs-1"><img class="asu" src="image/asu.jpg">
  				</div>
  				<div class="col-xs-4"> 
          <strong><p>
            Hi You ! My name's TRAN viet dung or nickname's Asumiko, i'm 24 years old, I come from VietNam and actually living in France since 2005. 
          </p>
          <p>
            So I'm going to speak to you about my course, I obtained a high school diploma civil engineering in 2010, 
            and I made two years of economy and management at Paris V Descart University, in continuation I transferred in computing,
            I'm actually an undergraduate at Epitech. I'm studying for a degree in I.T, and I'm in second years.
          </p>
          <p>
            I have already worked in different job as in the restoration, the harvest, I was also the leader in one dance's club during 2 years.
            The purpose is to have most experience and to make out a will myself.
          </p>
          <p>
            I like travelling and learning new things, outing with some friends, the cinema, shopping. I am shy but very curious, punctual and patient.
          </p>
          <p>
            Let us speak about my skills I have of knowledge in diverse informatics language as C, C ++, PHP / MySQL, Html / CSS.
          </p>
          <p>
            In speaking language I speak fluently the Vietnamese and French, I speak English but not as well.
          </p> </strong>
         <!-- <ul>
              <li>
                Informatique :
              </li>
                <p>Language C, HTML/CSS, PHP/MySQL.</p>
                <p>Word, Excel, Solidwork, Photoshop.</p>
              <li>
                Language :
              </li>
                <p>Vietnamese</p>
                <p>French</p>
                <p>English</p>
          </ul> -->

          </div>
		</div>
	
</div>	

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