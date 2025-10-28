<?php

namespace App\ChatFeature\Application\DTODomainMapper;

use App\ChatFeature\Domain\Entity\Chat;
use App\ChatFeatureApi\DTORequest\ChatCreateDTOInterface;

interface ChatMapperInterface
{
    public function mapCreateRequest(ChatCreateDTOInterface $dto): Chat;
}
