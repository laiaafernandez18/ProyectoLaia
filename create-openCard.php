<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "make_up";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//Data from Post
$producto= $_POST['producto'];
$modo_empleo= $_POST['modo_empleo'];
$precio= $_POST['precio'];
$funcion= $_POST['funcion'];
$num_lote= $_POST['num_lote'];
$peso= $_POST['peso'];
$marca= $_POST['marca'];
$nombre= $_POST['nombre'];
$img= $_POST['img'];
$video= $_POST['video'];

// consulta SQL
$sql="INSERT INTO products (producto, modo_empleo, precio, funcion, num_lote, peso, marca, nombre, img, video) VALUES('$producto', '$modo_empleo', '$precio', '$funcion', '$num_lote', '$peso', '$marca', '$nombre', '$img', '$video')";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
 } else {
     echo "Error: " .$sql . "<br>" . $conn->error;
 }
 $conn-> close();
?>
