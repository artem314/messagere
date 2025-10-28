<?php

namespace App\MessageFeature\Application\DTODomainMapper;

use App\MessageFeature\Domain\Entity\Message;
use App\MessageFeature\Domain\Factory\MessageFactory;
use App\MessageFeatureApi\DTORequest\MessageCreateDTOInterface;

class MessageMapper implements MessageMapperInterface
{
    public function __construct(private MessageFactory $messageFactory)
    {
    }

    public function mapCreateRequest(MessageCreateDTOInterface $messageCreateDTO): Message
    {
        return $this->messageFactory->create($messageCreateDTO->getText(), $messageCreateDTO->getFrom(), $messageCreateDTO->getChat());
    }
}
