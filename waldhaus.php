<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style2.css">
		<link rel="stylesheet" href="css/style_design_modus.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/change.js"></script>
		<script src="galleria/galleria-1.4.2.min.js"></script>
		<style>
		#galleria {
			width: 600px;
			height: 600px;
			background: #000
		}
		</style>
	</head>

	<body id="body">
		<div id="wrapper">
			<!--<div id="header">
				<h1>Hanspeter & Stephan Hardmeier Zumikon</h1>
			</div>-->
			<?php
				include ("./nav.html");
			?>
			<div id="content">
				<?php
					$dir = "./img/waldhaus_neu";
					
					$arr_img = scandir($dir);
					
					$arr_img = array_slice($arr_img,1);
					$arr_img = array_slice($arr_img,1);
					
					$file = fopen("./csv/waldhaus_text.csv","r");
					$arr_texts = fgetcsv($file, 0, "\t");
					fclose($file);
				?>
				<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
					<!-- Indicators -->
					
					<ol class="carousel-indicators">
						<?php
							$arrlength = count($arr_img);	
							for ($i = 0; $i < $arrlength; $i++){
								if($i==0){
									echo '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="active"></li>';								
								}
								else{
									echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
								}
							}
						?>
					</ol>
			
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<?php					
							foreach ($arr_img as $key=>$value){
								if ($key == 0){
								echo '<div class="item active">
										<img src="'.$dir.'/'.$value.'" alt="waldhaus">
										<div class="carousel-caption">
											<p>'.$arr_texts[$key].'</p>
										</div>
									</div>';
								}
								else{
									echo '<div class="item">
										<img src="'.$dir.'/'.$value.'" alt="waldhaus">
										<div class="carousel-caption">
											<p>'.$arr_texts[$key].'</p>
										</div>
									</div>';
								}
							}
						?>
					</div>
					
					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</body>
</html>

<!--<div id="galleria">
				<img src="./img/waldhaus/DSC_5370.jpg" image title="Image title 1"
					alt="Here is my picture"> <img src="./img/waldhaus/DSC_5371.jpg"
					image title="My image title" alt="My image description"> <img
					src="./img/waldhaus/DSC_5373.jpg" image title="My image title"
					alt="My image description"> <img src="./img/waldhaus/DSC_5376.jpg"
					image title="My image title" alt="My image description">
				<script>
						Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
						Galleria.run('#galleria');
						
				</script>
			</div>-->