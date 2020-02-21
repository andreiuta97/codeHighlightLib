<?php

declare(strict_types=1);

namespace HighlightLib\Token;


class BuiltinToken extends AbstractToken
{
    /**
     * @inheritDoc
     */
    public function getCSSType(): string
    {
        return "builtin";
    }
}