<?php

namespace App\Controller;

use App\Repository\TareaRepository;
use App\Repository\UsuarioProyectoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiTareaController extends AbstractController
{
    #[Route('/api/tasks', name: 'api_tasks', methods: ['GET'])]
    public function index(
        Request $request,
        TareaRepository $tareaRepository,
        UsuarioProyectoRepository $usuarioProyectoRepository
    ): JsonResponse {
        $userId = $request->query->get('user_id');
        if (!$userId) {
            return $this->json(['error' => 'Missing user_id'], 400);
        }

        $tareas = $this->getTareasData((int) $userId, $tareaRepository, $usuarioProyectoRepository);
        return $this->json($tareas);
    }

    #[Route('/tareas', name: 'vista_tareas', methods: ['GET'])]
    public function vista(
        Request $request,
        TareaRepository $tareaRepository,
        UsuarioProyectoRepository $usuarioProyectoRepository
    ): Response {
        $userId = $request->query->get('user_id');
        if (!$userId) {
            throw $this->createNotFoundException('Falta el parámetro user_id');
        }

        $tareas = $this->getTareasData((int) $userId, $tareaRepository, $usuarioProyectoRepository);
        return $this->render('tareas/listado.html.twig', [
            'tareas' => $tareas,
        ]);
    }

    private function getTareasData(int $userId, TareaRepository $tareaRepo, UsuarioProyectoRepository $upRepo): array
    {
        $tareas = $tareaRepo->findBy(['usuario' => $userId]);

        $resultado = [];

        foreach ($tareas as $tarea) {
            $usuarioProyecto = $upRepo->findOneBy([
                'usuario' => $tarea->getUsuario(),
                'proyecto' => $tarea->getProyecto(),
                'activo' => true,
            ]);

            $resultado[] = [
                'id' => $tarea->getId(),
                'descripcion' => $tarea->getDescripcion(),
                'estado' => $tarea->getEstado(),
                'duracion' => $tarea->getDuracion(),
                'activo' => $tarea->isActivo(),
                'fecha' => $tarea->getFecha()?->format('Y-m-d'),
                'createdAt' => $tarea->getCreatedAt()?->format('Y-m-d H:i:s'),
                'updatedAt' => $tarea->getUpdatedAt()?->format('Y-m-d H:i:s'),
                'proyecto' => [
                    'id' => $tarea->getProyecto()->getId(),
                    'nombre' => $tarea->getProyecto()->getNombre(),
                    'activo' => $tarea->getProyecto()->isActivo(),
                ],
                'tarifa' => $usuarioProyecto?->getTarifa(),
            ];
        }

        return $resultado;
    }
}
