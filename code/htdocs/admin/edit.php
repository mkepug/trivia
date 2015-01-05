<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 10/14/2014
 * Time: 6:49 PM
 */

namespace MKEPUG;

//Zero creates a new question
$index = isset($_GET['index']) ? (int)$_GET['index'] : 1;
//$mode = isset($_GET['mode']) ? $_GET['mode'] : 'all';

require __DIR__."/../../bootstrap.php";

$file = __DIR__ . "/../../sampledata/questions.json";

$dataSource = new DataSource($file);

$questionFactory = new QuestionFactory($dataSource);

$questions = $questionFactory->getQuestions();

$game = new Game($questions);

$question = $game->getQuestion($index);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $question->setComment($_POST["comment"]);
    $question->setQuestion($_POST["question"]);

    $answers = [];
    foreach($_POST["answerText"] as $key => $answer){
        $answerObject = new Answer();
        $answerObject->setType($_POST["answerType"][$key]);
        $answerObject->setText($answer);
        $answers[] = $answerObject;
    }
    $question->setAnswers($answers);

    $questions[$index] = $question;
    $game->setQuestions($questions);

    $dataSource->setData($questions);
}

$viewContents = new View('editQuestion.php',array('question'=>$question, 'index'=>$index));

$viewTemplate = new View('main.php',array('viewContents'=>$viewContents));

echo $viewTemplate->render();
