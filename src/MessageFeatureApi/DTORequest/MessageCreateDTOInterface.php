<?php

namespace App\MessageFeatureApi\DTORequest;

interface MessageCreateDTOInterface
{
    public function setText(string $text);

    public function getText(): ?string;

    public function setChat(?string $chat);

    public function getChat(): ?string;

    public function setFrom(?string $from);

    public function getFrom(): ?string;
}
