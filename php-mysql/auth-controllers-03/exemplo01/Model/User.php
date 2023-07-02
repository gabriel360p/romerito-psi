<?php

class User
{
    protected $conn; //conexão

    public function __construct(PDO $connection) {
        $this->conn = $connection;
    }

    public function save(string $name, string $email, string $password) {
        //gera o hash
        $senha_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(name,email,password) VALUES('".$name."','".$email."','".$senha_hash."')";
        $this->conn->exec($sql);
    }

    public function find (string $email) {
        $query = "SELECT * FROM users where email=:email";
        $sttm = $this->conn->prepare($query);        
        $sttm->execute([':email' => $email]);
        $consulta=$sttm->fetch(PDO::FETCH_ASSOC); 
        return $consulta;
    }
}
