<?php

namespace App\ChatFeature\Domain\Entity;

use App\ChatFeature\Domain\ValueObject\TimeStampValue;
use App\ChatFeature\Domain\ValueObject\UuidValue;

class ChatMember
{
    private UuidValue $id;
    private UuidValue $chat;
    private UuidValue $member;
    private TimeStampValue $joined;

    public function getId(): UuidValue
    {
        return $this->id;
    }

    public function setId(UuidValue $id): void
    {
        $this->id = $id;
    }

    public function getChat(): UuidValue
    {
        return $this->chat;
    }

    public function setChat(UuidValue $chat): void
    {
        $this->chat = $chat;
    }

    public function getMember(): UuidValue
    {
        return $this->member;
    }

    public function setMember(UuidValue $member): void
    {
        $this->member = $member;
    }

    public function getJoined(): TimeStampValue
    {
        return $this->joined;
    }

    public function setJoined(TimeStampValue $joined): void
    {
        $this->joined = $joined;
    }
}
