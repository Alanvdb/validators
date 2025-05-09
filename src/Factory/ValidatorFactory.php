<?php declare(strict_types=1);

namespace AlanVdb\Validator\Factory;

use AlanVdb\Validator\Definition\ValidatorFactoryInterface;
use AlanVdb\Validator\Definition\ValidatorInterface;

use AlanVdb\Validator\EmailValidator;
use AlanVdb\Validator\RegexPatternValidator;
use AlanVdb\Validator\StringLengthValidator;

class ValidatorFactory implements ValidatorFactoryInterface
{
    public function createEmailValidator(string $errorMessage = 'Invalid value', int $errorCode = 0) : ValidatorInterface
    {
        return new EmailValidator($errorMessage, $errorCode);
    }

    public function createRegexPatternValidator(string $regex, string $errorMessage = 'Invalid value', int $errorCode = 0) : ValidatorInterface
    {
        return new RegexPatternValidator($regex, $errorMessage, $errorCode);
    }

    public function createStringLengthValidator(int $min, int $max, string $errorMessage = 'Invalid value', int $errorCode = 0) : ValidatorInterface
    {
        return new StringLengthValidator($min, $max, $errorMessage, $errorCode);
    }
}
