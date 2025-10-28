<?php

namespace App\MessageFeature\Infrastructure\DataMapper;

use App\DataManagerFeatureApi\DTORequest\MessageDataRequestInterface;
use App\MessageFeature\Domain\Entity\Message;

interface MessageRequestMapperInterface
{
    public function map(Message $message): MessageDataRequestInterface;
}
