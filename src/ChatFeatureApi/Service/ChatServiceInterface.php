<?php

namespace App\ChatFeatureApi\Service;

use App\ChatFeatureApi\DTORequest\ChatCreateDTOInterface;

interface ChatServiceInterface
{
    public function create(ChatCreateDTOInterface $dtoRequest);

    public function getById(string $id);
}
