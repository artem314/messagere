<?php

namespace App\ChatFeature\Application\DTORequest;

use App\ChatFeatureApi\DTORequest\ChatCreateDTOInterface;
use Symfony\Component\Validator\Constraints as Assert;

class ChatCreate implements ChatRequestDTOInterface, ChatCreateDTOInterface
{
    #[Assert\NotBlank]
    #[Assert\Type('string')]
    private ?string $title = null;

    #[Assert\Type('string')]
    private ?string $description = null;

    #[Assert\NotBlank]
    #[Assert\Type('string')]
    private ?string $type = null;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type = null): void
    {
        $this->type = $type;
    }
}
