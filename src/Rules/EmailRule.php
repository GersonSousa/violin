<?php

namespace Violin\Rules;

use Violin\Contracts\RuleContract;

class EmailRule implements RuleContract
{
    public function run($value, $input, $args)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function error()
    {
        return '{field} Deve ser um endereço de e-mail válido.';
    }

    public function canSkip()
    {
        return true;
    }
}
