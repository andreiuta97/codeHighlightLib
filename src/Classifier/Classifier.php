<?php

declare(strict_types=1);

namespace HighlightLib\Classifier;

use HighlightLib\Contracts\ClassifierInterface;
use HighlightLib\Contracts\TokenInterface;
use HighlightLib\Config;
use HighlightLib\Token\AtomToken;
use TheSeer\Tokenizer\Token;

class Classifier implements ClassifierInterface
{
    private $config;

    public function classify(string $stringToken): TokenInterface
    {
        $this->getConfig();
        //var_dump('AICI!', $this->config);
        foreach ($this->config as $key => $value) {
            if (preg_match($key, $stringToken))
                return new $value;
        }

        //return new AtomToken();
    }

    private function getConfig()
    {
        $this->config = require ('/var/www/codeHighlightLib/src/Config/Config.php');
    }
}