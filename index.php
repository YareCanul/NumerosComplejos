<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
<title>Numeros Complejos</title>
<head>
	
	<link href="./assets/vendor/bootstrap/css/bootstrap.min.css"  rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <div class="card" style="margin:50px;">
  <div class="card text-center">
    <div class="card-header">
  <br>
</head>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-info navbar-dark">
<div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Operaciones con numeros complejos</a>

        <!-- Icons -->
        <ul class="navbar-nav d-flex flex-row me-1">
            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link text-white" href="#"><i class="fas fa-envelope mx-1"></i> Contact</a>
            </li>
            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link text-white" href="#"><i class="fas fa-cog mx-1"></i> Settings</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                data-mdb-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user mx-1"></i> Profile </a>
                <!-- Dropdown menu -->
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="#">My account</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">Log out</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
	<br>
	<div class="container">
		<form method="POST" action="#" id="complex-form" >
			<div class="row mb-3">
				<label for="real1" class="col-sm-1 col-form-label">Real 1:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="real1" name="real1">
				</div>
				<label for="imag1" class="col-sm-2 col-form-label">Imaginario 1:</label>
				<div class="col-sm-3 d-flex align-items-center">
            <input type="text" class="form-control" id="imag1" name="imag1" style="width: 100px;">
                 <span class="input-group-text" style="font-weight: bold; font-size: 16px;">i</span>
               </div>
			</div>
            
			<div class="row mb-3 justify-content">
              <label for="operation" class="col-sm- col-form-label text-end" ></label>
              <div class="col-sm text-start-center">
              <select class="form-select-sm text-center" name="operation" id="operation">
              <option value="Sumar">Sumar</option>
              <option value="Restar">Restar</option>
              <option value="Multiplicar">Multiplicar</option>
             <option value="Dividir">Dividir</option>
            </select>
            </div>
            </div>

            <div class="row mb-3">
				<label for="real2" class="col-sm-1 col-form-label">Real 2:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="real2" name="real2">
				</div>
				<label for="imag2" class="col-sm-2 col-form-label">Imaginario 2:</label>
				<div class="col-sm-3 d-flex align-items-center">
            <input type="text" class="form-control" id="imag2" name="imag2" style="width: 100px;">
                 <span class="input-group-text" style="font-weight: bold; font-size: 16px;">i</span>
               </div>
			</div>
			
			<div class="text-center">
				<button type="submit"  class="btn btn-primary">Calcular</button>
                <button type="reset"  class="btn btn-danger">Borrar</button>
			</div>
            <br>
            <br>
            <br>
            <br>
      

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

   
    
    echo "<div style='background-color: #f2f2f2; border: 10px solid #ccc; padding: 50px;'>El Resultado es: " . $result . "</div>";
}



?>

<br>
<br>
 <div class="text-center p-3"  style="background-color: rgba(72,183,204);">
    © 2023 Copyright:
    <a class="text-primary" href="">PrintLY</a>
  </div>
 