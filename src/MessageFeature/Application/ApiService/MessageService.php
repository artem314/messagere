<?php

namespace App\MessageFeature\Application\ApiService;

use App\MessageFeature\Application\DTODomainMapper\MessageMapperInterface;
use App\MessageFeature\Application\DTORequest\MessageRequestDTOInterface;
use App\MessageFeature\Application\DTORequestValidator\MessageValidatorInterface;
use App\MessageFeature\Application\DTOResponseMapper\MessageResponseMapperInterface;
use App\MessageFeature\Application\Model\MessageManagerInterface;
use App\MessageFeatureApi\DTORequest\MessageCreateDTOInterface;
use App\MessageFeatureApi\DTOResponse\MessageDTOInterface;
use App\MessageFeatureApi\Service\MessageServiceInterface;

class MessageService implements MessageServiceInterface
{
    public function __construct(
        private readonly MessageValidatorInterface $validator,
        private readonly MessageMapperInterface $messageMapper,
        private readonly MessageManagerInterface $messageManager,
        private readonly MessageResponseMapperInterface $responseMapper,
    ) {
    }

    /**
     * @throws \Exception
     */
    public function create(MessageCreateDTOInterface $messageCreateDTO): MessageDTOInterface
    {
        $this->validateRequest($messageCreateDTO);
        $domainEntity = $this->messageMapper->mapCreateRequest($messageCreateDTO);
        $entity = $this->messageManager->create($domainEntity);

        return $this->responseMapper->map($entity);
    }

    public function getById(string $id): MessageDTOInterface
    {
    }

    /**
     * @throws \Exception
     */
    private function validateRequest(MessageRequestDTOInterface $requestDTO): void
    {
        $errors = $this->validator->validate($requestDTO);
        $message = '';

        foreach ($errors as $property => $errorMsgs) {
            $message .= "The $property is not valid. Message: ".implode(',', $errorMsgs)." \n";
        }

        if ($message) {
            throw new \Exception($message);
        }
    }
}
