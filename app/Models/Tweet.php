<?php

class Tweet {
    private $tweet;
    public function __construct() {
        $this->loadTweet();
    }

    private function loadTweet() {
        $this->tweet = "tweet model";
    }
}