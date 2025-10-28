<?php

declare(strict_types=1);

namespace App\DataManagerFeatureApi\DTORequestFactory;

use App\DataManagerFeatureApi\DTORequest\MessageDataRequestInterface;

interface MessageDataRequestFactoryInterface
{
    public function create(): MessageDataRequestInterface;
}
