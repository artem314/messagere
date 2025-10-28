<?php

namespace App\MessageFeature\Application\DTORequestValidator;

use App\MessageFeature\Application\DTORequest\MessageRequestDTOInterface;

interface MessageValidatorInterface
{
    public function validate(MessageRequestDTOInterface $dto): array;
}
