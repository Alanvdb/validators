<?php declare(strict_types=1);

namespace AlanVdb\Validator\Definition;

interface ValidatorResolverInterface
{
    public function __invoke(mixed $value): bool;

    public function getErrorMessage(): string;
    
    public function getErrorCode(): int;
}
