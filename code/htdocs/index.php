<?php
    namespace MKEPUG;

    $index = isset($_GET['index']) ? (int)$_GET['index'] : 0;

    require __DIR__."/../bootstrap.php";

    $file = __DIR__. "/../sampledata/questions.json";

    $dataSource = new DataSource( $file );

    $questionFactory = new QuestionFactory($dataSource);

    $game = new Game($questionFactory->getQuestions());

    $question = $game->getQuestion($index);

    echo $question->getQuestion() . "<br/>";

    $answers = $question->getAnswers();
    foreach ($answers as $answer)
    {
        $text = $answer['text'];
        $text = $answer['correct']?"<b>{$text}</b>":$text;
        echo $text . "<br/>";
    }


    echo "COMMENT: " . $question->getComment();

