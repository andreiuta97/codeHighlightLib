<?php

declare(strict_types=1);

use HighlightLib\Contracts\TokenInterface;

class VariableToken implements TokenInterface
{

    public function get_CSSType(): string
    {
        return "Variable";
    }
}