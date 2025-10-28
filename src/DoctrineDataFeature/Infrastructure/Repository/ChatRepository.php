<?php

namespace App\DoctrineDataFeature\Infrastructure\Repository;

use App\DoctrineDataFeature\Domain\Entity\Chat;
use App\DoctrineDataFeature\Domain\Repository\ChatRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Uid\Uuid;

class ChatRepository extends ServiceEntityRepository implements ChatRepositoryInterface
{
    public function __construct(ManagerRegistry $registry, private EntityManagerInterface $em)
    {
        parent::__construct($registry, Chat::class);
    }

    public function save(Chat $chat): Chat
    {
        $this->em->persist($chat);
        $this->em->flush();

        return $chat;
    }

    public function getById(string $id): ?Chat
    {
        return $this->findOneBy(['id' => Uuid::fromString($id)]);
    }
}
