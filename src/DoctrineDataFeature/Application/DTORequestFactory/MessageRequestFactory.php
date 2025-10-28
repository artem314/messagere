<?php

namespace App\DoctrineDataFeature\Application\DTORequestFactory;

use App\DataManagerFeatureApi\DTORequest\MessageDataRequestInterface;
use App\DataManagerFeatureApi\DTORequestFactory\MessageDataRequestFactoryInterface;
use App\DoctrineDataFeature\Application\DTORequest\MessageRequest;

class MessageRequestFactory implements MessageDataRequestFactoryInterface
{
    public function create(): MessageDataRequestInterface
    {
        return new MessageRequest();
    }
}
