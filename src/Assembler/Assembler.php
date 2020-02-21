<?php

declare(strict_types=1);

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;

class Assembler implements AssemblerInterface
{

    /**
     * Function for assembling the "span" structure
     * @param array $tokens
     * @return string
     */
    public function assemble(array $tokens): string
    {
        // <span class="atom"> true </span>
        $stringTokens = "";
        $index = 0;
        foreach ($tokens as $string) {
            if ($index !== 0) {
                $offset = $string->getOffset();
                $len = $tokens[$index - 1]->getOffset() + strlen($tokens[$index - 1]->getLength());
                $lun = $offset - $len;
                while ($lun > 0) {
                    $stringTokens .= " ";
                    $lun--;
                }
            }
            $stringTokens .= $string->getText();
            $index++;
        }

        return $stringTokens;
    }
}