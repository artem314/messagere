<?php

namespace App\DoctrineDataFeature\Application\DTOResponseFactory;

use App\DataManagerFeatureApi\DTOResponse\MessageDataResponseInterface;
use App\DoctrineDataFeature\Application\DTOResponse\MessageResponse;

class MessageResponseFactory implements MessageResponseFactoryInterface
{
    public function create(): MessageDataResponseInterface
    {
        return new MessageResponse();
    }
}
