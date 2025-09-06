<?php
class AlbumsManager {
    private $db;

    public function __construct()
    {
        $this->db = DBManager::getInstance();
    }

    /**
     * @return Album[]
     */
    public function getAllAlbums(): array
    {
        $sql = "SELECT * FROM albums";
        $result = $this->db->query($sql);

        $albumsList = [];

        while ($albumDB = $result->fetch()) {
            $album = new Album($albumDB);
            $albumsList[] = $album;
        }

        return $albumsList;
    }

    public function getOneAlbum(int $albumId): Album|null
    {
        $sql = "SELECT * FROM albums WHERE id=:id";
        $result = $this->db->query($sql, [":id" => $albumId]);
        $albumDB = $result->fetch();

        if (!$albumDB) {
            return null;
        }

        $album = new Album($albumDB);

        return $album;
    }
}
