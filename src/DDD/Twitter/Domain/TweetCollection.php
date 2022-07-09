<?php

namespace App\DDD\Twitter\Domain;

use Symfony\Component\Validator\Constraints\Collection;

class TweetCollection extends Collection
{
    public function __construct($options = null)
    {
        parent::__construct($options);
    }

}