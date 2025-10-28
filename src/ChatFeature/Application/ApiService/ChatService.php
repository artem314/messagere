<?php

namespace App\ChatFeature\Application\ApiService;

use App\ChatFeature\Application\DTODomainMapper\ChatMapperInterface as ChatDomainMapper;
use App\ChatFeature\Application\DTORequest\ChatRequestDTOInterface;
use App\ChatFeature\Application\DTORequestValidator\ChatValidatorInterface;
use App\ChatFeature\Application\DTOResponseMapper\ChatMapperInterface as ChatResponseMapper;
use App\ChatFeature\Application\Model\ChatManagerInterface;
use App\ChatFeatureApi\DTORequest\ChatCreateDTOInterface;
use App\ChatFeatureApi\DTOResponse\ChatDTOInterface;
use App\ChatFeatureApi\Service\ChatServiceInterface;

class ChatService implements ChatServiceInterface
{
    public function __construct(
        private ChatManagerInterface $chatManager,
        private ChatValidatorInterface $chatValidator,
        private ChatResponseMapper $responseMapper,
        private ChatDomainMapper $domainMapper,
    ) {
    }

    public function create(ChatCreateDTOInterface $dtoRequest): ChatDTOInterface
    {
        $this->validateRequest($dtoRequest);

        $domainEntity = $this->domainMapper->mapCreateRequest($dtoRequest);
        $createdEntity = $this->chatManager->create($domainEntity);

        return $this->responseMapper->map($createdEntity);
    }

    protected function validateRequest(ChatRequestDTOInterface $requestDTO): void
    {
        $errors = $this->chatValidator->validate($requestDTO);
        $message = '';

        foreach ($errors as $property => $errorMsgs) {
            $message .= "The $property is not valid. Message: ".implode(',', $errorMsgs)." \n";
        }

        if ($message) {
            throw new \Exception($message);
        }
    }

    public function getById(string $id)
    {
        // TODO: Implement getById() method.
    }
}
