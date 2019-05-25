<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <?php

            /*
                Run php server via php : `php -S 0.0.0.0:8080` -> écoute sur 127.0.0.1:8080
            */

            require 'vendor/autoload.php';
            use GuzzleHttp\Client;

            $client = new Client();
            //$res = $client->request('GET', 'https://iut-projet-238109.appspot.com/');
            $res = $client->get('https://iut-projet-238109.appspot.com/');

        ?>
    </head>

    <body>
        <?php

            echo '<pre>';
            //var_dump($res);
            $body = $res->getBody();
            $json = json_decode((string) $body);

            var_dump($json);
            echo '</pre>';

        ?>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>