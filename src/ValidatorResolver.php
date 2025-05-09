<?php declare(strict_types=1);

namespace AlanVdb\Validator;

use AlanVdb\Validator\Definition\ValidatorResolverInterface;
use AlanVdb\Validator\Definition\ValidatorInterface;

class ValidatorResolver implements ValidatorResolverInterface
{
    public function __construct(
        protected ValidatorInterface $validator
    ) {}

    public function __invoke(mixed $value): bool
    {
        return $this->validator->validate($value);
    }
}
