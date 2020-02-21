<?php


namespace HighlightLib\Token;


class NormalToken extends AbstractToken
{
    /**
     * @inheritDoc
     */
    public function getCSSType(): string
    {
        return "normal";
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->stringToken;
    }
}