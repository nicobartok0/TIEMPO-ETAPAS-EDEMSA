<?php
    //Importar la clase de la API para vincular con los endpoints.
    require_once "Api.class.php";

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
                    <a href="detalles/etapa0.php">Más detalles</a>
                </td>
                <td>
                    <a href="detalles/etapa1.php">Más detalles</a>
                </td>
                <td>
                    <a href="detalles/etapa2.php">Más detalles</a>
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
                    <a href="detalles/etapa3.php">Más detalles</a>
                </td>
                <td>
                    <a href="detalles/etapa4.php">Más detalles</a>
                </td>
                <td>
                    <a href="detalles/etapa4a.php">Más detalles</a>
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
                    <a href="detalles/etapa5.php">Más detalles</a>
                </td>
                <td>
                    <a href="detalles/etapa6.php">Más detalles</a>
                </td>
                <td>
                    <a href="detalles/etapa7.php">Más detalles</a>
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
                    <a href="detalles/etapa8.php">Más detalles</a>
                </td>
                <td>
                    <a href="detalles/etapa9.php">Más detalles</a>
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
                
                $("." + clase + "c").text(data.cantidad);
                $("." + clase + "p").text(data.promedio);
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