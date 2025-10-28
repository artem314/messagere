<?php

namespace App\DoctrineDataFeature\Application\DTOResponseFactory;

use App\DataManagerFeatureApi\DTOResponse\MessageDataResponseInterface;

interface MessageResponseFactoryInterface
{
    public function create(): MessageDataResponseInterface;
}
