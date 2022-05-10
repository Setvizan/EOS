<?php
require_once 'Database.php';

class AccountRepository
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function findAll(): array
    {
        $this->db->query("SELECT * FROM `USER`");
        return $this->db->resultSet();
    }

    function findUserByEmail($email): array
    {
        $this->db->query("SELECT * FROM `USER` WHERE EMAIL = :email");
        $this->db->bind(':email', $email);
        return $this->db->resultSet();
    }

    function findUserByID($id): array
    {
        $this->db->query("SELECT * FROM `USER` WHERE ID = :id");
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }

    function createUser($email, $password, $firstname, $lastname): bool
    {
        $this->db->query("INSERT INTO USER (`EMAIL`,`PASSWORD`, `FIRST_NAME`, `LAST_NAME`) VALUES (:email, :pass, :firstname, :lastname)");
        $this->db->bind(':email', $email);
        $this->db->bind(':pass', $password);
        $this->db->bind(':firstname', $firstname);
        $this->db->bind(':lastname', $lastname);
        if ($this->db->execute())
            return true;
        return false;
    }

    function deleteUser($id): bool
    {
        $this->db->query("DELETE FROM USER WHERE ID = :id");
        $this->db->bind(':id', $id);
        if ($this->db->execute())
            return true;
        return false;
    }
}
