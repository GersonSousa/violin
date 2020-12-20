<?php

namespace Violin\Rules;

use Violin\Contracts\RuleContract;

class AlphaRule implements RuleContract
{
    public function run($value, $input, $args)
    {
        return (bool) preg_match('/^[\pL\pM]+$/u', $value);
    }

    public function error()
    {
        return '{field} deve apenas conter letras.';
    }

    public function canSkip()
    {
        return true;
    }
}
