<?php

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"user") or die("Cannot connect to the database");

$query = mysqli_query($connect_db,"select * from store_questions where store_id='".$_GET['store_id']."'");
$row = mysqli_fetch_array($query);

$store_query = mysqli_query($connect_db,"select * from store where store_id='".$_GET['store_id']."'");
$store_row = mysqli_fetch_array($store_query);

$store_id = $_GET['store_id'];

?>
<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Customer Feedback</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><strong><?=$store_row['store_name']?></strong> by Softgate</a>
					<strong class="phone">&#x260F;: <?=$store_row['store_phone']?></strong>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<form class="login100-form validate-form flex-sb flex-w" action='../add.php?store_id=<?=$store_id?>' method="post">
			<!-- Banner -->
				<section id="banner">
					<div class="inner">
						<header>
							<h1>Welcome to <?=$store_row['store_name']?></h1>
							<!--<h3>By: <?=$store_row['owner_name']?></h3>-->
						</header>

						<h2 class="ques"><?=$row['q1']?></h2>
						
							<div id="rb-1" class="rb">
					            <div class="rb-tab rb-tab-active" data-value="1">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#9785;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="2">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128577;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="3">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128528;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="4">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128578;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="5">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128515;</span>
					                </div>
					            </div>
				            </div>
				            <script>
				            	$(".rb-tab").click(function(){
								  //Spot switcher:
								  $(this).parent().find(".rb-tab").removeClass("rb-tab-active");
								  $(this).addClass("rb-tab-active");
								});
							</script>


						<footer>
							<a href="#banner2" class="button">Next</a>
						</footer>
					</div>
				</section>

			<!-- Banner -->
				<section id="banner2">
					<div class="inner">

						<h2 class="ques"><?=$row['q2']?></h2>
							<div id="rb-2" class="rb">
					            <div class="rb-tab" data-value="1">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#9785;</span>
					                </div>
					            </div>
					            <div class="rb-tab rb-tab-active" data-value="2">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128577;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="3">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128528;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="4">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128578;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="5">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128515;</span>
					                </div>
					            </div>
				            </div>

						<footer>
							<a href="#banner3" class="button">Next</a>
						</footer>
					</div>
				</section>

			<!-- Banner -->
				<section id="banner3">
					<div class="inner">

						<h2 class="ques"><?=$row['q3']?></h2>
							<div id="rb-3" class="rb">
					            <div class="rb-tab" data-value="1">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#9785;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="2">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128577;</span>
					                </div>
					            </div>
					            <div class="rb-tab rb-tab-active" data-value="3">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128528;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="4">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128578;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="5">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128515;</span>
					                </div>
					            </div>
				            </div>

						<footer>
							<a href="#banner4" class="button">Next</a>
						</footer>
					</div>
				</section>

			<!-- Banner -->
				<section id="banner4">
					<div class="inner">

						<h2 class="ques"><?=$row['q4']?></h2>
							<div id="rb-4" class="rb">
					            <div class="rb-tab" data-value="1">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#9785;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="2">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128577;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="3">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128528;</span>
					                </div>
					            </div>
					            <div class="rb-tab rb-tab-active" data-value="4">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128578;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="5">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128515;</span>
					                </div>
					            </div>
				            </div>

						<footer>
							<a href="#banner5" class="button">Next</a>
						</footer>
					</div>
				</section>

			<!-- Banner -->
				<section id="banner5">
					<div class="inner">

						<h2 class="ques"><?=$row['q5']?></h2>
							<div id="rb-5" class="rb">
					            <div class="rb-tab" data-value="1">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#9785;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="2">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128577;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="3">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128528;</span>
					                </div>
					            </div>
					            <div class="rb-tab" data-value="4">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128578;</span>
					                </div>
					            </div>
					            <div class="rb-tab rb-tab-active" data-value="5">
					                <div class="rb-spot">
					                    <span class="rb-txt">&#128515;</span>
					                </div>
					            </div>
				            </div>

						<footer>
							<a href="#footer" class="button">Submit</a>
						</footer>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<div class="inner">

						<h3>Get in touch</h3>

							<input type="hidden" name="first" id="fname" min="1" max="5">

							<div class="field half first">
								<label for="name">Name</label>
								<input name="name" id="name" type="text" placeholder="Name">
							</div>

							<div class="field half">
								<label for="email">Phone</label>
								<input name="phone" id="email" type="text" placeholder="Phone">
							</div>

							<div class="field">
								<label for="message">Feedback</label>
								<textarea name="description" id="message" rows="6" placeholder="Feedback"></textarea>
							</div>

							<ul class="actions">
								<li><input value="Send Message" class="button alt trigger" type="submit"></li>
							</ul>
							<script src="assets/js/index.js"></script>
						</form>

							<div class="copyright">
								&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
							</div>

					</div>
				</footer>

		<!-- Scripts -->
		
		
	</body>
</html>