<html>
<head>

	<title>prueba</title>
	<link href="Bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="Bootstrap/estilo.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
		<p>Probando Texto
		</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<?php

				include_once ("notaControlador.php");

				 $id=1;


				 $nota = new notaControlador();
				 	echo "<div>";
				 	echo "<table border='1' align='center' ><tr><td align='center' >ID</td><td align='center'>NOMBRE</td><td align='center'>PARCIAL</td><td align='center' class='ocultarenmovil' >FINAL</td><td class='ocultarenmovil' align='center'>MEJORAMIENTO</td><td class='ocultarenmovil' align='center'>NOTAPROMEDIO</td></tr>";

				 foreach ($nota->mostrarNotas() as $c) {

				 	
				 	echo "<tr>";
				 	
				 	echo "<td align='center'>".$c->getIdNota."</td>";
				 	echo "<td align='center'>".$c->getNombre()."</td>";
				 	echo "<td align='center'>".$c->getParcial()."</td>";
				 	echo "<td align='center' class='ocultarenmovil'>".$c->getFinal."</td>";
				 	echo "<td align='center' class='ocultarenmovil'>".$c->getMejoramiento."</td>";
				 	echo "<td align='center' class='ocultarenmovil'>".$c->getNotaProm."</td>";
				 	
				 	echo "</tr>";
				 }
				 	echo "</table>";
				 	echo "</div>";
			?>
		</div>
	</div>
</body>
</html>
