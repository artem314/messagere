<?php

namespace App\DoctrineDataFeature\Application\DTOResponse;

use App\DataManagerFeatureApi\DTOResponse\MessageDataResponseInterface;

class MessageResponse implements DataResponseInterface, MessageDataResponseInterface
{
    private ?string $id = null;

    private ?string $text;

    private ?string $from = null;

    private ?string $chat = null;

    private ?int $created = null;

    private ?int $updated = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id = null): void
    {
        $this->id = $id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text = null): void
    {
        $this->text = $text;
    }

    public function getFrom(): ?string
    {
        return $this->from;
    }

    public function setFrom(?string $from = null): void
    {
        $this->from = $from;
    }

    public function getChat(): ?string
    {
        return $this->chat;
    }

    public function setChat(?string $chat = null): void
    {
        $this->chat = $chat;
    }

    public function getCreated(): ?int
    {
        return $this->created;
    }

    public function setCreated(?int $created = null): void
    {
        $this->created = $created;
    }

    public function getUpdated(): ?int
    {
        return $this->updated;
    }

    public function setUpdated(?int $updated = null): void
    {
        $this->updated = $updated;
    }
}
