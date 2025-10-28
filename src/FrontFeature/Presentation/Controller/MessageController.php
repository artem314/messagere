<?php

namespace App\FrontFeature\Presentation\Controller;

use App\DoctrineDataFeature\Infrastructure\Repository\ChatRepository;
use App\MessageFeatureApi\DTORequestFactory\MessageCreateDTOFactoryInterface;
use App\MessageFeatureApi\Service\MessageServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/message')]
final class MessageController extends AbstractController
{
    #[Route('', name: 'message_index', methods: ['GET'])]
    public function index(Request $request, MessageServiceInterface $service, MessageCreateDTOFactoryInterface $factory, ChatRepository $repository): Response
    {
        $dto = $factory->create();
        $dto->setFrom('d66e635a-dffc-1f07-9eb3-d7ad5bf5d620');
        $dto->setText('test');
        $dto->setChat('1f07dffc-d66e-635a-9eb3-d7ad5bf5d620');

        $service->create($dto);
    }
}
