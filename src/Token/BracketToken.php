<?php

declare(strict_types=1);

namespace HighlightLib\Token;

class BracketToken extends AbstractToken
{

    public function getCSSType(): string
    {
        return "bracket";
    }
}