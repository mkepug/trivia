<form method="post">
    <textarea name="question" id="" cols="30" rows="10"><?=$question->getQuestion()?></textarea>
<?php
$answers = $question->getAnswers();
$comment = $question->getComment();
foreach ($answers as $key => $answer) :
    $text = $answer->getText();
    $select = $index==0?"selected":"";
    $correct = $answer->getCorrect()?"selected":"";
    $remove = $answer->getRemove()?"selected":"";
    $incorrect = (!$answer->getCorrect() && !$answer->getRemove() && $index !=0)?"selected":"";


?>
    <div>
        <textarea name="answerText[<?=$key?>]" cols="30" rows="3"><?=$text?></textarea>
        <select name="answerType[<?=$key?>]">
            <option disabled <?=$select?> value="">Select answer type</option>
            <option value="incorrect" <?=$incorrect?> >Incorrect</option>
            <option value="correct" <?=$correct?> >Correct</option>
            <option value="remove" <?=$remove?> >Remove</option>
        </select>
    </div>
<?php
endforeach;
?>
    <textarea name="comment" cols="30" rows="3"><?=$comment?></textarea>
    <input type="hidden" name="index" value="<?=$index?>" />
    <input type="submit" name="submit" value="Submit" />
</form>