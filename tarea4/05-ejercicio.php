
<?php  
    $juegos = array(

       "ACCION" => array('GTA','GOD','PUGB'),
        "AVENTURA" => array('Assasins Screan', 'Crash', 'Prince of Persias')  ,
        "DEPORTES" => array('Fifa 19', 'Pes 19', 'Moto 19')   
    
    );
//    Almacenos las categorias en una variable llamada categoria para poder llamar el valor una a una 
  $categorias = array_keys($juegos);
?>
<!-- Imprimindo los datos el array asociativo en la tabla html -->
<table border="1">
    <tr>
        <?php foreach($categorias as $categoria): ?>
        <th><?=$categoria?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <td><?=$juegos['ACCION'][0];?></td>
        <td><?=$juegos['AVENTURA'][0];?></td>
        <td><?=$juegos['DEPORTES'][0];?></td>
    </tr>
    <tr>
        <td><?=$juegos['ACCION'][1];?></td>
        <td><?=$juegos['AVENTURA'][1];?></td>
        <td><?=$juegos['DEPORTES'][1];?></td>
    </tr>
    <tr>
        <td><?=$juegos['ACCION'][2];?></td>
        <td><?=$juegos['AVENTURA'][2];?></td>
        <td><?=$juegos['DEPORTES'][2];?></td>
    </tr>

</table>