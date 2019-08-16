<?php
echo "<br>";
#convesion de monedad 
if(isset($_POST["conversion"]) && (is_numeric($_POST["conversion"]) || is_numeric(str_replace(",",".",$_POST["conversion"]))))
{
  $conversion=str_replace(",",".",$_POST["conversion"]);
}else {
    $conversion = 50.81;
}
#Aconvertir

if(isset($_POST["aconvertir"]) && (is_numeric($_POST["aconvertir"]) || is_numeric(str_replace(",",".",$_POST["aconvertir"]))))
{
    $aconvertir=str_replace(",",".",$_POST["aconvertir"]);
}else {
    $aconvertir = 0;
}
$resultado=$conversion*$aconvertir;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarea #3</title>

    <style>
    form span{
        float:left;
        width:180px;
        display:block;
     
    }
    input {text-align:right;}
    </style>
</head>
<body>
    <h1>Practicando</h1>
    

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
       
    <span>Valor USD</span>
    <input type="text" name="conversion" value="<?php echo $conversion?>"><br>
    <span>Ingrese Monto en USD</span>
    <input type="text" name="aconvertir" value="<?php echo $aconvertir?>"><br>
    <span>Cantidad en RD$</span>
    <input type="text" name="resultado" value="<?php echo number_format($resultado,2,".",",")?>">

    <input type="submit" value="calcular">

    </form>
</body>
</html>