<style>
    .strike {
        text-decoration: line-through;
    }
</style>
<div><?=$question->getQuestion()?></div>
<ol>
<?php
$answers = $question->getAnswers();
foreach ($answers as $answer) {
    $text = $answer->getText();
    $strikethrough = '';
    if ($mode == '5050' && $answer->getRemove()) {
        $strikethrough = ' class="strike"';
    }
    if ($mode == 'answer' && !$answer->getCorrect()) {
        $strikethrough = ' class="strike"';
    }
    echo "<li{$strikethrough}><code>{$text}</code></li>";
}
$link = "?index=$index" . ($mode == 'all' ? '&mode=5050' : '&mode=answer');
if ($mode == 'answer') {
    $link = '?index=' . ($index + 1);
}
?>
</ol>
<div><?=($mode == 'answer' ? $question->getComment() : null)?></div>
<a href="<?=$link?>">Next</a>
