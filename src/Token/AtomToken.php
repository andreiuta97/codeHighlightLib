<?php

declare(strict_types=1);

namespace HighlightLib\Token;

class AtomToken extends AbstractToken
{
    /**
     * @inheritDoc
     */
    public function getCSSType(): string
    {
        return "atom";
    }
}