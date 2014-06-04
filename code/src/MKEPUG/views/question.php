<div><?=$question->getQuestion()?></div>
<form>
<?php
$answers = $question->getAnswers();
foreach ($answers as $key => $answer)
{
    $text = $answer['text'];
    echo "<input type=\"radio\" name=\"answer\" value=\"{$key}\">{$text}<br/>";
}
?>
<input type="submit">
</form>