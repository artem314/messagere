<?php

namespace App\MessageFeature\Application\DTOResponseMapper;

use App\MessageFeature\Application\DTOResponseFactory\MessageFactoryInterface;
use App\MessageFeature\Domain\Entity\Message;
use App\MessageFeatureApi\DTOResponse\MessageDTOInterface;

class MessageResponseMapper implements MessageResponseMapperInterface
{
    public function __construct(private readonly MessageFactoryInterface $messsageDtoResponseFactory)
    {
    }

    public function map(Message $message): MessageDTOInterface
    {
        $dtoResponse = $this->messsageDtoResponseFactory->create();

        $dtoResponse->setId($message->getId()->getValue());
        $dtoResponse->setChat($message->getChat()->getValue());
        $dtoResponse->setFrom($message->getFrom()->getValue());
        $dtoResponse->setText($message->getText()->getValue());

        return $dtoResponse;
    }
}
