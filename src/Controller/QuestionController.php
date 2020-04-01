<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController {
	/**
	 * @Route("/", name="app_homepage")
	 * @param Environment $twig
	 * @return Response
	 * @throws \Twig\Error\LoaderError
	 * @throws \Twig\Error\RuntimeError
	 * @throws \Twig\Error\SyntaxError
	 */
	public function homepage(Environment $twig): Response {
		$html = $twig->render('question/homepage.html.twig');

		return new Response($html);
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