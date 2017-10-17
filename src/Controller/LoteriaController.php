<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class LoteriaController
 * @package App\Controller
 * @Route("/loteria")
 */
class LoteriaController extends Controller
{
    /**
     * @Route("/teste", name="teste")
     */
    public function testeAction()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
    }
}