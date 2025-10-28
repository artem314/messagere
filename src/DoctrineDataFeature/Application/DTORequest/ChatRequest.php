<?php

namespace App\DoctrineDataFeature\Application\DTORequest;

use App\DataManagerFeatureApi\DTORequest\ChatDataRequestInterface;

class ChatRequest implements ChatDataRequestInterface, DataRequestInterface
{
    private ?string $id = null;

    private ?string $type = null;

    private ?string $title = null;

    private ?string $description = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id = null): void
    {
        $this->id = $id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type = null): void
    {
        $this->type = $type;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title = null): void
    {
        $this->title = $title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description = null): void
    {
        $this->description = $description;
    }
}
