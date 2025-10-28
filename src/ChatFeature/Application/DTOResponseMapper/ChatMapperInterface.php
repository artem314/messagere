<?php

namespace App\ChatFeature\Application\DTOResponseMapper;

use App\ChatFeature\Domain\Entity\Chat;
use App\ChatFeatureApi\DTOResponse\ChatDTOInterface;

interface ChatMapperInterface
{
    public function map(Chat $chat): ChatDTOInterface;
}
