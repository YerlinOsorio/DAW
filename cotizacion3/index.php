<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Naomi Osorio Morales">
	<meta name="author" content="Adrián Lamilla Coronel">
    <title>Cotizador de Departamentos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body >

<div class="container mt-5" style="margin: auto;">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="mb-4">Cotizador de Departamentos</h2>
            <form action="procesar.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="tipo_dep">Tipo de departamento</label>
                    <select class="form-control" id="tipo_dep" name="tipo_dep">
                        <option disabled selected>Elija una opcion</option>
                        <option>Suite</option>
                        <option>Dos habitaciones</option>
                        <option>Tres habitaciones</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Estilo cocina</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="eleccion1" name="tipo_eleccion" value="Americana">
                        <label class="form-check-label" for="eleccion1">Americana</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="eleccion2" name="tipo_eleccion" value="Isla">
                        <label class="form-check-label" for="eleccion2">Isla</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Servicios adicionales</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="check1" name="checklist[]" value="Gimnasio">
                        <label class="form-check-label" for="check1">Gimnasio</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="check2" name="checklist[]" value="Área de coworking">
                        <label class="form-check-label" for="check2">Área de coworking</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="check3" name="checklist[]" value="SPA">
                        <label class="form-check-label" for="check3">SPA</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
