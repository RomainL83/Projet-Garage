<?php

// src/Controller/ContactController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    
     /** @Route("/contact", name="contact")
     
   * public function index(Request $request): Response
    *{
     *   // Votre logique pour afficher le formulaire de contact
      *  return $this->render('contact/index.html.twig');
    *}
  */
    /**
     * @Route("/contact/send", name="contact_send", methods={"POST"})
     */
    public function sendMessage(Request $request): Response
    {
        // Votre logique pour traiter le formulaire et envoyer le message

        // Exemple de récupération de données du formulaire
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $message = $request->request->get('message');

        // Votre logique pour traiter les données du formulaire et envoyer le message

        // Rediriger ou afficher une réponse après envoi du message
        return $this->redirectToRoute('contact_success');
    }

    /**
     * @Route("/contact/success", name="contact_success")
     */
    public function success(): Response
    {
        // Votre logique pour afficher un message de succès après l'envoi du message
        return $this->render('contact/success.html.twig');
    }
}
