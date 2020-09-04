<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/misEstilos.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>Document</title>

</head>

<body>

	<header class="header col-md-12">
		<div class="container">
			<h1 align="center" class="">Calculadora</h1>
		</div>
	</header>
	<div>
		<div class="row  col-md-12 margin">
				<br>
		</div>
	</div>
	
	<div class="container">
		<section class="row">
			<form action="PrimeraPagina.php" method="post" class="main col-md-3">
               <div class="form-group">
				   <div class="form-group">
				  <label for="option">Elige una operacion aritmetica:</label>
				  </div>
			  		<label>
						<input type="radio" name="operador" value="suma" checked> suma
					</label>
					<br>
					<label>
						<input type="radio" name="operador" value="resta"> resta<br>
					</label>
					<br>
					<label>
						<input type="radio" name="operador" value="multiplicacion"> multiplicaci&oacute;n <br>
					</label>
					<br>
					<label>
						<input type="radio" name="operador" value="division"> divisi&oacute;n
					</label>
				</div>
                <div class="form-group">
				Ingresa tu primer n&uacute;mero:<br />
				<input type="text" name="valor1" placeholder="numero 1" ><br />
				Ingresa tu segundo n&uacute;mero:<br />
				<input type="text" name="valor2" placeholder="numero 2" ><br>
                </div>

				<input class="btn btn-primary" type="reset" value="Borrar">
				<input type="submit" class="btn btn-primary" value="Enviar">

			</form>
			<div class="col-md-1">

			</div>

			<aside class=" col-md-5">
				<p class="parrafos lead">
					La siguiente calculadora ofrece las operaciones basicas aritmeticas:<br>
					suma,resta,multiplicacionn y division;
				</p>
				<div class=" col-md-2">
					<img src="imagenes/calculadora.jpg" height="341">
				</div>

			</aside>
         
		</section>

			 
		


		<?php
		error_reporting(E_ALL ^ E_NOTICE);
		if ($_POST["valor1"] !=""  and  $_POST["valor2"] !="" ) {
			if ($_POST["operador"] == "suma") {
				print "<br> <p class = lead id=parrafo>Resultado:" . ($resultado = $_POST["valor1"] + $_POST["valor2"])."</p>";
			} elseif ($_POST["operador"] == "resta") {
				print "<br> <p class =lead id=parrafo>Resultado:" . ($resultado = $_POST["valor1"] - $_POST["valor2"])."</p>";
			} elseif ($_POST["operador"] == "multiplicacion") {
				print "<br> <p class=lead id=parrafo>Resultado:" . ($resultado = $_POST["valor1"] * $_POST["valor2"])."</p>";
			} elseif ($_POST["operador"] == "division") {
				if ($_POST["valor2"] == 0) {
					print("<p class id= parrafo= lead>No se puede dividir por 0</p>");
				} else {
					print "<br> <p class = lead id=parrafo >Resultado:" . ($resultado = $_POST["valor1"] / $_POST["valor2"])."</p>";
				}
			}
		} else {
			print("<span class=help-block>Ingresa los numeros que deseas calcular</span>");
		}

		?>
      
	</div>
	   <div class="container">	
		   <div class="row">
            <div class="col-md-4 text-left">
				<button id="b1" class="btn btn-success" type="button">Mostrar Resultado</button>
				<button id="b2"class="btn btn-success" type="button">Ocultar Resultado</button>
			</div>
			</div>
		</div>

  <script>
    $(function() {
	 var mostrar = $("#b1"),
	     ocultar = $("#b2"),
	 parrafo = $("#parrafo");

	 mostrar.on("click",function(){
		 parrafo.show("slow");
		 });
	 ocultar.on("click",function(){
		 parrafo.hide("slow",function(){console.log("mostrando texto")
		 });
		 });
	})
     $(function(){
       $("body").hide().fadeIn(1200);                          
     })
   </script>
</body>

</html>