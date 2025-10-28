<?php

namespace App\MessageFeature\Application\Model;

use App\MessageFeature\Domain\Entity\Message;

interface MessageManagerInterface
{
    public function create(Message $message): Message;
}
