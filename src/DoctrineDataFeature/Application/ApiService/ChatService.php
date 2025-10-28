<?php

namespace App\DoctrineDataFeature\Application\ApiService;

use App\DataManagerFeatureApi\DTORequest\ChatDataRequestInterface;
use App\DataManagerFeatureApi\DTOResponse\ChatDataResponseInterface;
use App\DataManagerFeatureApi\Service\ChatDataServiceInterface;
use App\DoctrineDataFeature\Application\DataMapper\DataMapperInterface;
use App\DoctrineDataFeature\Domain\Entity\Chat;
use App\DoctrineDataFeature\Domain\Repository\ChatRepositoryInterface;

class ChatService implements ChatDataServiceInterface
{
    public function __construct(
        private DataMapperInterface $dataMapper,
        private ChatRepositoryInterface $chatRepository,
    ) {
    }

    public function save(ChatDataRequestInterface $dtoRequest): ChatDataResponseInterface
    {
        $entity = $this->dataMapper->toEntity($dtoRequest);
        /* @var $entity Chat */
        $this->chatRepository->save($entity);

        return $this->dataMapper->toResponse($entity);
    }

    public function getById(string $chatId): ?ChatDataResponseInterface
    {
        $entity = $this->chatRepository->getById($chatId);

        if ($entity) {
            return $this->dataMapper->toResponse($entity);
        }

        return null;
    }
}
