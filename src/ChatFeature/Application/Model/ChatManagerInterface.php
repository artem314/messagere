<?php

namespace App\ChatFeature\Application\Model;

use App\ChatFeature\Domain\Entity\Chat;

interface ChatManagerInterface
{
    public function getById(string $id): ?Chat;

    public function create(Chat $chat): Chat;
}
