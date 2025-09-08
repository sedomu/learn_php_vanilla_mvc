<?php
class CommentsManager{
    private $db;
    
    public function __construct(){
        $this->db = DBManager::getInstance();
    }
    
    public function getCommentsForOneAlbum(int $albumId) : ?array {
        $sql = "
            SELECT 
                comments.id,
                comments.album_id,
                comments.user_id,
                users.user_name,
                comments.comment
            FROM comments 
            INNER JOIN users ON comments.user_id = users.id
            WHERE album_id = :albumId
        ";
        $result = $this->db->query($sql, [":albumId" => $albumId]);

        $commentsList = [];
        
        while ($commentDB = $result->fetch()){
            $comment = new Comment($commentDB);
            $commentsList[] = $comment;
        }
        
        if (empty($commentsList)){
            return null;
        } else {
            return $commentsList;
        }
    }
    
    private function getCommentById(int $commentId) : ?Comment {
        $sql = "
            SELECT 
                comments.id,
                comments.album_id,
                comments.user_id,
                users.user_name,
                comments.comment
            FROM comments 
            INNER JOIN users ON comments.user_id = users.id
            WHERE comments.id = :commentId
        ";
        $result = $this->db->query($sql, [":commentId" => $commentId]);
        $commentDB = $result->fetch();

        return $commentDB ? new Comment($commentDB) : null;
    }
    
    public function createComment(int $albumId, int $userId, string  $comment) : ?Comment {
        $sql = "INSERT INTO comments (album_id, user_id, comment) VALUES (:albumId, :userId, :comment)";
        $result = $this->db->query($sql, [":albumId" => $albumId, ":userId" => $userId, ":comment" => $comment]);
        $lastId = $this->db->lastInsertId();

        return $lastId ? $this->getCommentById($lastId) : null;
    }
}