<?php

namespace App\ChatFeature\Application\DTOResponseFactory;

use App\ChatFeature\Application\DTOResponse\Chat;
use App\ChatFeatureApi\DTOResponse\ChatDTOInterface;

class ChatFactory implements ChatFactoryInterface
{
    public function create(): ChatDTOInterface
    {
        return new Chat();
    }
}
