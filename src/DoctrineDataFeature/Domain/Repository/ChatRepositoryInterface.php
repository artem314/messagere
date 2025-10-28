<?php

namespace App\DoctrineDataFeature\Domain\Repository;

use App\DoctrineDataFeature\Domain\Entity\Chat;

interface ChatRepositoryInterface
{
    public function save(Chat $chat): Chat;

    public function getById(string $id): ?Chat;
}
