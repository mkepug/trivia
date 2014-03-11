<?php
    use MKEPUG\Test;

    require __DIR__."/../bootstrap.php";

    $t = new Test();
    echo $t->returnString("Welcome to MKEPUG Trivia. ".date('r'));
