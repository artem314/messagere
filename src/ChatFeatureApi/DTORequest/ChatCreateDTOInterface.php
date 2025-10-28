<?php

namespace App\ChatFeatureApi\DTORequest;

interface ChatCreateDTOInterface
{
    public function setTitle(?string $title = null): void;

    public function getTitle(): ?string;

    public function setDescription(?string $description = null): void;

    public function getDescription(): ?string;

    public function setType(?string $type = null): void;

    public function getType(): ?string;
}
