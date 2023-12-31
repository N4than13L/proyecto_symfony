<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

use App\Form\TaskType;
use DateTime;
use Symfony\Component\Security\Core\User\UserInterface;

class TaskController extends AbstractController
{
    public function index(): Response
    {
        // prueba de entidades y relaciones.
        $em = $this->getDoctrine()->getManager();
        $task_repo = $this->getDoctrine()->getRepository(Task::class);

        $tasks = $task_repo->findBy([], ['id' => 'desc']);

        // $user_repo = $this->getDoctrine()->getRepository(User::class);

        // foreach ($users as $user) {
        //     echo "<h1>{$user->getName()} {$user->getSurname()}</h1>";

        //     foreach ($user->getTasks() as $task) {
        //         echo $task->getTitle() . "<br/>";
        //     }
        // }

        return $this->render('task/index.html.twig', [
            'tasks' => $tasks,
        ]);
    }

    public function detail(Task $task)
    {
        if (!$task) {
            return $this->redirectToRoute('tasks');
        }

        return $this->render('task/detail.html.twig', [
            'task' => $task
        ]);
    }

    public function creation(Request $request, UserInterface $user)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task->setCreatedAt(new DateTime('now'));
            $task->setUser($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirect($this->generateUrl('task_detail', ['id' => $task->getId()]));
        }

        return $this->render('task/creation.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function myTasks(UserInterface $user)
    {
        $tasks = $user->getTasks();

        return $this->render('task/my-tasks.html.twig', [
            'tasks' => $tasks
        ]);
    }

    public function edit(Request $request, Task $task, UserInterface $user)
    {
        if (!$user || $user->getId() != $task->getUser()->getId()) {
            return $this->redirectToRoute('tasks');
        }

        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $task->setCreatedAt(new DateTime('now'));
            // $task->setUser($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirect($this->generateUrl('task_detail', ['id' => $task->getId()]));
        }

        return $this->render('task/creation.html.twig', [
            'edit' => true,
            'form' => $form->createView()
        ]);
    }

    public function delete(UserInterface $user, Task $task)
    {

        if (!$user || $user->getId() != $task->getUser()->getId()) {
            return $this->redirectToRoute('tasks');
        }

        if (!$task) {
            return $this->redirectToRoute('tasks');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($task);
        $em->flush();

        return $this->redirectToRoute('tasks');
    }
}
