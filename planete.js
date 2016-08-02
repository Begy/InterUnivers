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