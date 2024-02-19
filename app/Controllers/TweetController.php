<?php
require_once __DIR__ . '/../Models/Tweet.php';

class TweetController {
    private $tweetModel;

    public function __construct() {
        $this->tweetModel = new Tweet();
    }

    public function tweetList() {
        $tweet = $this->tweetModel;
        require_once __DIR__ . '/../Viewvs/tweet/index.php';
    }
}