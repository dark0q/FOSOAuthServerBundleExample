<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [

        ]);
    }

    /**
     * @Route("/generate-token", name="generate_token")
     */
    public function generateTokenAction()
    {
        $clientManager = $this->container->get('fos_oauth_server.client_manager.default');
        $client = $clientManager->createClient();
        $client->setRedirectUris(['http://client.inteda.pl']);
        $client->setAllowedGrantTypes(['token', 'authorization_code']);
        $clientManager->updateClient($client);

        return new JsonResponse();
    }
}
