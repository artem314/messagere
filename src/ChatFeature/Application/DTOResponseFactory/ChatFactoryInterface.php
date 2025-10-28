<?php

namespace App\ChatFeature\Application\DTOResponseFactory;

use App\ChatFeatureApi\DTOResponse\ChatDTOInterface;

interface ChatFactoryInterface
{
    public function create(): ChatDTOInterface;
}
