<?php
require "vendor/autoload.php";
use HighlightLib\CodeHighlight;
$verify = new CodeHighlight();
echo $verify->highlight("salut");