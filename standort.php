<?php
$zieladresse = 'brhonn@gmail.com';
$absenderadresse = 'brhonn@gmail.com';
$absendername = 'Formmailer';
$betreff = 'Mehr Informationen';
$redirect_to = 'standort.php';
$trenner = ":\t";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
$header = array();
$header[] = "From: ".mb_encode_mimeheader($absendername, "utf-8", "Q")." <".$absenderadresse.">";
$header[] = "MIME-Version: 1.0";
$header[] = "Content-type: text/plain; charset=utf-8";
$header[] = "Content-transfer-encoding: 8bit";

$mailtext = "";

foreach ($_POST as $name => $wert) {
	if (is_array($wert)) {
		foreach ($wert as $einzelwert) {
			$mailtext .= $name.$trenner.$einzelwert."\n";
		}
	} else {
		$mailtext .= $name.$trenner.$wert."\n";
	}
}

mail(
	$zieladresse, 
	mb_encode_mimeheader($betreff, "utf-8", "Q"), 
	$mailtext,
	implode("\n", $header)
) or die("Die Mail konnte nicht versendet werden.");
header("Location: $redirect_to");
exit;
}

header("Content-type: text/html; charset=utf-8");
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css"
	href="http://fonts.googleapis.com/css?family=Calibri">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/style_design_modus.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/change.js"></script>


		
</head>

<body id="body">
	<div id="wrapper">
			<?php
			include ("./nav.html");
			?>
			<div id="content">




			<div id="kontakPageText" style="display: inline-block;">
				<h2>Kontakt und Standort</h2>
				
					<form name="kontaktform" action="standort.php" method="post"
						accept-charset="UTF-8">
						<div class="field">
							<label for="name">Name </label> <input type="text" name="name" 
								id="name" value="" />
						</div>
						<div class="field">
							<label for="phone">Telefon</label> <input type="text"
								name="telefon" id="telefon" value="" />
						</div>
						<div class="field">
							<label for="liame">E-Mail </label> <input type="text"
								name="email" id="email" value="" />
						</div>

						<div class="field">
							<label for="message">Nachricht</label>
							<textarea cols="50" rows="5" name="Nachricht" id="Nachricht"></textarea>
						</div>
						<input type="submit" class="button" name="submit" value="Absenden" />
					</form>
				
			</div>


			<div id="kontaktinfo">
				<ul>
					<li>Hardmeier Holzbau</li>
					<li>Dorfstrasse 53</li>
					<li>8126 Zumikon</li>
					<br>
					<li><span class="glyphicon glyphicon-phone-alt"></span> +41 44 919
						01 23</li>
					<li><span class="glyphicon glyphicon-phone"></span> +41 79 784 63
						25</li>
					<li><span class="glyphicon glyphicon-envelope"></span> <a
						href="mailto:hardmeierholzbau@bluewin.ch?Subject=mehr informationen"
						target="_top">hardmeierholzbau@bluewin.ch</a></li>
					<li>7:00-12:00 / 13:00-17:00</li>
				</ul>
			</div>


			<div style="display: inline-block;" id="iframe">
				<iframe id="standort"
					src="https://www.google.com/maps/embed?pb=!1m20!1m8!1m3!1d10816.445940449177!2d8.62417!3d47.331694!3m2!1i1024!2i768!4f13.1!4m9!1i0!3e6!4m0!4m5!1s0x479aa69d27614b65%3A0x459e0ddf465d04c5!2sHardmeier+Holzbau%2C+Dorfstrasse+53%2C+8126+Zumikon!3m2!1d47.331694!2d8.62417!5e0!3m2!1sde!2sch!4v1421134674930"
					width="600" height="450" frameborder="0" style="border: 0"></iframe>
			</div>



		</div>



	</div>
	</div>

</body>

</html>