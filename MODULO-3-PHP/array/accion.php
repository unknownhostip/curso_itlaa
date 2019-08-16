<?php
    echo "<th>ACCION</th>";
    echo "<tr>"; //Otra fila
for ($i=0; $i <= 3 ; $i++) { 

 foreach ($accion as $key =>  $i) {
 
    echo "<td>";
    echo $i;  
    echo "</td>";
}
}

echo "</tr>"; // Fin de la otra filaS

?>