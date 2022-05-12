<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/src/repository/AccountRepository.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/src/utils/viewer.php";

    class AccountController {
        function __construct() {
            $this->accountRepository = new AccountRepository();
        }

        public function getUsers() : array {
            return $this->accountRepository->findAll();
        }

        public function getUser($id) : array {
            return $this->accountRepository->findUserByID($id);
        }

        public function countUserByEmail($email) : int {
            return $this->accountRepository->countUserByEmail($email);
        }

        public function getUserByEmail($email) : array {
            return $this->accountRepository->findUserByEmail($email);
        }


        public function checkLogin($email, $password) : ?object {
            $user = $this->accountRepository->findUserByEmail($email);
            if($user == null) return null;
            if($user[0]->PASSWORD == hash("sha256", $password)) return $user[0];
            return null;
        }

        public function loadUserPage($id) : void {
            $data = $this->getUser($id);
            viewPage("Account", $data);
        }
        
        public function createUser($email, $firstname, $lastname, $password) : bool {
            return $this->accountRepository->createUser($email, hash("sha256", $password), $firstname, $lastname);
        }

        public function loadLoginPage($data) : void {
            // data is used for errors if existing
            viewPage("Account", $data);
        }

        public function loadRegistrationPage($data) : void {
            // data is used for errors if existing
            viewPage("AccountRegistration", $data);
        }
    }

    session_start();
    $rep = new AccountController();

    if(isset($_GET["type"]) && $_GET["type"] == "logout"){
        session_unset();
        session_destroy();
    }

    //Check if login post from forum
    $loginfail = false;
    if(isset($_POST["type"]) && $_POST["type"] == "login"){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user = $rep->checkLogin($email, $password);
        $data["ERROR"] = "Invalid Login";
        if($user === null) {
            $rep->loadLoginPage($data);
            $loginfail = true;
        }
        $_SESSION["userId"] = $user->ID;
    }
    
    $regist = false;
    if(isset($_POST["type"]) && $_POST["type"] == "register"){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $uExists = $rep->countUserByEmail($email);
        $data["ERROR"] = "Email already exists";
        if($uExists > 0) {
            $rep->loadRegistrationPage($data);
            $regist = true;
        } elseif($rep->createUser($email, $firstname, $lastname, $password)){
            $data["SUCCESS"] = "Registration successful! Try logging in!";
            $rep->loadLoginPage($data);
        }
    }

    if(isset($_SESSION["userId"]) == true){
        $rep->loadUserPage($_SESSION["userId"]);
    } elseif($regist == false && $loginfail == false) {
        $rep->loadLoginPage([]);
    }
    
?>
