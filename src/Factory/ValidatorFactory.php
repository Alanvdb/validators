<?php declare(strict_types=1);

namespace AlanVdb\Validator\Factory;

use AlanVdb\Validator\Definition\ValidatorFactoryInterface;
use AlanVdb\Validator\Definition\ValidatorInterface;

use AlanVdb\Validator\EmailValidator;

class ValidatorFactory implements ValidatorFactoryInterface
{
    public function createEmailValidator(string $errorMessage = 'Invalid value', int $errorCode = 0) : ValidatorInterface
    {
        return new EmailValidator($errorMessage, $errorCode);
    }

    public function createRegexPatternValidator(string $errorMessage = 'Invalid value', int $errorCode = 0) : ValidatorInterface
    {
        return new RegexPatternValidator($errorMessage, $errorCode);
    }

    public function createStringLengthValidator(string $errorMessage = 'Invalid value', int $errorCode = 0) : ValidatorInterface
    {
        return new StringLengthValidator($errorMessage, $errorCode);
    }
}
