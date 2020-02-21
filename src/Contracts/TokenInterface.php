<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;

interface TokenInterface extends ElementInterface
{
    /**
     * @return string
     */
    public function getText(): string;

    /**
     * @return string
     */
    public function getCSSType () : string;
}