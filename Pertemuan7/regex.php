<?php
$pattern = '/[0-9]+/'; //cocokan satu atau lebih digit
$text = 'There are 123 apples';
echo $text. "<br>";
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan : " .$matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>