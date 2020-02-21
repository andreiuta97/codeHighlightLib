<?php


namespace HighlightLib\Token;


class NewlineToken extends AbstractToken
{

    public function getCSSType(): string
    {
        return "newline";
    }

    public function getText(): string
    {
        return "<br>";
    }
}