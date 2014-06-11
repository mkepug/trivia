<?php
    namespace MKEPUG;

    $index = isset($_GET['index']) ? (int)$_GET['index'] : 1;
    $mode = isset($_GET['mode']) ? $_GET['mode'] : 'all';

    require __DIR__."/../bootstrap.php";

    $file = __DIR__. "/../sampledata/questions.json";

    $dataSource = new DataSource( $file );

    $questionFactory = new QuestionFactory($dataSource);

    $game = new Game($questionFactory->getQuestions());

    $question = $game->getQuestion($index);

    $viewContents = new View('question.php',array('question'=>$question, 'mode'=>$mode, 'index'=>$index));
    $viewTemplate = new View('main.php',array('viewContents'=>$viewContents));
    echo $viewTemplate->render();
