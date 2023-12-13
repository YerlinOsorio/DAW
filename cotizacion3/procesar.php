<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Procesar Datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">


                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Verificar si los campos están vacíos
                    if (empty($_POST["nombre"]) || empty($_POST["email"]) || empty($_POST["tipo_dep"]) || empty($_POST["tipo_eleccion"])) {
                        echo "<div class='alert alert-danger' role='alert'>Todos los campos son obligatorios. Por favor, complete el formulario.</div>";
                        echo ' <a href="index.php" class="btn btn-secondary">Regresar al formulario</a>';
                    } else {
                        $valor_adicional_base = 50;
                        $valor_por_ser_adicional = 50;
                        $valor_dep = 0;
                        $valor_ad1=0;
                        $valor_total_adicionales=0;
                        $depa = $_POST["tipo_dep"];
                        switch ($depa) {
                            case 'Suite':
                                $valor_dep = 90000;
                                break;
                            case 'Dos habitaciones':
                                $valor_dep = 100000;
                                break;
                            case 'Tres habitaciones':
                                $valor_dep = 120000;
                                break;
                            default:
                                break;
                        }
                        if ($_POST["tipo_eleccion"] == 'Isla') {
                            $valor_ad1 = 5000;
                        }
                        echo '<h2 class="mb-4">Hola ' . htmlspecialchars($_POST["nombre"]) . '!</h2>';
                        // Mostrar los datos ingresados
                        echo "<p><strong>Nombre:</strong> " . htmlspecialchars($_POST["nombre"]) . "</p>";
                        echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST["email"]) . "</p>";
                        echo "<p><strong>Tipo de departamento:</strong> " . htmlspecialchars($_POST["tipo_dep"]) . "</p>";
                        echo "<p><strong>Tipo de Elección:</strong> " . htmlspecialchars($_POST["tipo_eleccion"]) . "</p>";
                        if ($_POST["tipo_eleccion"] == 'Isla') {
                            $valor_ad1 = 5000;
                            echo "<p><strong>Costo adicional por Isla:</strong> $" . $valor_ad1. "</p>";
                        }
                        if (empty($_POST["checklist"])) {
                        } else {
                            $count_s_a=count($_POST["checklist"]);
                            $costo_total_serv_adicionales=$valor_adicional_base+($count_s_a*$valor_por_ser_adicional);
                            $valor_total_adicionales=$costo_total_serv_adicionales;
                            echo "<p><strong>Servicios adicionales:</strong> " . implode(", ", $_POST["checklist"]) . "</p>";
                            echo '<p><strong>Costo total de adicionales:</strong> $'.$costo_total_serv_adicionales .'</p>';
                        }
                        $total=$valor_dep+$valor_ad1+$valor_total_adicionales;
                        echo '<p><strong>Valor total del Apartamento: <span class="badge badge-success">$'.$total.'</span></p>';
                        
                    }
                }else{
                    header("Location: index.php");
                    exit();
                }
                ?>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>