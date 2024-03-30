<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $str = $_POST['text'];

    $word_count = str_word_count($str);
    $char_count = strlen($str);
} else {
    $str = '';
    $word_count = 0;
    $char_count = 0;
}
?>
