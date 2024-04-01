<?php
$pattern = '/go*d/';
$text = 'god is good';
echo $text. "<br>";
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan : " .$matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>