<?php

namespace App\DataManagerFeatureApi\DTORequestFactory;

use App\DataManagerFeatureApi\DTORequest\ChatDataRequestInterface;

interface ChatDataRequestFactoryInterface
{
    public function create(): ChatDataRequestInterface;
}
