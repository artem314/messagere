<?php

namespace App\MessageFeature\Infrastructure\DataMapper;

use App\DataManagerFeatureApi\DTOResponse\MessageDataResponseInterface;
use App\MessageFeature\Domain\Entity\Message;

interface MessageDomainMapperInterface
{
    public function map(MessageDataResponseInterface $dto): Message;
}
