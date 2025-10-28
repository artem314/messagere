<?php

namespace App\MessageFeature\Domain\Repository;

use App\MessageFeature\Domain\Entity\Message;

interface MessageRepositoryInterface
{
    public function save(Message $message): Message;
}
