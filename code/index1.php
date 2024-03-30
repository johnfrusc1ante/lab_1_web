<?php
#1.a

$str = 'ahb acb aeb aeeb adcb axeb';
$reg = '/a..b/';
preg_match_all($reg, $str, $matches);

foreach($matches[0] as $i) {
    echo $i."<br>";
}

