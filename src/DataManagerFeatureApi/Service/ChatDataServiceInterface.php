<?php

namespace App\DataManagerFeatureApi\Service;

use App\DataManagerFeatureApi\DTORequest\ChatDataRequestInterface;

interface ChatDataServiceInterface
{
    public function save(ChatDataRequestInterface $dtoRequest);

    public function getById(string $chatId);
}
