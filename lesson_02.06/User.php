<?php
include "UserInterface.php";

class User implements UserInterface
{
    private $id;
    private $login;
    private $password;
    private $email;

    /**
     * User constructor.
     * @param $id
     * @param $login
     * @param $password
     * @param $email
     */
    public function __construct($id, $login, $password, $email)
    {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getTwiceId()
    {
        return $this->id.$this->id;
    }

    public function save() {
        global $dbh;
        if($this->id > 0) {
            $sql = "UPDATE users SET login = ?, password = ?, email = ? WHERE id = ?";
            $params = array(
                $this->login,
                $this->password,
                $this->email,
                $this->id
            );
        } else {
            $sql = "INSERT INTO users (login, password, email) VALUE (?, ?, ?)";
            $params = array(
                $this->login,
                $this->password,
                $this->email
            );
        }
        $stmt = $dbh->prepare($sql);
        $stmt->execute($params);
        return $stmt->errorCode() == "00000";
    }
}