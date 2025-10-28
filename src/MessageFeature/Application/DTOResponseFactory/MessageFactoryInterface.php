<?php

namespace App\MessageFeature\Application\DTOResponseFactory;

use App\MessageFeatureApi\DTOResponse\MessageDTOInterface;

interface MessageFactoryInterface
{
    public function create(): MessageDTOInterface;
}
