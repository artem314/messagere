<?php

namespace App\DataManagerFeatureApi\DTORequest;

interface ChatDataRequestInterface
{
    public function getId(): ?string;

    public function setId(?string $id = null): void;

    public function setType(?string $type = null): void;

    public function getType(): ?string;

    public function getTitle(): ?string;

    public function setTitle(?string $title = null): void;

    public function getDescription(): ?string;

    public function setDescription(?string $description = null): void;
}
