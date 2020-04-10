<?php

declare(strict_types=1);

namespace HighlightLib\Classifier;

use HighlightLib\Contracts\ClassifierInterface;
use HighlightLib\Contracts\TokenInterface;
use HighlightLib\Token\NormalToken;

class Classifier implements ClassifierInterface
{
    /**
     * @var
     */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @param array $stringToken
     * @return TokenInterface
     */
    public function classify(array $stringToken): TokenInterface
    {
        foreach ($this->config as $key => $value) {
            if (preg_match($key, $stringToken[0]))
                return new $value($stringToken[0], $stringToken[1]);
        }

        return new NormalToken($stringToken[0], $stringToken[1]);
    }
}