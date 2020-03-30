<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController {
	/**
	 * @Route("/comments/{id}/vote/{direction<up|down>}", methods="POST", name="app_comment_vote")
	 * @param $id
	 * @param $direction
	 * @return Response
	 * @throws \Exception
	 */
	public function commentVote($id, $direction): Response {
		//todo: use id to query database
		if ($direction === 'up') {
			$currentVoteCount = random_int(7, 100);
		} else {
			$currentVoteCount = random_int(0, 5);
		}

		return $this->json([ 'votes' => $currentVoteCount ]);
	}
}