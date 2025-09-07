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

            $usersManager = new UsersManager();
            $user = $usersManager->getUserByUserName($userName);
            
            if($user?->verifyPassword($password)){
                $_SESSION["user"] = [
                    "id" => $user->getId(),
                    "userName" => $user->getUserName(),
                ];

                header("Location: index.php?action=profile");
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
        // Init error variables
        $errorUserExists = false;
        $errorEmptyUser = false;
        $errorDifferentPasswords = false;
        $errorEmptyPassword = false;
        $errorEmptyPasswordCheck = false;
        
        // POST
        if ($_SERVER['REQUEST_METHOD'] === "POST"){
            $userName = trim(htmlspecialchars($_POST["user-name"] ?? ""));
            $password = trim($_POST["password"] ?? "");
            $passwordCheck = trim($_POST["password-check"] ?? "");

            $usersManager = new UsersManager();

            $errorUserExists = (bool) $usersManager->getUserByUserName($userName);
            $errorEmptyUser = strlen($userName) === 0;
            $errorDifferentPasswords = $password !== $passwordCheck;
            $errorEmptyPassword = strlen($password) === 0;
            $errorEmptyPasswordCheck = strlen($passwordCheck) === 0;
            $errorCount = $errorUserExists + $errorEmptyUser + $errorDifferentPasswords + $errorEmptyPassword + $errorEmptyPasswordCheck;

            echo $errorCount;
            
            if ($errorCount === 0){
                $createdUser = $usersManager->createUser($userName, $password);
                if ($createdUser){
                    $_SESSION["user"] = [
                        "id" => $createdUser->getId(),
                        "userName" => $createdUser->getUserName(),
                    ];
    
                    header("Location: index.php?action=profile");
                    exit;
                }
            } 
        }
        
        // GET
        $view = new View;
        $view->render(
            "signUpPage",
            [
                "albumsList" => $this->albumsList,
                "errorUserExists" => $errorUserExists,
                "errorEmptyUser" => $errorEmptyUser,
                "errorDifferentPasswords" => $errorDifferentPasswords,
                "errorEmptyPassword" => $errorEmptyPassword,
                "errorEmptyPasswordCheck" => $errorEmptyPasswordCheck
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
            $newUserName = trim($_POST["user-name"] ?? "");
            $newPassword = trim($_POST["password"] ?? "");
            
            $usersManager = new UsersManager();
            $user = $usersManager->getUserById($_SESSION["user"]["id"]);
            
            if ($newUserName !== "" && $newUserName !== $user->getUserName()){
                $userDB = $usersManager->changeUserName($user->getId(), $newUserName);
                
                if ($userDB){
                    $_SESSION["user"]["userName"] = $userDB->getUserName();
                }
            }

            if ($newPassword !== "" && !$user->verifyPassword($newPassword)){
                $userDB = $usersManager->changePassword($user->getId(), $newPassword);
            }
            
            if (isset($_FILES['profile-picture']) && $_FILES['profile-picture']['error'] === UPLOAD_ERR_OK) {
                    $fileTmpPath = $_FILES['profile-picture']['tmp_name'];
                    $info = getimagesize($fileTmpPath);
            
                    if ($info && $info[2] === IMAGETYPE_JPEG) {
                        $destPath = "assets/profiles/profile" . $user->getId() . ".jpg";
                        move_uploaded_file($fileTmpPath, $destPath);
                    }
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