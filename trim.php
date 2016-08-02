<html>
<head>
	<link rel="shortcut icon" href="iconita.jpg">
	<title> Formular de inscriere </title>
	<style type="text/css">

		.titlu {
			text-align: center;
			font-family: "Times New Roman";
			font-size: 40px;
			text-transform: uppercase;
			color:orange;
		}

		.textul{
			padding: 50px 50px 50px 50px;
			font-family: "Tahoma";
			text-transform: capitalize;
			font-size:15px;
			text-align: center;
			color:orange;
		}
	</style>
	<script type="text/javascript">
		function Redirect()
		{
			window.top.location.href = "index.html"; 
		}

		setTimeout('Redirect()', 3000);
	</script>
</head>
<body background="img/stars.jpg">
	<br>
	<b>
		<div class="textul">
			<?php

			$numefam=$_POST["famname"];
			$numepre=$_POST["prename"];
			$email=$_POST["email"];
			$impresie=$_POST["impresie"];

			if($numefam=="" || $numepre=="" || $email==""){
				echo '<h1 class="titlu"><u>Impresia ta nu a fost trimis&#259;!</u></h1>';
			}	else
			echo '<h1 class="titlu"><u>Impresia ta a fost trimis&#259; cu succes!</u></h1>';


			$numeprim=$numefam." ".$numepre;
			$nume=strtoupper($numeprim);

			mkdir("/home/byuzgulen/public_html/interunivers/uploads/".$nume, 0777);

			$myfile = fopen("/home/byuzgulen/public_html/interunivers/uploads/".$nume."/".$nume, "w");
			fwrite($myfile, $impresie."\n\n");
			fwrite($myfile, $email);
			fclose($myfile);	
			?>

		</b>
	</div>
</body>
</html>	

