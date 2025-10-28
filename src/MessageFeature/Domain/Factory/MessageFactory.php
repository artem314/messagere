<?php

namespace App\MessageFeature\Domain\Factory;

use App\MessageFeature\Domain\Entity\Message;
use App\MessageFeature\Domain\ValueObject\TextValue;
use App\MessageFeature\Domain\ValueObject\UuidValue;

class MessageFactory
{
    public function create(string $text, string $from, string $chat): Message
    {
        $message = new Message();

        $message->setId(new UuidValue(null));

        $message->setText(new TextValue($text));

        $message->setChat(new UuidValue($chat));

        $message->setFrom(new UuidValue($from));

        return $message;
    }
}
