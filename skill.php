<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="myPortfolios.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/boostrap.min.css">
	<title>MEPortfolios</title>

</head>
<body class="whatido">
	<?php include 'includes/menu.inc.php'; ?>

		<div class="col-xs-offset-3 col-xs-6 container">
		<!-- nav tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#home" data-toggle="tab">Language C</a></li>
			<li><a href="#unix" data-toggle="tab">Unix System</a></li>
			<li><a href="#profile" data-toggle="tab">PHP/MySQL</a></li>
			<li><a href="#message" data-toggle="tab">Html/css</a></li>
		</ul>
	</div>	

		<!-- tab panes -->
	<div class="tab-content">
			<div class="col-xs-offset-3 col-xs-6 tab-pane active" id="home">
				<p>In my first years at Epitech I have got several project in programming in C :</p>
					<div>
						<h3>Bistromatique :</h3>
						<p>
							The goal of the project is to write a program to able
							to display the result of the evaluation of an arithmetic
							expression composed with integers or infinite size expresses
							in any base.
						</p>
					</div>
					<div>
						<h3>Allum 1 :</h3>
						<p>Allum 1 is a game play base on matches.</p>
						<p>There is a number of rows of matches.</p>
						<p>The players stay each their tour</p>
						<p>Every player can, on the same row, take one of several matches.</p>
						<p>The player who loses is the one who takes last one.</p>

					</div>
					<div>
						<h3>Lem-In</h3>
						<p>The purpose of this project is to create one algorithm which finds the shortest route parmis several.</p>
					</div>
					<div>
						<h3>Corewar</h3>
						<p>This one is a big project of the end from first year which is on works in group between 4 to 6 peoples.</p>
						<p>The suject is simple : you have to develop your assembler and your virtual machine.</p>
					</div>
			</div>

			<div class="col-xs-offset-3 col-xs-6 tab-pane" id="unix">
				<!--	<h2><strong>Updating.</strong></h2> -->
				<section class="section">
					<span class="loader loader-quart"></span>
					Updating...
				</section>

			</div>

			<div class="col-xs-offset-3 col-xs-6 tab-pane" id="profile">
					<!-- <h2><strong>Updating..</strong></h2> -->
				<section class="section">
					<span class="loader loader-quart"></span>
					Updating...
				</section>
			</div>
				 
			<div class="col-xs-offset-3 col-xs-6 tab-pane" id="message">
				<!--	<h2><strong>Updating...</strong></h2> -->
				<section class="section">
					<span class="loader loader-quart"></span>
					Updating...
				</section>
			</div>
		</div>
	</div>


	<script src="js/tests/vendor/jquery.js"></script>
	<script src="bootstrap3.1.1/js/bootstrap.min.js"></script>
</body>
</html>