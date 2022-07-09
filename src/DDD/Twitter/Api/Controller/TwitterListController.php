<?php

namespace App\DDD\Twitter\Api\Controller;

use App\DDD\Twitter\Domain\SiteConnectorException;
use App\DDD\Twitter\Domain\SiteConnectorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TwitterListController extends AbstractController
{
    public function __construct(
        private SiteConnectorInterface $siteConnector
    ) {}

    /**
     * @Route("/twitter/list/{tag}", name="list_tweets")
     *
     * @param string $tag
     * @return JsonResponse
     */
    public function execute(string $tag): JsonResponse
    {

        try {
            $tweetCollection = $this->siteConnector->searchByTag($tag);
        } catch (SiteConnectorException $exception) {
            //of course in production app we would use some way of logging, e.g. Sentry.
            return new JsonResponse(["error" => $exception->getMessage()]);
        }
        return new JsonResponse($tweetCollection);
    }
}
