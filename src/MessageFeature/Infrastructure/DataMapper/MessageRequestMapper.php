<?php

namespace App\MessageFeature\Infrastructure\DataMapper;

use App\DataManagerFeatureApi\DTORequest\MessageDataRequestInterface;
use App\DataManagerFeatureApi\DTORequestFactory\MessageDataRequestFactoryInterface;
use App\MessageFeature\Domain\Entity\Message;

class MessageRequestMapper implements MessageRequestMapperInterface
{
    public function __construct(private MessageDataRequestFactoryInterface $messageDataRequestFactory)
    {
    }

    public function map(Message $message): MessageDataRequestInterface
    {
        $request = $this->messageDataRequestFactory->create();
        $request->setId();
        $request->setText($message->getText()->getValue());
        $request->setFrom($message->getFrom()->getValue());
        $request->setChat($message->getChat()->getValue());

        return $request;
    }
}
