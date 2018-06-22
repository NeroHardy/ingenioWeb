<?php
$servername = "localhost";
$database = "prueba";
$username = "root";
$password = "";




// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO contacto (nombre,apellidos,correo,celular,fecha,motivo) VALUES ('".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['correo']."','".$_POST['celular']."','".$_POST['fecha']."','".$_POST['motivo']."')";
if (mysqli_query($conn, $sql)) {
	header("location:../index.php");
      echo "New record created successfully";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>