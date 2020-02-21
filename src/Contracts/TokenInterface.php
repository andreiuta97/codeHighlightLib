<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;


interface TokenInterface extends ElementInterface {
    public function getText(): string;
    public function getCSSType () : string;
}