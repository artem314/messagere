<?php

namespace App\DoctrineDataFeature\Application\DTORequestFactory;

use App\DataManagerFeatureApi\DTORequest\ChatDataRequestInterface;
use App\DataManagerFeatureApi\DTORequestFactory\ChatDataRequestFactoryInterface;
use App\DoctrineDataFeature\Application\DTORequest\ChatRequest;

class ChatRequestFactory implements ChatDataRequestFactoryInterface
{
    public function create(): ChatDataRequestInterface
    {
        return new ChatRequest();
    }
}
