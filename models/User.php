<?php
class User {
    private int $id;
    private string $userName;
    private string $passwordHash;
    
    /**
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = []){
        if (!empty($data)){
            $this->hydrate($data);
        }
    }
    
    /**
     * @param array<string, mixed> $data
     */
    public function hydrate(array $data) : void {
        foreach($data as $key => $value){
            $method = "set" . str_replace("_", "", ucwords($key, "_"));
            
            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
    
    public function getId() : int {
        return $this->id;
    }
    
    public function setId(int $id) : void {
        $this->id = $id;
    }
    
    public function getUserName() : string {
        return $this->userName;
    }
    
    public function setUserName(string $userName) : void {
        $this->userName = $userName;
    }
    
    public function getPasswordHash() : string {
        return $this->passwordHash;
    }
    
    public function setPasswordHash(string $passwordHash) : void {
        $this->passwordHash = $passwordHash;
    }
}