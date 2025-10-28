<?php

namespace App\MessageFeature\Application\DTORequestFactory;

use App\MessageFeature\Application\DTORequest\MessageCreate;
use App\MessageFeatureApi\DTORequest\MessageCreateDTOInterface;
use App\MessageFeatureApi\DTORequestFactory\MessageCreateDTOFactoryInterface;

class MessageCreateFactory implements MessageCreateDTOFactoryInterface
{
    public function create(): MessageCreateDTOInterface
    {
        return new MessageCreate();
    }
}
