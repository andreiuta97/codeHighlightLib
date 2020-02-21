<?php

require "vendor/autoload.php";

use HighlightLib\Tokenizer\WhiteSpaceTokenizer;
use HighlightLib\Classifier\Classifier;
use HighlightLib\Assembler\Assembler;
use HighlightLib\CodeHighlight;
use HighlightLib\Config;

$tokenizer = new WhiteSpaceTokenizer();
$classifier = new Classifier();
$assembler = new Assembler();

$string = new CodeHighlight($tokenizer, $classifier, $assembler);
echo "<pre>".$string->highlight('function              bubble_Sort ( $my_array ) { do { $swapped = false ; for ( $i = 0 , $c')."</pre>";
