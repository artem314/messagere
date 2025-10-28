<?php

namespace App\ChatFeature\Application\DTORequestFactory;

use App\ChatFeature\Application\DTORequest\ChatCreate;
use App\ChatFeatureApi\DTORequest\ChatCreateDTOInterface;
use App\ChatFeatureApi\DTORequestFactory\ChatCreateDTOFactoryInterface;

class ChatCreateFactory implements ChatCreateDTOFactoryInterface
{
    public function create(): ChatCreateDTOInterface
    {
        return new ChatCreate();
    }
}
