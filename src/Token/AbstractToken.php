<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

abstract class AbstractToken implements TokenInterface
{
    protected $stringToken;

    public function __construct(string $string)
    {
        $this->stringToken = $string;
    }

    public function getText(): string
    {
        return '<span class="'. $this->getCSSType() . '">' . $this->stringToken . "</span>";
    }

    abstract public function getCSSType(): string;
}