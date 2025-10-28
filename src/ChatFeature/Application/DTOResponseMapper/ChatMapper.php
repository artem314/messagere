<?php

namespace App\ChatFeature\Application\DTOResponseMapper;

use App\ChatFeature\Application\DTOResponseFactory\ChatFactoryInterface;
use App\ChatFeature\Domain\Entity\Chat;
use App\ChatFeatureApi\DTOResponse\ChatDTOInterface;

class ChatMapper implements ChatMapperInterface
{
    public function __construct(private ChatFactoryInterface $chatFactory)
    {
    }

    public function map(Chat $chat): ChatDTOInterface
    {
        $dtoResponse = $this->chatFactory->create();

        $dtoResponse->setType($chat->getType());
        $dtoResponse->setTitle($chat->getTitle()->getValue());
        $dtoResponse->setDescription($chat->getDescription()->getValue());

        return $dtoResponse;
    }
}
