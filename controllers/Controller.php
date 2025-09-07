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
            $userName = trim(htmlspecialchars($_POST["user-name"] ?? ""));
            $password = trim($_POST["password"] ?? "");

            $userManager = new UserManager();
            $user = $userManager->getUserByUserName($userName);
            
            if($user?->verifyPassword($password)){
                $_SESSION["user"] = [
                    "id" => $user->getId(),
                    "userName" => $user->getUserName(),
                ];

                header("Location: index.php");
                exit;
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
        exit;
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
    
    public function getProfilePage() : void {
        if (!isset($_SESSION['user']['id'])) {
                header("Location: index.php?action=login");
                exit;
        }
    
        // POST
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            // $profilePicture = $_POST[]
            $newUserName = trim($_POST["user-name"] ?? "");
            $newPassword = trim($_POST["password"] ?? "");
            
            $userManager = new UserManager();
            $user = $userManager->getUserById($_SESSION["user"]["id"]);
            
            if ($newUserName !== "" && $newUserName !== $user->getUserName()){
                $userDB = $userManager->changeUserName($user->getId(), $newUserName);
                
                if ($userDB){
                    $_SESSION["user"]["userName"] = $userDB->getUserName();
                }
            }

            if ($newPassword !== "" && !$user->verifyPassword($newPassword)){
                $userDB = $userManager->changePassword($user->getId(), $newPassword);
            }
        }
        
        // GET
        $view = new View;
        $view->render(
            "profilePage",
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