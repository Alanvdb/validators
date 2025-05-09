<?php declare(strict_types=1);

namespace AlanVdb\Validator;

use AlanVdb\Validator\Definition\ValidatorInterface;

class EmailValidator extends AbstractValidator implements ValidatorInterface
{
    public function validate(mixed $value) : bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}
