<?php

declare(strict_types=1);

namespace HighlightLib\Token;


class PunctuationToken extends AbstractToken
{

    /**
     * @inheritDoc
     */
    public function getCSSType(): string
    {
        return "punctuation";
    }
}