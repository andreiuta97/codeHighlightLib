<?php

declare(strict_types=1);

namespace HighlightLib\Classifier;

use HighlightLib\Contracts\ClassifierInterface;
use HighlightLib\Contracts\TokenInterface;
use HighlightLib\Token\NormalToken;

class Classifier implements ClassifierInterface
{
    private $config;

    public function classify(string $stringToken): TokenInterface
    {
        $this->getConfig();
        foreach ($this->config as $key => $value) {
            if (preg_match($key, $stringToken))
                return new $value($stringToken);
        }
        return new NormalToken($stringToken);

    }

    private function getConfig()
    {
        $this->config = require ('/var/www/codeHighlightLib/src/Config/Config.php');
    }
}