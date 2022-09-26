<?php
ini_set('max_execution_time', 0);
ini_set('default_socket_timeout', 900);
class Api {

    public static function post($endpoint, array $data = []) {
        $url = "http://api2.local/" . $endpoint;
        $context = stream_context_create([
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ]);
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE || empty($result)) {
            return (object) [
                        "success" => false,
                        "message" => "Ocurrió un error en la consulta de la API"
            ];
        } else {
            return json_decode($result);
        }
    }

}