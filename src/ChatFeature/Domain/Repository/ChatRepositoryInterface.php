<?php

namespace App\ChatFeature\Domain\Repository;

use App\ChatFeature\Domain\Entity\Chat;

interface ChatRepositoryInterface
{
    public function save(Chat $chat): Chat;

    public function getById(string $id): ?Chat;
}
