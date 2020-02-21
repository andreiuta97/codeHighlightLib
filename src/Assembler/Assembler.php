<?php

declare(strict_types=1);

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;


class Assembler implements AssemblerInterface
{

    public function assemble(array $tokens): string
    {
        // <span class="atom"> true </span>
        $stringTokens = "";
        foreach ($tokens as $string) {
            $stringTokens .= $string->getText();
        }
        return $stringTokens;

    }
}