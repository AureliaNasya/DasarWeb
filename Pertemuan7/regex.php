<?php
$pattern = '/[a-z]/'; //cocokan huruf kecil
$text = 'This is a Sample Text';
echo $text. "<br>";
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}
?>