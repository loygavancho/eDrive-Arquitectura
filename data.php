<?php
$serverName = "edrive-server1.database.windows.net"; //nombre_servidor
$connectionOptions = array(
    "Database" => "EDRIVEBD", //nombre_base_de_datos
    "Uid" => "loygavancho", //usuario
    "PWD" => "harold22lujan." //contraseña
);

$conn = mysqli_connect($serverName, $connectionOptions["Uid"], $connectionOptions["PWD"], $connectionOptions["Database"]);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);

mysqli_close($conn);
?>
