<?php

namespace App\DoctrineDataFeature\Application\DTORequest;

use App\DataManagerFeatureApi\DTORequest\MessageDataRequestInterface;

class MessageRequest implements MessageDataRequestInterface, DataRequestInterface
{
    private ?string $id = null;

    private ?string $text;

    private ?string $from = null;

    private ?string $chat = null;

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
}
