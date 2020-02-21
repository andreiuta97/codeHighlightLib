<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

abstract class AbstractToken implements TokenInterface
{
    /**
     * @var string
     */
    protected $stringToken;

    /**
     * @var int
     */
    protected $offset;


    /**
     * AbstractToken constructor.
     * @param string $stringToken
     * @param int $offset
     */
    public function __construct(string $stringToken, int $offset)
    {
        $this->stringToken = $stringToken;
        $this->offset = $offset;
    }

    /**
     * Gets the offset of a string
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Gets the length of a string
     * @return string
     */
    public function getLength(): string
    {
        return $this->stringToken;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return '<span class="'. $this->getCSSType() . '">' . $this->stringToken . "</span>";
    }

    /**
     * @return string
     */
    abstract public function getCSSType(): string;

}