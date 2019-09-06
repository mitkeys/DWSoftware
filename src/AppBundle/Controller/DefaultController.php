<?php

namespace AppBundle\Controller;

use AppBundle\Form\CandidateTesterPopo;
use AppBundle\Form\CandidateTesterType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        //This seems like a good place to start
        $testPopo = new CandidateTesterPopo($this->get('doctrine.orm.entity_manager'));
        $form = $this->createForm(CandidateTesterType::class, $testPopo);

        $form->handleRequest($request);
        $result = null;
        if ($form->isValid()) {
            $result = $this->get('candidate_tester')->createResultFromCandidate($testPopo);
        }

        return $this->render('default/index.html.twig', [
            'form' => $form->createView(),
            'result' => $result,
        ]);
    }
}
