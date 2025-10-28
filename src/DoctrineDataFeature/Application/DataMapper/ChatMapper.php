<?php

namespace App\DoctrineDataFeature\Application\DataMapper;

use App\DataManagerFeatureApi\DTORequest\ChatDataRequestInterface;
use App\DoctrineDataFeature\Application\DTORequest\DataRequestInterface;
use App\DoctrineDataFeature\Application\DTOResponse\DataResponseInterface;
use App\DoctrineDataFeature\Application\DTOResponseFactory\ChatResponseFactoryInterface;
use App\DoctrineDataFeature\Domain\Entity\Chat;

class ChatMapper implements DataMapperInterface
{
    public function __construct(private ChatResponseFactoryInterface $chatResponseFactory)
    {
    }

    public function toEntity(DataRequestInterface $request): object
    {
        if (!$request instanceof ChatDataRequestInterface) {
            throw new \InvalidArgumentException(\sprintf('You can only pass %s entity to this mapper.', ChatDataRequestInterface::class));
        }

        $entity = new Chat();
        $entity->setId($request->getId());
        $entity->setType($request->getType());
        $entity->setTitle($request->getTitle());
        $entity->setDescription($request->getDescription());

        return $entity;
    }

    public function toResponse(object $entity): DataResponseInterface
    {
        if (!$entity instanceof Chat) {
            throw new \InvalidArgumentException(\sprintf('You can only pass %s entity to this mapper.', Chat::class));
        }

        /** @var Chat $entity */
        $response = $this->chatResponseFactory->create();
        $response->setId($entity->getId());
        $response->setType($entity->getType());
        $response->setTitle($entity->getTitle());
        $response->setDescription($entity->getDescription());

        return $response;
    }
}
