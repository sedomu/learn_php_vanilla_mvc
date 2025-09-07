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
    
    public function getLoginPage() : void {
        $error = "";
        
        // POST
        if ($_SERVER['REQUEST_METHOD'] === "POST"){
            $userName = $_POST["user-name"] ?? "";
            $password = $_POST["password"] ?? "";

            $userName = trim(htmlspecialchars($userName));
            $password = trim($password);

            $userManager = new UserManager();
            $user = $userManager->checkCredentials($userName, $password);
            
            if($user){
                $_SESSION["user"] = [
                    "id" => $user->getId(),
                    "userName" => $user->getUserName(),
                ];

                header("Location: index.php");
            }
        }
        
        // GET
        $view = new View;
        $view->render(
            "loginPage",
            [
                "albumsList" => $this->albumsList,
            ]
        );
    }
    
    public function getLogoutPage() : void {
        session_unset();
        session_destroy();

        header("Location: index.php");
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