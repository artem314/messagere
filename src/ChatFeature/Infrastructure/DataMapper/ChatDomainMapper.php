<?php

namespace App\ChatFeature\Infrastructure\DataMapper;

use App\ChatFeature\Domain\Entity\Chat;
use App\ChatFeature\Domain\Factory\ChatFactory;
use App\DataManagerFeatureApi\DTOResponse\ChatDataResponseInterface;

class ChatDomainMapper implements ChatDomainMapperInterface
{
    public function __construct(private ChatFactory $chatFactory)
    {
    }

    public function map(ChatDataResponseInterface $dataResponse): Chat
    {
        return $this->chatFactory->create($dataResponse->getType(), $dataResponse->getTitle(), $dataResponse->getDescription());
    }
}
