<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;

interface TokenizerInterface
{
    /**
     * @param string $in
     * @return array
     */
    public function tokenize(string $in): array;
}
