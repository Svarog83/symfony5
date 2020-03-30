<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController {
	/**
	 * @Route("/")
	 */
	public function homepage() {
		return $this->render('question/homepage.html.twig');
	}

	/**
	 * @Route("/question/{slug}")
	 * @param $slug
	 * @return Response
	 */
	public function show($slug) {
		$answers = [ 'First  answer',
		             'Second answer',
		             'Третий ответ2' ];

		return $this->render('question/show.html.twig',
		                     [ 'question' => 'Got question2: ' . $slug,
		                       'answers'  => $answers ]);
	}

	/**
	 * @Route("/test")
	 */
	public function test() {
		return new Response('test route');
	}
}