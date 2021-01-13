<?php

//Esta funcion la saque de internet, lo que hace es poder hacer includes pero con la opcion de pasarle variables a traves de un array
function _include($filePath, $variables = array(), $print = true)
{
    $filePath = 'views/'.$filePath.'.php';

    $output = NULL;
    if(file_exists($filePath)){
        // Extract the variables to a local namespace
        extract($variables);

        // Start output buffering
        ob_start();

        // Include the template file
        include $filePath;

        // End buffering and return its contents
        $output = ob_get_clean();
    }
    if ($print) {
        print $output;
    }
    return $output;
}

//Esto tambien lo saque de internet, esto practicamente obtiene rutas
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/home/index.php';
        break;
    case '' :
        require __DIR__ . '/views/home/index.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404/index.php';
        break;
}