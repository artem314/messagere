<?php

namespace App\MessageFeature\Application\DTODomainMapper;

use App\MessageFeature\Domain\Entity\Message;
use App\MessageFeatureApi\DTORequest\MessageCreateDTOInterface;

interface MessageMapperInterface
{
    public function mapCreateRequest(MessageCreateDTOInterface $messageCreateDTO): Message;
}
