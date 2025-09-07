<?php
class UserManager{
    private $db;

    public function __construct()
    {
        $this->db = DBManager::getInstance();
    }
    
    public function getUserById(int $id) : ?User {
        $sql = "SELECT * FROM users WHERE id = :id";
        $result = $this->db->query($sql, [":id" => $id]);
        $userDB = $result->fetch();

        return $userDB ? new User($userDB) : null;
    }
    
    public function getUserByUserName(string $userName) : ?User {
        $sql = "SELECT * FROM users WHERE user_name = :userName";
        $result = $this->db->query($sql, [":userName" => $userName]);
        $userDB = $result->fetch();

        return $userDB ? new User($userDB) : null;
    }
    
    public function changeUserName(int $userId, string $newUserName) : ?User {
        $sql = "UPDATE users SET user_name = :newUserName WHERE id = :userId";
        $result = $this->db->query($sql, [
            ":newUserName" => $newUserName,
            ":userId" => $userId,
        ]);

        $sql = "SELECT * FROM users WHERE id = :userId";
        $result = $this->db->query($sql, [":userId" => $userId]);
        $userDB = $result->fetch();

        return $userDB ? new User($userDB) : null;
    }
    
    public function changePassword(int $userId, string $newPassword) : ?User {
        $sql = "UPDATE users SET password_hash = :newPassword WHERE id = :userId";
        $result = $this->db->query($sql, [
            ":newPassword" => password_hash($newPassword, PASSWORD_DEFAULT),
            ":userId" => $userId,
        ]);

        $sql = "SELECT * FROM users WHERE id = :userId";
        $result = $this->db->query($sql, [":userId" => $userId]);
        $userDB = $result->fetch();
        
        
        return $userDB ? new User($userDB) : null;
    }
    
}