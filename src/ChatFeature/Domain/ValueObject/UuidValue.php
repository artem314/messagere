<?php

declare(strict_types=1);

namespace App\ChatFeature\Domain\ValueObject;

/**
 * Class ContentValue
 * Warning: data value object must be immutable.
 */
class UuidValue implements ValueObjectInterface
{
    private ?string $id;

    public function __construct(?string $id = null)
    {
        $this->id = $id;
    }

    public function getValue(): ?string
    {
        return $this->id;
    }
}
