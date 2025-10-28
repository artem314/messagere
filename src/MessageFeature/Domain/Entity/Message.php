<?php

namespace App\MessageFeature\Domain\Entity;

use App\MessageFeature\Domain\ValueObject\TextValue;
use App\MessageFeature\Domain\ValueObject\TimeStampValue;
use App\MessageFeature\Domain\ValueObject\UuidValue;

final class Message
{
    private UuidValue $id;
    private UuidValue $chat;
    private UuidValue $from;
    private TextValue $text;
    private TimeStampValue $created;
    private TimeStampValue $updated;

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

    public function getFrom(): UuidValue
    {
        return $this->from;
    }

    public function setFrom(UuidValue $from): void
    {
        $this->from = $from;
    }

    public function getText(): TextValue
    {
        return $this->text;
    }

    public function setText(TextValue $text): void
    {
        $this->text = $text;
    }

    public function getCreated(): TimeStampValue
    {
        return $this->created;
    }

    public function setCreated(TimeStampValue $created): void
    {
        $this->created = $created;
    }

    public function getUpdated(): TimeStampValue
    {
        return $this->updated;
    }

    public function setUpdated(TimeStampValue $updated): void
    {
        $this->updated = $updated;
    }
}
