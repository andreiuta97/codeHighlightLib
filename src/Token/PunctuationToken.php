<?php

declare(strict_types=1);

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class PunctuationToken implements TokenInterface
{

    public function get_CSSType(): string
    {
        return "Punctuation";
    }
}