<?php declare(strict_types=1);

namespace AlanVdb\Validator\Definition;

interface ValidatorFactoryInterface
{
    public function createEmailValidator(string $errorMessage = 'Invalid value', int $errorCode = 0) : ValidatorInterface;

    public function createRegexPatternValidator(string $regex, string $errorMessage = 'Invalid value', int $errorCode = 0) : ValidatorInterface;

    public function createStringLengthValidator(int $min, int $max, string $errorMessage = 'Invalid value', int $errorCode = 0) : ValidatorInterface;
}
