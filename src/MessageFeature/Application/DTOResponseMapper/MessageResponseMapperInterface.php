<?php

namespace App\MessageFeature\Application\DTOResponseMapper;

use App\MessageFeature\Domain\Entity\Message;
use App\MessageFeatureApi\DTOResponse\MessageDTOInterface;

interface MessageResponseMapperInterface
{
    public function map(Message $message): MessageDTOInterface;
}
