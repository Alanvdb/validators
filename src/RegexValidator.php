<?php declare(strict_types=1);

namespace AlanVdb\Validator;

use AlanVdb\Validator\Definition\ValidatorInterface;
use AlanVdb\Validator\Exception\InvalidValidatorParamProvided;

class RegexValidator extends AbstractValidator implements ValidatorInterface
{
    public function __construct(string $regex, string $errorMessage = 'must be a valid email address')
    {
        if (empty($regex)) {
            throw new InvalidValidatorParamProvided('Regex cannot be empty.');
        }
        $this->regex = $regex;
        $this->errorMessage = $errorMessage;
    }

    public function validate(string $value) : bool
    {
        return (bool) preg_match($this->regex, $value);
    }
}
