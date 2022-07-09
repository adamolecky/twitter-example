<?php

declare(strict_types = 1);

namespace App\DDD\Twitter\Domain;

interface SiteConnectorInterface {

    public function searchByTag(string $tag): TweetCollection;

}