<?php

try {

    require_once __DIR__."/../bootstrap.php";

    $controller = new \MKEPUG\Trivia\Controller();

    $request = new \MKEPUG\Trivia\Request($_GET, $_POST);

    $controller->handleRequest($request);

}catch (\Exception $e){
    echo $e->getMessage();
}
