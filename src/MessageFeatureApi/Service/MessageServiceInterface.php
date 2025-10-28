<?php

namespace App\MessageFeatureApi\Service;

use App\MessageFeatureApi\DTORequest\MessageCreateDTOInterface;
use App\MessageFeatureApi\DTOResponse\MessageDTOInterface;

interface MessageServiceInterface
{
    public function create(MessageCreateDTOInterface $messageCreateDTO): MessageDTOInterface;

    public function getById(string $id): ?MessageDTOInterface;
}
