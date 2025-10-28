<?php

namespace App\DoctrineDataFeature\Application\DataMapper;

use App\DataManagerFeatureApi\DTORequest\MessageDataRequestInterface;
use App\DoctrineDataFeature\Application\DTORequest\DataRequestInterface;
use App\DoctrineDataFeature\Application\DTOResponse\DataResponseInterface;
use App\DoctrineDataFeature\Application\DTOResponseFactory\MessageResponseFactoryInterface;
use App\DoctrineDataFeature\Domain\Entity\Chat;
use App\DoctrineDataFeature\Domain\Entity\Message;
use App\DoctrineDataFeature\Domain\Repository\ChatRepositoryInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MessageMapper implements DataMapperInterface
{
    public function __construct(
        private MessageResponseFactoryInterface $messageResponseFactory,
        private ChatRepositoryInterface $chatRepository,
    ) {
    }

    public function toEntity(DataRequestInterface $request): Message
    {
        if (!$request instanceof MessageDataRequestInterface) {
            throw new \InvalidArgumentException(\sprintf('You can only pass %s entity to this mapper.', DataRequestInterface::class));
        }

        $this->getChatEntity($request->getChat());

        $doctrineEntity = new Message();
        $doctrineEntity->setId($request->getId());
        $doctrineEntity->setText($request->getText());
        $doctrineEntity->setFrom($request->getFrom());
        $doctrineEntity->setChat($request->getChat());

        return $doctrineEntity;
    }

    public function toResponse(object $entity): DataResponseInterface
    {
        if (!$entity instanceof Message) {
            throw new \InvalidArgumentException(\sprintf('You can only pass %s entity to this mapper.', Message::class));
        }

        /** @var Message $entity */
        $response = $this->messageResponseFactory->create();
        $response->setId($entity->getId());
        $response->setText($entity->getText());
        $response->setFrom($entity->getFrom());
        $response->setChat($entity->getChat());
        $response->setCreated($entity->getCreated());
        $response->setUpdated($entity->getUpdated());

        return $response;
    }

    private function getChatEntity(string $chat): Chat
    {
        $chat = $this->chatRepository->getById($chat);

        if (null === $chat) {
            throw new NotFoundHttpException(\sprintf('Chat "%s" not found.', $chat));
        }

        return $chat;
    }
}
