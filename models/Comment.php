<?php
class Comment{
    private int $id;
    private int $albumId;
    private int $userId;
    private string $userName;
    private string $comment;
    
    /**
     * @param Comment[] $data
     */
    public function __construct(array $data = []) {
        if(!empty($data)){
            $this->hydrate($data);
        }
    }
    
    /**
     * @param Comment[] $data
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
    
    public function getAlbumId() : int {
        return $this->albumId;
    }
    
    public function setAlbumId(int $albumId) : void {
        $this->albumId = $albumId;
    }
    
    public function getUserId() : int {
        return $this->userId;
    }
    
    public function setUserId(int $userId) : void {
        $this->userId = $userId;
    }
    
    public function getUserName() : string {
        return $this->userName;
    }
    
    public function setUserName(string $userName) : void {
        $this->userName = $userName;
    }
    
    public function getComment() : string {
        return $this->comment;
    }
    
    public function setComment(string $comment) : void {
        $this->comment = $comment;
    }
}