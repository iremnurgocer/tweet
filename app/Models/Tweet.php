<?php

class Tweet {
    private $tweet = [];
    public function __construct() {
        $this->loadTweet();
    }


    public function loadTweet() {
        $json = file_get_contents(__DIR__ . '/../../config/database.json');
        $this->tweet = json_decode($json, true)["tweets"];
    }
    public function getAllTweet() {
        return $this->tweet;
    }
}