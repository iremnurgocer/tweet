<?php

class Tweet {
    private $tweets = [];

    public function __construct() {
        $this->loadTweets();
    }

    public function loadTweets() {
        $json = file_get_contents(__DIR__ . '/../../config/database.json');
        $this->tweets = json_decode($json, true)["tweets"];
    }

    public function getAllTweets() {
        return $this->tweets;
    }

    public function searchTweets($query) {
        $results = [];
        foreach ($this->tweets as $tweet) {
            if ($this->containsQuery($tweet, $query)) {
                $results[] = $tweet;
            }
        }
        return $results;
    }

    private function containsQuery($tweet, $query) {
        $query = strtolower($query);
        if (strpos(strtolower($tweet['content']), $query) !== false ||
            strpos(strtolower($tweet['id']), $query) !== false ||
            strpos(strtolower($tweet['userId']), $query) !== false) {
            return true;
        }
        return false;
    }
}
