<?php declare(strict_types=1);

namespace AlanVdb\Validator\Factory;

use AlanVdb\Validator\Definition\ValidatorResolverFactoryInterface;
use AlanVdb\Validator\Definition\ValidatorResolverInterface;
use AlanVdb\Validator\Definition\ValidatorInterface;
use AlanVdb\Validator\ValidatorResolver;

class ValidatorResolverFactory implements ValidatorResolverFactoryInterface
{
    public function create(ValidatorInterface $validator) : ValidatorResolverInterface
    {
        return new ValidatorResolver($validator);
    }
}
