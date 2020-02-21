<?php


namespace HighlightLib\Token;


class SpaceToken extends AbstractToken
{

    /**
     * @inheritDoc
     */
    public function getCSSType(): string
    {
        return "space";
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return " ";
    }
}