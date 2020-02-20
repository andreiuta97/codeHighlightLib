<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Tokenizer\WhiteSpaceTokenizer;

class CodeHighlight
{
    /*private $tokenizer;
    private $classifier;
    private $assembler;


    public function __construct(TokenizerInterface $tokenizer, ClasifierInterface $classifier, AssemblerInterface $assembler)
    {
        $this->tokenizer = $tokenizer;
        $this->classifier = $classifier;
        $this->assembler = $assembler;
    }
    */

    public function highlight(string $string): array
    {
        $out = new WhiteSpaceTokenizer();
        return $out->tokenize($string);
    }
}
