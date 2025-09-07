<?php

class Controller{

    private AlbumsManager $albums;
    private array $albumsList;
    private CommentsManager $comments;
    private array $commentsList;
    
    public function __construct(){
        $this->albums = new AlbumsManager();
        $this->albumsList = $this->albums->getAllAlbums();
        $this->comments = new CommentsManager();
    }
    
    public function getHomePage() : void {        
        $view = new View;
        $view->render(
            "homePage",
            [
                "albumsList" => $this->albumsList,
            ]
        );
    }
    
    public function getAlbumPage() : void {
        $albumId = $_GET["albumId"];
        $album = $this->albums->getOneAlbum($albumId);
        $commentsList = $this->comments->getCommentsForOneAlbum($albumId);

        if (!$album){
            $view = new View;
            $view->render("notFoundPage", ["albumsList" => $this->albumsList]);
        } else {
            $view = new View;
            $view->render(
                "albumPage",
                [
                    "album" => $album,
                    "albumsList" => $this->albumsList,
                    "commentsList" => $commentsList,
                ]
            );
        }
    }
    
    public function getSignInPage() : void {
        $view = new View;
        $view->render(
            "signInPage",
            [
                "albumsList" => $this->albumsList,
            ]
        );
    }
    
    public function getSignUpPage() : void {
        $view = new View;
        $view->render(
            "signUpPage",
            [
                "albumsList" => $this->albumsList,
            ]
        );
    }
    
    public function getForgottenPasswordPage() : void {
        $view = new View;
        $view->render(
            "forgottenPasswordPage",
            [
                "albumsList" => $this->albumsList,
            ]
        );
    }
    
    public function getNotFoundPage() : void {
        $view = new View;
        $view->render(
            "notFoundPage",
            [
                "albumsList" => $this->albumsList,
            ]
        );
    }
}