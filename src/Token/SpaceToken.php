<?php


namespace HighlightLib\Token;


class SpaceToken extends AbstractToken
{

    public function getCSSType(): string
    {
        return "space";
    }

    public function getText(): string
    {
        return " ";
    }
}