<?php

namespace HighlightLib\Config;

return Array(
    '/\d+/' => "HighlightLib\Token\NumberToken",
    '/^\$[a-zA-Z_]\w*$/' => "HighlightLib\Token\VariableToken",
    '/^(\{|\})$/' => "HighlightLib\Token\BracketToken",
    '/^(?:.|,|;|:|‘|“|\[|\]|\(|\))$/' => "HighlightLib\Token\PunctuationToken",
    '/^(true|false|null|TRUE|FALSE|NULL|__CLASS__|__DIR__|__FILE__|__LINE__|__METHOD__|__FUNCTION__|__NAMESPACE__|__TRAIT__)$/' => "HighlightLib\Token\AtomToken"
);

