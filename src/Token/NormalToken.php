<?php


namespace HighlightLib\Token;


class NormalToken extends AbstractToken
{

    public function getCSSType(): string
    {
        return "normal";
    }

    public function getText(): string
    {
        return $this->stringToken;
    }
}