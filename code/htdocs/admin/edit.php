<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 10/14/2014
 * Time: 6:49 PM
 */

namespace MKEPUG;

//Zero creates a new question
$index = isset($_GET['index']) ? (int)$_GET['index'] : 0;
//$mode = isset($_GET['mode']) ? $_GET['mode'] : 'all';

require __DIR__."/../../bootstrap.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    /**
     * TODO: Process post variables
     */
}else {
    $file = __DIR__ . "/../../sampledata/questions.json";

    $dataSource = new DataSource($file);

    $questionFactory = new QuestionFactory($dataSource);

    $game = new Game($questionFactory->getQuestions());

    $question = $game->getQuestion($index);
}
$viewContents = new View('editQuestion.php',array('question'=>$question, 'index'=>$index));

$viewTemplate = new View('main.php',array('viewContents'=>$viewContents));

echo $viewTemplate->render();
