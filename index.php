<?php

require "vendor/autoload.php";

use HighlightLib\Classifier\Classifier;
use HighlightLib\CodeHighlight;
use HighlightLib\Tokenizer\WhiteSpaceTokenizer;

$verify = new CodeHighlight();
$array = $verify->highlight('false 1 true " . { ( ) ');

$verify2 = new Classifier();
foreach ($array as $value) {
    echo $verify2->classify($value)->get_CSSType();
    echo " ";
}