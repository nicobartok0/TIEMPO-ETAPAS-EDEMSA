<?php

ini_set('max_execution_time', 0);
require_once "../Api.class.php";
$end_9 = Api::post('expedientes/nico/test9');
$resultado = $end_9->result->listado; 
?>

<html>
    <head>

    </head>
    <body>
    <table>
        <tr>
                <td>Número de expediente</td>
                <td>Potencia</td>
                <td>Zona</td>
                <td>Departamento</td>
                <td>Tarifa</td>
                <td>Tiempo</td>
                <td>Fecha actual</td>
                <td>Fecha solicitud</td>
            </tr>
            <?php foreach($resultado as $item){ ?>
            <tr>
                <td><?=$item->NUM ?></td>
                <?php if ($item->POT >= 100) { ?>
                    <td>mayor (<?= $item->POT ?>)</td>
                <?php } else { ?>
                    <td>menor (<?= $item->POT ?>)</td>
                <?php } ?>    
                <td><?= $item->ZONA?></td>
                <td><?=$item->DEPTO ?></td>
                <td><?=$item->TAR ?></td>
                <td><?= $item->TIEMPO?></td>
                <td><?= $item->F_ACTUAL?></td>
                <td><?= $item->F_SOL?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>