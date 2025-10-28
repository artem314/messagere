<?php

namespace App\ChatFeature\Domain\Factory;

use App\ChatFeature\Domain\Entity\Chat;
use App\ChatFeature\Domain\Entity\Group;
use App\ChatFeature\Domain\Entity\Personal;
use App\ChatFeature\Domain\ValueObject\StringValue;
use App\ChatFeature\Domain\ValueObject\TitleValue;
use App\ChatFeature\Domain\ValueObject\UuidValue;

class ChatFactory
{
    public function create(string $type, string $title, string $description): Chat
    {
        try {
            $chat = match ($type) {
                Personal::NAME => new Chat(new Personal()),
                Group::NAME => new Chat(new Group()),
            };
        } catch (\UnhandledMatchError $e) {
            throw new \UnhandledMatchError('wrong chat type');
        }

        $chat->setId(new UuidValue(null));
        $chat->setTitle(new TitleValue($title));
        $chat->setDescription(new StringValue($description));

        return $chat;
    }
}
