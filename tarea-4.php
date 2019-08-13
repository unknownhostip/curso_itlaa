

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style.css">
    <title>Tarea 4</title>
</head>
<body>
<?php
$action = $_SERVER['PHP_SELF'];
$datos = array();
if(isset($_POST['submit']))
{

$datos[] = array ("Nombre"=>$_POST["nombre"], "Apellidos"=>$_POST["apellidos"], "Edad"=>$_POST["edad"]);

foreach ($datos as $dato)
{
	echo "Nombre: ".$dato["Nombre"];
    echo "<br>";
	echo "Apellidos: ".$dato["Apellidos"];
    echo "<br>";
    echo "Edad :". $dato["Edad"];
}
}
else
{
echo "<form action=\"$action\" method=\"post\">";
	{
		echo "<span>Nombre:</span> ";
		echo "<input type=\"text\" name=\"nombre\" value=\"\"]><br>";
        echo "<span>Apellido:</span> ";
        echo "<input type=\"text\" name=\"apellidos\" value=\"\"]><br>";
        echo "<span>Edad:</span> ";
        echo "<input type=\"text\" name=\"edad\" value=\"\"]><br> <br>";
          
	}
echo "<input class=\"enviar\" type=\"submit\" name=\"submit\" value=\"Enviar\">";
echo "</form>";
}
?>  
</body>
</html>
