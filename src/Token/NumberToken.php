<?php

declare(strict_types=1);

namespace HighlightLib\Token;


class NumberToken extends AbstractToken
{

    public function getCSSType(): string
    {
        return "number";
    }
}