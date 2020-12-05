<?php
    require_once('conexion.php');
    $nombre = $_POST['nombre'];
    $stmt = $conexion -> prepare("SELECT * FROM asignatura WHERE nombre=:nombre");
    $stmt -> bindParam(':nombre', $nombre);
    $stmt -> execute();
    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $resultado = $stmt -> fetchAll();
    if ($resultado != null) {
        foreach ($resultado as $valor) {
            echo "<thead>";
                echo "<tr>";
                    echo "<td>"."NOMBRE"."</td>";
                    echo "<td>"."DESCRIPCIÓN"."</td>";
                    echo "<td>"."PERIODO"."</td>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>".$valor['nombre']."</td>";
                    echo "<td>".$valor['descripcion']."</td>";
                    echo "<td>".$valor['periodo']."</td>";
                echo "</tr>";
            echo "</tbody>";
        }
    } else {
        echo "El alumno no existe en la base de datos";
    }
    
?>