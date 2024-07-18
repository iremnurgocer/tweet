<?php

class User {
    private $users = [];
    private $filePath;

    public function __construct() {
        $this->filePath = __DIR__ . '/../../config/database.json';
        $this->loadUsers();
    }

    public function loadUsers() {
        $json = file_get_contents($this->filePath);
        $data = json_decode($json, true);
        $this->users = $data["users"];
        $this->tweets = $data["tweets"];
    }

    public function getAllUsers() {
        return $this->users;
    }

    public function getUserByUsername($username) {
        foreach ($this->users as $user) {
            if ($user['username'] === $username) {
                return $user;
            }
        }
        return null;
    }

    public function addUser($username, $password) {
        $newUser = [
            'id' => count($this->users) + 1,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT) // şifreyi hash'leyerek kaydediyoruz
        ];
        $this->users[] = $newUser;
        $this->saveUsers();
        return $newUser; // Eklenen kullanıcıyı döndür
    }

    private function saveUsers() {
        $data = ['users' => $this->users, 'tweets' => $this->tweets];
        file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT));
    }
}
