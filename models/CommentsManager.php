<?php
class CommentsManager{
    private $db;
    
    public function __construct(){
        $this->db = DBManager::getInstance();
    }
    
    public function getCommentsForOneAlbum(int $albumId) : array|null {
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
}