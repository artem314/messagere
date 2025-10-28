<?php

namespace App\MessageFeature\Application\DTORequestValidator;

use App\MessageFeature\Application\DTORequest\MessageRequestDTOInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class MessageValidator implements MessageValidatorInterface
{
    public function __construct(private ValidatorInterface $validator)
    {
    }

    public function validate(MessageRequestDTOInterface $dto): array
    {
        $violations = [];
        $violationList = $this->validator->validate($dto);

        foreach ($violationList as $violation) {
            $violations[$violation->getPropertyPath()][] = $violation->getMessage();
        }

        return $violations;
    }
}
