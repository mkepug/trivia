<form action="edit.php" method="post">
    <textarea name="q1" id="" cols="30" rows="10"><?=$question->getQuestion()?></textarea>
<?php
$answers = $question->getAnswers();
foreach ($answers as $answer) :
    $text = $answer['text'];
    $select = $index==0?"selected":"";
    $correct = $answer['correct']?"selected":"";
    $remove = $answer['remove']?"selected":"";
    $incorrect = (!$answer['correct'] && !$answer['remove'] && $index !=0)?"selected":"";

?>
    <div>
        <textarea name="answerText[]" cols="30" rows="3"><?=$text?></textarea>
        <select name="answerType[]">
            <option disabled <?=$select?> value="">Select answer type</option>
            <option value="incorrect" <?=$incorrect?> >Incorrect</option>
            <option value="correct" <?=$correct?> >Correct</option>
            <option value="remove" <?=$remove?> >Remove</option>
        </select>
    </div>
<?php
endforeach;
?>
    <input type="hidden" name="index" value="<?=$index?>" />
    <input type="submit" name="submit" value="Submit" />
</form>