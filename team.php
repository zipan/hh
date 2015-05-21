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
	</head>

	<body id="body" >
		<div id="wrapper">
			<?php
				include ("./nav.html");
			?>
			<div id="content">
				<?php
					$dir = "./img/team";
					
					$arr_img = scandir($dir);
					
					$arr_img = array_slice($arr_img,1);
					$arr_img = array_slice($arr_img,1);
					
					$file = fopen("./csv/team_text.csv","r");
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
								$text = explode("+", $arr_texts[$key]);
								echo '<div class="item active">
										<img src="'.$dir.'/'.$value.'" alt="waldhaus">
										<div class="carousel-caption">
											<h3>'.$text[0].'</h3>
											<p>'.$text[1].'</p>
										</div>
									</div>';
								}
								else{
									$text = explode("+", $arr_texts[$key]);
									echo '<div class="item">
										<img src="'.$dir.'/'.$value.'" alt="waldhaus">
										<div class="carousel-caption">
											<h3>'.$text[0].'</h3>
											<p>'.$text[1].'</p>
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
			
 		<div>

 		</div> 
		
		</div>
	</body>
</html>