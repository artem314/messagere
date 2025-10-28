<?php

namespace App\ChatFeature\Domain\Entity;

use App\ChatFeature\Domain\ValueObject\StringValue;
use App\ChatFeature\Domain\ValueObject\TimeStampValue;
use App\ChatFeature\Domain\ValueObject\TitleValue;
use App\ChatFeature\Domain\ValueObject\UuidValue;

class Chat
{
    private UuidValue $id;
    private TitleValue $title;
    private StringValue $description;
    private TimeStampValue $created;
    private TimeStampValue $updated;

    public function __construct(protected ChatSpecificationInterface $chatSpecification)
    {
    }

    public function getId(): UuidValue
    {
        return $this->id;
    }

    public function setId(UuidValue $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): TitleValue
    {
        return $this->title;
    }

    public function setTitle(TitleValue $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): StringValue
    {
        return $this->description;
    }

    public function setDescription(StringValue $description): void
    {
        $this->description = $description;
    }

    public function getCreated(): TimeStampValue
    {
        return $this->created;
    }

    public function setCreated(TimeStampValue $created): void
    {
        $this->created = $created;
    }

    public function getUpdated(): TimeStampValue
    {
        return $this->updated;
    }

    public function setUpdated(TimeStampValue $updated): void
    {
        $this->updated = $updated;
    }

    public function getType(): string
    {
        return $this->chatSpecification->getType();
    }

    public function getMaximumMembers(): int
    {
        return $this->chatSpecification->getMaximumMembers();
    }
}
