<?php

require "vendor/autoload.php";

//include 'style\colors.css';


use HighlightLib\Tokenizer\WhiteSpaceTokenizer;
use HighlightLib\Classifier\Classifier;
use HighlightLib\Assembler\Assembler;
use HighlightLib\CodeHighlight;
use HighlightLib\Config;


$tokenizer = new WhiteSpaceTokenizer();
$classifier = new Classifier();
$assembler = new Assembler();

$string = new CodeHighlight($tokenizer, $classifier, $assembler);
print_r($string->highlight('function bubble_Sort ( $my_array ) { do { $swapped = false ; for ( $i = 0 , $c = count ( $my_array ) a 1 ; $i < $c ; $i ++ ) { if ( $my_array [ $i ] > $my_array [ $i + 1 ] ) { list ( $my_array [ $i + 1 ] , $my_array [ $i ] ) = array ( $my_array [ $i ] , $my_array [ $i + 1 ] ) ; $swapped = true ; } } } while ( $swapped ) ; return $my_array ; }'));
