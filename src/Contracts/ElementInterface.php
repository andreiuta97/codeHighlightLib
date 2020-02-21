<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;


interface ElementInterface
{
    /**
     * @return string
     */
    public function getText (): string ;
}