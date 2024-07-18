<?php
require_once __DIR__ . '/../Models/Tweet.php';

class TweetController {
    private $tweetModel = [];

    public function __construct() {
        $this->tweetModel = new Tweet();
    }

    public function tweetList() {
        $tweets = $this->tweetModel->getAllTweets();
        $query = isset($_GET['query']) ? $_GET['query'] : null;
        if ($query) {
            $tweets = $this->tweetModel->searchTweets($query);
        }
        require_once __DIR__ . '/../Views/tweet/index.php';
    }
}
