<?php

namespace App\ChatFeatureApi\DTORequestFactory;

use App\ChatFeatureApi\DTORequest\ChatCreateDTOInterface;

interface ChatCreateDTOFactoryInterface
{
    public function create(): ChatCreateDTOInterface;
}
