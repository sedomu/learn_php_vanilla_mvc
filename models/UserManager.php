<?php
class UserManager{
    private $db;

    public function __construct()
    {
        $this->db = DBManager::getInstance();
    }
    
    public function checkCredentials(string $userName, string $password) : ?User {
        $sql = "SELECT * FROM users WHERE user_name = :userName";
        $result = $this->db->query($sql, [":userName" => $userName]);
        $userDB = $result->fetch();
        
        if ($userDB && password_verify($password, $userDB["password_hash"])){
            return new User($userDB);
        }
        
        return null;
    }
    
}