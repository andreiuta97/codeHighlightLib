<?php

declare(strict_types=1);

namespace HighlightLib;

class CodeHighlight
{
    private $tokenizer;
    private $classifier;
    private $assembler;

    public function __construct(TokenizerInterface $tokenizer, ClasifierInterface $classifier, AssemblerInterface $assembler)
    {
        $this->tokenizer = $tokenizer;
        $this->classifier = $classifier;
        $this->assembler = $assembler;
    }

    public function highlight(string $string): string
    {
        // use the defined classes/services to perform the highlighting on $string
        $string = "codehilight";
        return $string;
    }
}
