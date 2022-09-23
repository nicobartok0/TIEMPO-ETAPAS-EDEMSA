<?php
    //Importar la clase de la API para vincular con los endpoints.
    require_once "Api.class.php";
/*
    //Definir variables de vinculación con los endpoints, cantidades por etapa y promedio de tiempo por etapa
    //Etapa 0
    

    //Etapa 1
    $end_1 = Api::post('expedientes/nico/test1');
    $cantidad_1 = $end_1->result->cantidad;
    $promedio_1 = $end_1->result->promedio;

    //Etapa 2
    $end_2 = Api::post('expedientes/nico/test2');
    $cantidad_2 = $end_2->result->cantidad;
    $promedio_2 = $end_2->result->promedio;

    //Etapa 3
    $end_3 = Api::post('expedientes/nico/test3');
    $cantidad_3 = $end_3->result->cantidad;
    $promedio_3 = $end_3->result->promedio;

    //Etapa 4
    $end_4 = Api::post('expedientes/nico/test4');
    $cantidad_4 = $end_4->result->cantidad;
    $promedio_4 = $end_4->result->promedio;

    //Etapa 4A
    $end_4a = Api::post('expedientes/nico/test4a');
    $cantidad_4a = $end_4a->result->cantidad;
    $promedio_4a = $end_4a->result->promedio;

    //Etapa 5
    $end_5 = Api::post('expedientes/nico/test5');
    $cantidad_5 = $end_5->result->cantidad;
    $promedio_5 = $end_5->result->promedio;

    //Etapa 6
    $end_6 = Api::post('expedientes/nico/test6');
    $cantidad_6 = $end_6->result->cantidad;
    $promedio_6 = $end_6->result->promedio;

    //Etapa 7
    $end_7 = Api::post('expedientes/nico/test7');
    $cantidad_7 = $end_7->result->cantidad;
    $promedio_7 = $end_7->result->promedio;

    //Etapa 8
    $end_8 = Api::post('expedientes/nico/test8');
    $cantidad_8 = $end_8->result->cantidad;
    $promedio_8 = $end_8->result->promedio;

    //Etapa 9
    $end_9 = Api::post('expedientes/nico/test9');
    $cantidad_9 = $end_9->result->cantidad;
    $promedio_9 = $end_9->result->promedio;
*/
?>

<html>
    <head>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>



    </head>
    <body>
        <h1>Aplicación de consultas de tiempo por etapa</h1>
        <table>
            <tr>
                <td>
                    Etapa 0
                </td>
                <td>
                    Etapa 1
                </td>
                <td>
                    Etapa 2
                </td>
            </tr>
            <tr>
                <td>
                Registros: <span class='cantidad0c'>-</span> Promedio: <span class='cantidad0p'>-</span> 
                </td>
                <td>
                Registros: <span class='cantidad1c'>-</span> Promedio: <span class='cantidad1p'>-</span>
                </td>
                <td>
                Registros: <span class='cantidad2c'>-</span> Promedio: <span class='cantidad2p'>-</span>
                </td>
            </tr>
            <tr>
                <td>
                    <button>Más detalles</button>
                </td>
                <td>
                    <button>Más detalles</button>
                </td>
                <td>
                    <button>Más detalles</button>
                </td>
            </tr>
            <tr>
                <td>
                    Etapa 3
                </td>
                <td>
                    Etapa 4
                </td>
                <td>
                    Etapa 4A
                </td>
            </tr>
            
            <tr>
                <td>
                Registros: <span class='cantidad3c'>-</span> Promedio: <span class='cantidad3p'>-</span> 
                </td>
                <td>
                Registros: <span class='cantidad4c'>-</span> Promedio: <span class='cantidad4p'>-</span>
                </td>
                <td>
                Registros: <span class='cantidad4ac'>-</span> Promedio: <span class='cantidad4ap'>-</span>
                </td>
            </tr>
            <tr>
                <td>
                    <button>Más detalles</button>
                </td>
                <td>
                    <button>Más detalles</button>
                </td>
                <td>
                    <button>Más detalles</button>
                </td>
            </tr>
            <tr>
                <td>
                    Etapa 5
                </td>
                <td>
                    Etapa 6
                </td>
                <td>
                    Etapa 7
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                Registros: <span class='cantidad5c'>-</span> Promedio: <span class='cantidad5p'>-</span> 
                </td>
                <td>
                Registros: <span class='cantidad6c'>-</span> Promedio: <span class='cantidad6p'>-</span>
                </td>
                <td>
                Registros: <span class='cantidad7c'>-</span> Promedio: <span class='cantidad7p'>-</span>
                </td>
            </tr>
            </tr>
            <tr>
                <td>
                    <button>Más detalles</button>
                </td>
                <td>
                    <button>Más detalles</button>
                </td>
                <td>
                    <button>Más detalles</button>
                </td>
            </tr>
            <tr>
                <td>
                    Etapa 8
                </td>
                <td>
                    Etapa 9
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                Registros: <span class='cantidad8c'>-</span> Promedio: <span class='cantidad8p'>-</span> 
                </td>
                <td>
                Registros: <span class='cantidad9c'>-</span> Promedio: <span class='cantidad9p'>-</span>
                </td>
            </tr>
            </tr>
            <tr>
                <td>
                    <button>Más detalles</button>
                </td>
                <td>
                    <button>Más detalles</button>
                </td>
            </tr>
        </table>


<script>
function data_call(endpoint,clase){
    $.ajax({
            type: 'post',
            url: endpoint + '.php',
            traditional: true,
            success: function (data) {
                console.log(typeof data);
                console.log(data);
                console.log("." + clase + "c");
                
                $("." + clase + "c").text(data.promedio);
                $("." + clase + "p").text(data.cantidad);
            }
        });
}


data_call("getcantidad0","cantidad0");
data_call("getcantidad1","cantidad1");
data_call("getcantidad2","cantidad2");
data_call("getcantidad3","cantidad3");
data_call("getcantidad4","cantidad4");
data_call("getcantidad4a","cantidad4a");
data_call("getcantidad5","cantidad5");
data_call("getcantidad6","cantidad6");
data_call("getcantidad7","cantidad7");
data_call("getcantidad8","cantidad8");
data_call("getcantidad9","cantidad9");


</script>




    </body>
</html>