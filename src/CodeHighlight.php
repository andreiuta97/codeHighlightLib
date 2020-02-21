<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Contracts\TokenizerInterface;
use HighlightLib\Contracts\ClassifierInterface;
use HighlightLib\Contracts\AssemblerInterface;



class CodeHighlight
{
    /**
     * @var TokenizerInterface
     */
    private $tokenizer;

    /**
     * @var ClassifierInterface
     */
    private $classifier;

    /**
     * @var AssemblerInterface
     */
    private $assembler;

    /**
     * CodeHighlight constructor.
     * @param TokenizerInterface $tokenizer
     * @param ClassifierInterface $classifier
     * @param AssemblerInterface $assembler
     */
    public function __construct
    (
        TokenizerInterface $tokenizer,
        ClassifierInterface $classifier,
        AssemblerInterface $assembler
    )
    {
        $this->tokenizer = $tokenizer;
        $this->classifier = $classifier;
        $this->assembler = $assembler;
    }

    /**
     * @param string $string
     * @return string
     */
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
