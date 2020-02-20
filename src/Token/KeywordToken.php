<?php

declare(strict_types=1);

use HighlightLib\Contracts\TokenInterface;

class KeywordToken implements TokenInterface
{

    public function get_CSSType(): string
    {
        return "Keyword";
    }
}