<?php

namespace App\MessageFeature\Application\DTOResponse;

use App\MessageFeatureApi\DTOResponse\MessageDTOInterface;

class Message implements MessageDTOInterface
{
    private ?string $id = null;

    private ?string $from = null;

    private ?string $chat = null;

    private ?string $text = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id = null): void
    {
        $this->id = $id;
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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text = null): void
    {
        $this->text = $text;
    }
}
