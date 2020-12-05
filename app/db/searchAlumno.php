<?php
    require_once('conexion.php');
    $rut = $_POST['rut'];
    $stmt = $conexion -> prepare("SELECT * FROM alumno WHERE rut=:rut");
    $stmt -> bindParam(':rut', $rut);
    $stmt -> execute();
    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $resultado = $stmt -> fetchAll();
    if ($resultado != null) {
        foreach ($resultado as $valor) {
            echo "<thead>";
                echo "<tr>";
                    echo "<td>"."RUT"."</td>";
                    echo "<td>"."NOMBRE"."</td>";
                    echo "<td>"."APELLIDO"."</td>";
                    echo "<td>"."TELÉFONO"."</td>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>".$valor['rut']."</td>";
                    echo "<td>".$valor['nombre']."</td>";
                    echo "<td>".$valor['apellido']."</td>";
                    echo "<td>".$valor['telefono']."</td>";
                echo "</tr>";
            echo "</tbody>";
        }
    } else {
        echo "El alumno no existe en la base de datos";
    }
    
?>