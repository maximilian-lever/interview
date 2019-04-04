<?php include('./vendors/php/conjson.php') ?>
<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<link rel="stylesheet" href="./resources/CSS/style.css" type="text/css" media="screen">
			<title>Maximilian Lever - interview-master</title>
		</head>
		<body>
			<header>
				<div class=" header">
					<img src="./images/logo.png" alt="" class="logo" >
				</div>
			</header>
			<div class="container mt-4 articles">
				<div class="row">
					<div class='col-lg-8'>
						<div class="row">
							<div class="col-12 articles_heading">
								<h4>Articles</h4>
							</div>
						</div>
						<div class="row mx-6  d-flex flex-row flex-md-row flex-sm-row ">
							<?php
								foreach($articles as $article){
								echo 
									'<div class="row col-md-5  mx-md-4 d-row  p-1 h-100 w-100 artborder align-self-stretch " >
										<div class=" col-lg-12 artitle mb h6" style="font-weight: bold;">'.$article->title.'</div>
										<img src="./resources/IMG/articlePicture.png" class="img-fluid align-self-start"/>
										<div class=" align-self-start col-lg-12 small mt-3 mb-3 px-3 bodytext"> '
											.$article->content.'
										</div>
									</div>';
								}
							?>
						</div>
					</div>
					<div class="col-sm-4 bg-light px-5 px-2 ">
						<h3 class="pt-2">Events</h3>
						<?php
							foreach($events as $event){
							echo 
								'<div class="row mr-5  ml-1 mt-3 col-md-12 card mb-sm-4 eventborder">
									<div class="card-body card-body style="width:300px">
										<h6 class="evntTile font-weight-bold">'.$event->title.'</h6>
										<span class="font-weight-bold">Location:</span> ' .
										$event->location .'<br>
										<span class="font-weight-bold">Date:</span> '.
										$event->date .
									'</div>
								</div>';
							}
						?>
					</div>
				</div>
			</div>
		</body>
	</html>