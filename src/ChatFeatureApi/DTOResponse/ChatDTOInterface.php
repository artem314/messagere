<?php

namespace App\ChatFeatureApi\DTOResponse;

interface ChatDTOInterface
{
    public function getId(): ?string;

    public function setId(?string $id = null);

    public function setType(?string $type = null);

    public function getType(): ?string;

    public function getTitle();

    public function setTitle(?string $title = null);

    public function getDescription();

    public function setDescription(?string $description = null);

    public function getCreated(): ?int;

    public function setCreated(?int $created = null): void;

    public function getUpdated(): ?int;

    public function setUpdated(?int $updated = null): void;
}
