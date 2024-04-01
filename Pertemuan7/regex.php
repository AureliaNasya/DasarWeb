<?php
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie';
echo $text. "<br>";
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;
?>