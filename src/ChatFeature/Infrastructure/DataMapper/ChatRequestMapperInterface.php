<?php

namespace App\ChatFeature\Infrastructure\DataMapper;

use App\ChatFeature\Domain\Entity\Chat;
use App\DataManagerFeatureApi\DTORequest\ChatDataRequestInterface;

interface ChatRequestMapperInterface
{
    public function map(Chat $domainEntity): ChatDataRequestInterface;
}
