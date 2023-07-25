<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

// cargar lo necesario
use App\Entity\User;
use App\Form\RegisterType;
use DateTime;
// clase para cifrar la contrasena.
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="app_user")
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        // Crear formulario
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        // rellenar objeto con los datos del formulario
        $form->handleRequest($request);

        // comprobar si se envio.
        if ($form->isSubmitted() && $form->isValid()) {
            // modificar propiedad a la hora de enviar.
            $dateNow = new DateTime();
            $dateNow->format('d-m-y H:i:s');
            $user->setRole('ROLE_USER');

            $user->setCreatedAt($dateNow);

            // cifrar la contrasena
            $encoded = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($encoded);

            // guardar usuario.
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('tasks');
        }


        return $this->render('user/register.html.twig', [
            // devolverlos para poder imprimirlos en la vista.
            'form' => $form->createView()
        ]);
    }
}
