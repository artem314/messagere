<?php

namespace App\MessageFeature\Application\DTOResponseFactory;

use App\MessageFeature\Application\DTOResponse\Message;
use App\MessageFeatureApi\DTOResponse\MessageDTOInterface;

class MessageFactory implements MessageFactoryInterface
{
    public function create(): MessageDTOInterface
    {
        return new Message();
    }
}
