<?php include 'config.php'; ?>

<h1>Lista de usuario</h1>
<a href='create.php'>Agregar Nuevo</a>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Lastname</td>
        <td>Acciones</td>
    </tr>
    <a href="">Editar</a>|<a href
    <?php
    $result = $conexion->query("SELECT * FROM usuario");
    while($row = $result->fetch_assoc()){
        echo " <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[Lastname]</td>
        <td></td>
    </tr>";
    }
    ?>

</table>

