<?php

namespace App\DoctrineDataFeature\Application\DTOResponseFactory;

use App\DataManagerFeatureApi\DTOResponse\ChatDataResponseInterface;

interface ChatResponseFactoryInterface
{
    public function create(): ChatDataResponseInterface;
}
