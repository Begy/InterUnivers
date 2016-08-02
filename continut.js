$(document).ready(function(){	
					$("#mercur").click(function(){
					    $("#distSoare").html("<p>Mercur este prima planet&#259; de la Soare.</p>");
					    $("#nrSateliti").html("<p>0</p>"); 
					});
					$("#venus").click(function(){
					    $("#distSoare").html("<p>Venus este a doua planet&#259; de la Soare.</p>");
					    $("#nrSateliti").html("<p>0</p>"); 
					});

					$("#terra").click(function(){
					    $("#distSoare").html("<p>Terra este a treia planet&#259; de la Soare.</p>");
					    $("#nrSateliti").html("<p>1</p>"); 
					});

					$("#marte").click(function(){
					    $("#distSoare").html("<p>Marte este a patra planet&#259; de la Soare.</p>");
					    $("#nrSateliti").html("<p>2</p>"); 
					});

					$("#jupiter").click(function(){
					    $("#distSoare").html("<p>Jupiter este a cincea planet&#259; de la Soare.</p>");
					    $("#nrSateliti").html("<p>67</p>"); 
					});

					$("#saturn").click(function(){
					    $("#distSoare").html("<p>Saturn este a sasea planet&#259; de la Soare.</p>");
					    $("#nrSateliti").html("<p>~200, 63 au orbita confirmat&#259;</p>"); 
					});

					$("#uranus").click(function(){
					    $("#distSoare").html("<p>Uranus este a saptea planet&#259; de la Soare.</p>");
					    $("#nrSateliti").html("<p>27</p>"); 
					});

					$("#neptun").click(function(){
					    $("#distSoare").html("<p>Neptun este a opta planet&#259; de la Soare.</p>");
					    $("#nrSateliti").html("<p>13</p>"); 
					});

					$("#pluto").click(function(){
					    $("#distSoare").html("<p>Pluto este a noua planet&#259; de la Soare.</p>");
					    $("#nrSateliti").html("<p>5</p>"); 
					});
				});
				
				
				
				
				
				
				
				
				/* html-u
				<div align="center">
				  <img src="planete/mercur.png" class="planete" id="mercur">
				  <img src="planete/venus.png" class="planete" id="venus">
				  <img src="planete/terra.png" class="planete" id="terra">
				  <img src="planete/marte.png" class="planete" id="marte">
				  <img src="planete/jupiter.png" class="planete" id="jupiter">
				  <img src="planete/saturn.png" class="planete" id="saturn">
				  <img src="planete/uranus.png" class="planete" id="uranus">
				  <img src="planete/neptun.png" class="planete" id="neptun">
				  <img src="planete/pluto.png" class="planete" id="pluto"> 
			</div>
			<div style="width:100%; height: 100%;">
				<table>
				<tr>
					<td>
						<h1> Distan&#355;a fa&#355;&#259; de Soare: </h1>
					</td>
					<td>
						<div class="loc1" id="distSoare"></div>
					</td>
				</tr>
				</table>
				<table>
				<tr>
					<td>
						<h1> Nr. sateli&#355;i:  </h1>
					</td>
					<td>
						<div class="loc1" id="nrSateliti"></div>
					</td>
				</tr>
				</table>
			</div>*/