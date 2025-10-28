<?php

namespace App\MessageFeature\Application\DTORequest;

use App\MessageFeatureApi\DTORequest\MessageCreateDTOInterface;
use Symfony\Component\Validator\Constraints as Assert;

class MessageCreate implements MessageCreateDTOInterface, MessageRequestDTOInterface
{
    #[Assert\Type('string')]
    private ?string $id = null;

    #[Assert\NotBlank]
    #[Assert\Type('string')]
    private ?string $text = null;

    #[Assert\NotBlank]
    #[Assert\Type('string')]
    private ?string $from = null;

    #[Assert\NotBlank]
    #[Assert\Type('string')]
    private ?string $chat = null;

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    public function getFrom(): ?string
    {
        return $this->from;
    }

    public function setFrom(?string $from): void
    {
        $this->from = $from;
    }

    public function getChat(): ?string
    {
        return $this->chat;
    }

    public function setChat(?string $chat): void
    {
        $this->chat = $chat;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }
}
