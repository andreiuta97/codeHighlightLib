<?php

declare(strict_types=1);

namespace HighlightLib\Token;


class VariableToken extends AbstractToken
{
    /**
     * @inheritDoc
     */
    public function getCSSType(): string
    {
        return "variable";
    }
}