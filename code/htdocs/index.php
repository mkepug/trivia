<?php
    namespace MKEPUG;

    $index = isset($_GET['index']) ? (int)$_GET['index'] : 0;

    require __DIR__."/../bootstrap.php";

    $file = __DIR__. "/../sampledata/questions.json";

    $dataSource = new DataSource( $file );

    $questionFactory = new QuestionFactory($dataSource);

    $game = new Game($questionFactory->getQuestions());

    $question = $game->getQuestion($index);

    $viewContents = new View('question.php',array('question'=>$question));
    $viewTemplate = new View('main.php',array('viewContents'=>$viewContents));
    echo $viewTemplate->render();
