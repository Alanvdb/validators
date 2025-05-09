<?php declare(strict_types=1);

namespace AlanVdb\Validator;

use AlanVdb\Validator\Definition\ValidatorInterface;
use AlanVdb\Validator\Exception\InvalidValidatorParamProvided;

class RegexPatternValidator extends AbstractValidator implements ValidatorInterface
{
    protected string $regex;

    public function __construct(string $regex, string $errorMessage = 'must be a valid email address', int $errorCode = 0)
    {
        parent::__construct($errorMessage, $errorCode);
        if (empty($regex)) {
            throw new InvalidValidatorParamProvided('Regex cannot be empty.');
        }
        $this->regex = $regex;
    }

    public function validate(mixed $value) : bool
    {
        return is_string($value) && (bool) preg_match($this->regex, $value);
    }
}
