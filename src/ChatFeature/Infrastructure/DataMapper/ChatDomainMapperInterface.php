<?php

namespace App\ChatFeature\Infrastructure\DataMapper;

use App\ChatFeature\Domain\Entity\Chat;
use App\DataManagerFeatureApi\DTOResponse\ChatDataResponseInterface;

interface ChatDomainMapperInterface
{
    public function map(ChatDataResponseInterface $dataResponse): Chat;
}
