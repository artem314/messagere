<?php

namespace App\ChatFeatureApi\DTORequestFactory;

use App\ChatFeatureApi\DTORequest\ChatUpdateDTOInterface;

interface ChatUpdateDTOFactoryInterface
{
    public function create(): ChatUpdateDTOInterface;
}
