<?php

declare(strict_types=1);

namespace HighlightLib\Tokenizer;

use HighlightLib\Contracts\TokenizerInterface;

class TokenizerClass implements TokenizerInterface
{
    public function tokenize(string $in): array
    {
        return preg_split("/ +/", $in);
    }
}