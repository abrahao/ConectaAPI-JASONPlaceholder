<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API JASON Placeholder</title>
</head>
<body>
    <h1>Consultando a API JSON Placeholder</h1>
    <?php
        $url = "https://jsonplaceholder.typicode.com/users/";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ch);

        $resultado = json_decode(curl_exec($ch));

        // var_dump($resultado);

        foreach ($resultado as $results => $valor) {
            // var_dump($title);
            echo "Nome: " .  $valor->name . "<br>";
            echo "Empresa: " . $valor->company->name . "<hr>";
        }
    ?>
</body>
</html>