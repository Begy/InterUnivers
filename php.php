<html>
<head>
	<link rel="shortcut icon" href="img/icon.png">
	<title>Rezultate</title>
	<style type="text/css">
		body{
			margin-top: 0;
			background-image: url("img/stars.jpg");
			color: #c0c0c0;
		}
		p{
			font-size: 22px;
			padding-left: 50px;
			padding-right: 50px;
			text-align: center;
		}
		.pad{
			text-align: center;
			font-size: 22px;
			padding-left: 150px;
			padding-right: 150px;
		}
		.img{
			height: 450px;
			width: 30px;
		}
		.centrat { 
			border: 7px #000033;
			border-style: double;
			margin: 0 auto;
			padding-left: 2%;
			padding-top: 2%;
			background-image:url("img/backgr.png");
			overflow: auto;
		}
		.fixed{
			position: fixed;
			bottom: 8px;
			right: 16px;
			font-size: 18px;
			cursor:pointer;
		}
	</style>
</head>
<body>
	<br><p>
	<?php

	$s=1;

	$intr1=null;
	$intr2=null;
	$intr3=null;
	$intr4=null;
	$intr5=null;
	$intr6=null;

	if(isset($_POST["intr1"])){$intr1=$_POST["intr1"];}
	if(isset($_POST["intr2"])){$intr2=$_POST["intr2"];}
	if(isset($_POST["intr3"])){$intr3=$_POST["intr3"];}
	if(isset($_POST["intr4"])){$intr4=$_POST["intr4"];}
	if(isset($_POST["intr5"])){$intr5=$_POST["intr5"];}
	if(isset($_POST["intr6"])){$intr6=$_POST["intr6"];}

	$tifani=$_POST["opta"];
	$americana=$_POST["treia"];
	$optunu=$_POST["negativ"];
	$cincisapte=$_POST["apa"];
	$romana=$_POST["Bioware"];
	$debut=$_POST["actiune"];
	$greu=$_POST["436"];
	$griargintie=$_POST["gheata"];
	$mare=$_POST["taur"];
	$foitele=$_POST["Europa"];
	$lambriuri=$_POST["albastra"];
	$fonica=$_POST["cincea"];

	echo "<div id='undiv' class='centrat' style='position: fixed; left: 10%; top:120px; right: 10%; bottom: 15px;'><p align='center'>Iat&#259; performan&#355;a ta. <br>
	La &#238;ntreb&#259;rile r&#259;spunse corect se va afi&#351;a OK, iar numerele &#238;ntreb&#259;rilor la care tu ai dat un 
	r&#259;spuns gre&#351;it vor fi urmate de X.</p>";
	echo "<div align='center'><table width='100%' style='color:#C0C0C0; font-size: 24px;'><tr><td width='33%' style='border-style: none dashed none none; border-color: orange'><center>";

	if($intr1=="saturn"){
		$s=$s+0.5;
		echo "1) OK<br>";
	}
	else
		echo "1) X<br>";

	if($intr2=="apa"){
		$s=$s+0.5;
		echo "2) OK<br>";
	}
	else
		echo "2) X<br>";

	if($intr3=="55cancrie"){
		$s=$s+0.5;
		echo "3) OK<br>";
	}
	else
		echo "3) X<br>";

	if($intr4=="iarna"){
		$s=$s+0.5;
		echo "4) OK<br>";
	}
	else
		echo "4) X<br>";

	if($intr5=="costi"){
		$s=$s+0.5;
		echo "5) OK<br>";
	}
	else
		echo "5) X<br>";

	if($intr6=="1977"){
		$s=$s+0.5;
		echo "6) OK<br>";
	}
	else
		echo "6) X<br>";


	echo "</center></td><td width='34%' style='border-style: none dashed none none; border-color: orange'><center>";



	if($tifani=="opta"){
		$s=$s+0.25;
		echo "1) A) OK<br>";
	}
	else
		echo "1) A) X<br>";



	if($americana=="treia"){
		$s=$s+0.25;
		echo "1) B) OK<br>";
	}
	else
		echo "1) B) X<br>";


	if($optunu=="negativ"){
		$s=$s+0.25;
		echo "2) A) OK<br>";
	}
	else
		echo "2) A) X<br>";


	if($cincisapte=="apa"){
		$s=$s+0.25;
		echo "2) B) OK<br>";
	}
	else
		echo "2) B) X<br>";

	if($romana=="Bioware"){
		$s=$s+0.25;
		echo "3) A) OK<br>";
	}
	else
		echo "3) A) X<br>";


	if($debut=="actiune"){
		$s=$s+0.25;
		echo "3) B) OK<br>";
	}
	else
		echo "3) B) X<br>";


	if($greu=="436"){
		$s=$s+0.25;
		echo "4) A) OK<br>";
	}
	else
		echo "4) A) X<br>";


	if($griargintie=="gheata"){
		$s=$s+0.25;
		echo "4) B) OK<br>";
	}
	else
		echo "4) B) X<br>";


	if($mare=="taur"){
		$s=$s+0.25;
		echo "5) A) OK<br>";
	}
	else
		echo "5) A) X<br>";

	if($foitele=="Europa"){
		$s=$s+0.25;
		echo "5) B) OK<br>";
	}
	else
		echo "5) B) X<br>";

	if($lambriuri=="albastra"){
		$s=$s+0.25;
		echo "6) A) OK<br>";
	}
	else
		echo "6) A) X<br>";


	if($fonica=="cincea"){
		$s=$s+0.25;
		echo "6) B) OK<br>";
	}
	else
		echo "6) B) X<br>";



	echo "</center></td><td width='33%'><center>";



	if(!isset($_POST['onoffswitch']) ) 
	{
		$s=$s+0.6;
		echo "1) OK<br>";
	}
	else
		echo "1) X<br>";    

	if(isset($_POST['onoffswitch2']) ) 
	{
		$s=$s+0.6;
		echo "2) OK<br>";
	}
	else
		echo "2) X<br>"; 

	if(!isset($_POST['onoffswitch3']) ) 
	{
		$s=$s+0.6;
		echo "3) OK<br>";
	}
	else
		echo "3) X<br>";

	if(isset($_POST['onoffswitch4']) ) 
	{
		$s=$s+0.6;
		echo "4) OK<br>";
	}
	else
		echo "4) X<br>";

	if(isset($_POST['onoffswitch5']) ) 
	{
		$s=$s+0.6;
		echo "5) OK<br>";
	}
	else
		echo "5) X<br>"; 

	echo "</center></td></tr></table>";

	echo "</div>";

	echo "<p><br> Ai ob&#355;inut nota: <font color='orange'>".round($s, 2)."</font><br><br>";

	echo "</div>		<div  align='right'><a href='index.html'><img src='img/back.png' class='fixed' height='100px' width='100px'></a></div>";
	?>

</body>
</html>	

