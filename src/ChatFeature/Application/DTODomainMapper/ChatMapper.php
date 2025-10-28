<?php

namespace App\ChatFeature\Application\DTODomainMapper;

use App\ChatFeature\Domain\Entity\Chat;
use App\ChatFeature\Domain\Factory\ChatFactory;
use App\ChatFeatureApi\DTORequest\ChatCreateDTOInterface;

class ChatMapper implements ChatMapperInterface
{
    public function __construct(private ChatFactory $chatFactory)
    {
    }

    public function mapCreateRequest(ChatCreateDTOInterface $dto): Chat
    {
        return $this->chatFactory->create($dto->getType(), $dto->getTitle(), $dto->getDescription());
    }
}
