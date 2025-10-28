<?php

namespace App\DoctrineDataFeature\Infrastructure\Repository;

use App\DoctrineDataFeature\Domain\Entity\Message;
use App\DoctrineDataFeature\Domain\Repository\MessageRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class MessageRepository extends ServiceEntityRepository implements MessageRepositoryInterface
{
    public function __construct(ManagerRegistry $registry, private EntityManagerInterface $em)
    {
        parent::__construct($registry, Message::class);
    }

    public function save(Message $message): Message
    {
        $this->em->persist($message);
        $this->em->flush();

        return $message;
    }

    public function getById(string $id): ?Message
    {
        return $this->findOneBy(['id' => $id]);
    }
}
