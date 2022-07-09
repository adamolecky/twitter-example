<?php

declare(strict_types = 1);

namespace App\DDD\Twitter\Infrastructure;

use App\DDD\Twitter\Domain\SiteConnectorException;
use App\DDD\Twitter\Domain\SiteConnectorInterface;
use App\DDD\Twitter\Domain\TweetCollection;
use DG\Twitter\Twitter;

class TwitterConnector implements SiteConnectorInterface {

    private Twitter $client;

    public function __construct(
        private string $consumerKey,
        private string $consumerSecret,
        private string $accessToken,
        private string $accessTokenSecret,
        private int $countLimiter = 100
    )
    {
        $this->client = $this->getTwitterClient(
            $this->consumerKey,
            $this->consumerSecret,
            $this->accessToken,
            $this->accessTokenSecret
        );
    }

    /**
     * @param string $tag
     * @return TweetCollection
     * @throws SiteConnectorException
     */
    public function searchByTag(string $tag): TweetCollection
    {
        try {
            $result = $this->client->request('search/tweets', 'GET', ['q' => $tag, 'count' => $this->countLimiter]);
        } catch ( \DG\Twitter\Exception $e) {
            throw new SiteConnectorException($e->getMessage());
        }
        return new TweetCollection($result);
    }

    /**
     * @param $consumerKey
     * @param $consumerSecret
     * @param $accessToken
     * @param $accessTokenSecret
     * @return void
     * @throws \DG\Twitter\Exception
     */
    private function getTwitterClient($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret): Twitter
    {
        return new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
    }

}