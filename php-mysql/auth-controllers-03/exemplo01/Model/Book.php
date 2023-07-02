<?php

class Book
{
    protected $conn; //conexão

    public function __construct(PDO $connection) {
        $this->conn = $connection;
    }

    public function save(string $title, string $author) {
        $user = new User(connection());
        $userID = $user->find($_SESSION['user']);
        $sql = "INSERT INTO livros(title,author,user_id) VALUES('".$title."','".$author."','".$userID['id']."')";
        $this->conn->exec($sql);
    }

    public function list() {
        $data = $this->conn->query("SELECT * FROM livros"); 
        return $data;
    }


    public function find (string $title) {
        $query = "SELECT * FROM livros where title=:title";
        $sttm = $this->conn->prepare($query);        
        $sttm->execute([':title' => $title]);
        $consulta=$sttm->fetch(PDO::FETCH_ASSOC); 
        return $consulta;
    }
}
