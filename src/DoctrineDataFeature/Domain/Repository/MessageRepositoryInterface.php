<?php

namespace App\DoctrineDataFeature\Domain\Repository;

use App\DoctrineDataFeature\Domain\Entity\Message;

interface MessageRepositoryInterface
{
    public function save(Message $message): Message;

    public function getById(string $id): ?Message;
}
