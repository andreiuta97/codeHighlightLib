<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Contracts\TokenizerInterface;
use HighlightLib\Contracts\ClassifierInterface;
use HighlightLib\Contracts\AssemblerInterface;



class CodeHighlight
{
    private $tokenizer;
    private $classifier;
    private $assembler;


    public function __construct(TokenizerInterface $tokenizer, ClassifierInterface $classifier, AssemblerInterface $assembler)
    {
        $this->tokenizer = $tokenizer;
        $this->classifier = $classifier;
        $this->assembler = $assembler;
    }


    public function highlight(string $string): string
    {

        $in = $this->tokenizer->tokenize($string);
        $stringToken = array();
        foreach ($in as $value) {
            $stringToken[]= $this->classifier->classify($value);
        }

        return $this->assembler->assemble($stringToken);


    }
}
