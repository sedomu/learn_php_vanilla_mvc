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
    
    public function changeUserName(int $userId, string $newUserName) : ?User {
        $sql = "UPDATE users SET user_name = :newUserName WHERE id = :userId";
        $result = $this->db->query($sql, [
            ":newUserName" => $newUserName,
            ":userId" => $userId,
        ]);
        
        if ($result->rowCount() === 0){
            return null;
        }

        $sql = "SELECT * FROM users WHERE id = :userId";
        $result = $this->db->query($sql, [":userId" => $userId]);
        $userDB = $result->fetch();

        return $userDB ? new User($userDB) : null;
    }
    
}