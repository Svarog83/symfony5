<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController {
	/**
	 * @Route("/comments/{id}/vote/{direction<up|down>}", methods="POST", name="app_comment_vote")
	 * @param                 $id
	 * @param                 $direction
	 * @param LoggerInterface $logger
	 * @return Response
	 * @throws \Exception
	 */
	public function commentVote($id, $direction, LoggerInterface $logger): Response {
		//todo: use id to query database
		if ($direction === 'up') {
			$logger->info('Voting up for id = ' . $id);
			$currentVoteCount = random_int(7, 100);
		} else {
			$logger->info('Voting down');
			$currentVoteCount = random_int(0, 5);
		}

		return $this->json([ 'votes' => $currentVoteCount ]);
	}
}