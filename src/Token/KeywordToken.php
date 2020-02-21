<?php

declare(strict_types=1);

namespace HighlightLib\Token;


class KeywordToken extends AbstractToken
{

    public function getCSSType(): string
    {
        return "keyword";
    }
}