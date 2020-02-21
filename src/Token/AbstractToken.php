<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

abstract class AbstractToken implements TokenInterface
{
    protected $stringToken;
    protected $offset;

    public function __construct(string $stringToken, int $offset)
    {
        $this->stringToken = $stringToken;
        $this->offset = $offset;
    }

    public function getOffset(): int {
        return $this->offset;
    }

    public function getLength(): string {
        return $this->stringToken;
    }

    public function getText(): string
    {
        return '<span class="'. $this->getCSSType() . '">' . $this->stringToken . "</span>";
    }

    abstract public function getCSSType(): string;

}