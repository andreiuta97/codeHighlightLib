<?php


namespace HighlightLib\Token;


class NewlineToken extends AbstractToken
{
    /**
     * @inheritDoc
     */
    public function getCSSType(): string
    {
        return "newline";
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return "<br>";
    }
}