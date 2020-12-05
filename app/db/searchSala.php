<?php
    require_once('conexion.php');
    $nombre = $_POST['nombre'];
    $stmt = $conexion -> prepare("SELECT * FROM sala WHERE nombre=:nombre");
    $stmt -> bindParam(':nombre', $nombre);
    $stmt -> execute();
    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $resultado = $stmt -> fetchAll();
    if ($resultado != null) {
        foreach ($resultado as $valor) {
            echo "<thead>";
                echo "<tr>";
                    echo "<td>"."NOMBRE"."</td>";
                    echo "<td>"."TIPO"."</td>";
                    echo "<td>"."CAPACIDAD"."</td>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>".$valor['nombre']."</td>";
                    echo "<td>".$valor['tipo']."</td>";
                    echo "<td>".$valor['capacidad']."</td>";
                echo "</tr>";
            echo "</tbody>";
        }
    } else {
        echo "El alumno no existe en la base de datos";
    }
    
?>