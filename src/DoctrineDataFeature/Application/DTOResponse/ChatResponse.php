<?php

namespace App\DoctrineDataFeature\Application\DTOResponse;

use App\DataManagerFeatureApi\DTOResponse\ChatDataResponseInterface;

class ChatResponse implements DataResponseInterface, ChatDataResponseInterface
{
    private ?string $id = null;

    private ?string $type = null;

    private ?string $title = null;

    private ?string $description = null;

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
