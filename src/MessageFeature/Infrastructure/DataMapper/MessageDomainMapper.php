<?php

namespace App\MessageFeature\Infrastructure\DataMapper;

use App\DataManagerFeatureApi\DTOResponse\MessageDataResponseInterface;
use App\MessageFeature\Domain\Entity\Message;
use App\MessageFeature\Domain\Factory\MessageFactory;

class MessageDomainMapper implements MessageDomainMapperInterface
{
    public function __construct(private MessageFactory $messageFactory)
    {
    }

    public function map(MessageDataResponseInterface $dto): Message
    {
        return $this->messageFactory->create($dto->getText(), $dto->getFrom(), $dto->getChat());
    }
}
