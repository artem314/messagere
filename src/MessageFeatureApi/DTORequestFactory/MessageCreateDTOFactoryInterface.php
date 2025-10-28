<?php

namespace App\MessageFeatureApi\DTORequestFactory;

use App\MessageFeatureApi\DTORequest\MessageCreateDTOInterface;

interface MessageCreateDTOFactoryInterface
{
    public function create(): MessageCreateDTOInterface;
}
