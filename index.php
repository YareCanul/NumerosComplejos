<!DOCTYPE html>
<html>
<head>
	<title>Operaciones con números complejos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center">Operaciones con números complejos</h1>
	<div class="container">
		<form method="POST" action="#" id="complex-form" >
			<div class="row mb-3">
				<label for="real1" class="col-sm-2 col-form-label">Real 1:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="real1" name="real1">
				</div>
				<label for="imag1" class="col-sm-2 col-form-label">Imaginario 1:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="imag1" name="imag1">
				</div>
			</div>
            
			<div class="row mb-3 justify-content-center">
              <label for="operation" class="col-sm-2 col-form-label text-end">Operación:</label>
              <div class="col-sm-4 text-start">
              <select class="form-select-sm text-center" name="operation" id="operation">
              <option value="Sumar">Sumar</option>
              <option value="Restar">Restar</option>
              <option value="Multiplicar">Multiplicar</option>
             <option value="Dividir">Dividir</option>
            </select>
            </div>
            </div>

            <div class="row mb-3">
				<label for="real2" class="col-sm-2 col-form-label">Real 2:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="real2" name="real2">
				</div>
				<label for="imag2" class="col-sm-2 col-form-label">Imaginario 2:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="imag2" name="imag2">
				</div>
			</div>
			
			<div class="text-center">
				<button type="submit" class="btn btn-primary">Calcular</button>
			</div>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>



<?php
require_once('numeros.php');
if(isset($_POST['real1'], $_POST['imag1'], $_POST['real2'], $_POST['imag2'], $_POST['operation'])) {
    // Obtener los números complejos ingresados por el usuario
    $real1 = $_POST['real1'];
    $imag1 = $_POST['imag1'];
    $real2 = $_POST['real2'];
    $imag2 = $_POST['imag2'];
    $operation = $_POST['operation'];
    
    // Crear objetos Complex con los números ingresados
    $complex1 = new Complex($real1, $imag1);
    $complex2 = new Complex($real2, $imag2);

    // Realizar las operaciones y mostrar los resultados
    switch ($operation) {
        case 'Sumar':
            $result = $complex1->add($complex2);
            break;
        case 'Restar':
            $result = $complex1->subtract($complex2);
            break;
        case 'Multiplicar':
            $result = $complex1->multiply($complex2);
            break;
        case 'Dividir':
            $result = $complex1->divide($complex2);
            break;
        default:
            echo "Error: operación no válida.";
    }
}

if(isset($result)) {
    echo "Resultado: " . $result;
}
?>
