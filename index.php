<?php

require "vendor/autoload.php";

use HighlightLib\CodeHighlight;
use HighlightLib\Tokenizer\TokenizerClass;

$verify = new CodeHighlight();
print_r($verify->highlight("cfhsio fsjfh \n id \n hai"));