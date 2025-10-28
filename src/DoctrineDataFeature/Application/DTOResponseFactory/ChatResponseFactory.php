<?php

namespace App\DoctrineDataFeature\Application\DTOResponseFactory;

use App\DataManagerFeatureApi\DTOResponse\ChatDataResponseInterface;
use App\DoctrineDataFeature\Application\DTOResponse\ChatResponse;

class ChatResponseFactory implements ChatResponseFactoryInterface
{
    public function create(): ChatDataResponseInterface
    {
        return new ChatResponse();
    }
}
