<?php

namespace App\ChatFeature\Domain\ValueObject;

use App\ChatFeature\Domain\Entity\ChatType;

class TypeValue implements ValueObjectInterface
{
    private ChatType $type;

    public function __construct(string $type)
    {
        $this->type = ChatType::from($type);
    }

    public function getValue(): mixed
    {
        return $this->type->value;
    }
}
