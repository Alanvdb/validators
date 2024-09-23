<?php declare(strict_types=1);

namespace AlanVdb\Validator\Exception;

use AlanVdb\Validator\Definition\ValidatorExceptionInterface;
use InvalidArgumentException;

class InvalidValidatorParamProvided 
    extends InvalidArgumentException
    implements ValidatorExceptionInterface
{}
