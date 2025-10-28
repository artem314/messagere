<?php

declare(strict_types=1);

namespace App\DataManagerFeatureApi\DTOResponse;

interface MessageDataResponseInterface
{
    public function getId(): ?string;

    public function setId(?string $id = null): void;

    public function getText(): ?string;

    public function setText(?string $text = null): void;

    public function getFrom(): ?string;

    public function setFrom(?string $from = null): void;

    public function getChat(): ?string;

    public function setChat(?string $chat = null): void;

    public function setCreated(?int $created = null): void;

    public function getCreated(): ?int;

    public function setUpdated(?int $updated = null): void;

    public function getUpdated(): ?int;
}
