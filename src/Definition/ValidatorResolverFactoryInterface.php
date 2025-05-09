<?php declare(strict_types=1);

namespace AlanVdb\Validator\Definition;

interface ValidatorResolverFactoryInterface
{
    public function create(ValidatorInterface $validator): ValidatorResolverInterface;
}