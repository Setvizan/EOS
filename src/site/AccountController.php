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
            return $this->accountRepository->findAll();
        }
        public function checkLogin($email, $password) : ?object {
            $user = $this->accountRepository->findUserByEmail($email);
            if($user[0]->PASSWORD == $password) return $user[0];
            return null;
        }

        public function loadUserPage($id) : void {
            $data = $this->getUser($id);
            viewPage("Account", $data);
        }
        
        public function loadLoginPage($data) : void {
            // data is used for errors if existing
            viewPage("Account", $data);
        }
    }

    session_start();
    $rep = new AccountController();

    //Check if login post from forum
    if(isset($_POST["type"]) && $_POST["type"] = "login"){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user = $rep->checkLogin($email, $password);
        $data["ERROR"] = "Invalid Login";
        if($user === null) $rep->loadLoginPage($data);
        $_SESSION["userId"] = $user->ID;
    }

    $rep->loadLoginPage([]);
?>
