<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController {
	/**
	 * @Route("/", name="app_homepage")
	 */
	public function homepage(): Response {
		return $this->render('question/homepage.html.twig');
	}

	/**
	 * @Route("/question/{slug}", name="app_question_show")
	 * @param $slug
	 * @return Response
	 */
	public function show($slug): Response {
		$answers = [ 'First  answer',
		             'Second answer',
		             'Третий ответ2' ];

		return $this->render('question/show.html.twig',
		                     [ 'question' => 'Got question: ' . $slug,
		                       'answers'  => $answers ]);
	}

	/**
	 * @Route("/test")
	 */
	public function test(): Response {
		return new Response('test route');
	}
}