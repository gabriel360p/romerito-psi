<?php

class User
{

    protected $conn; //conexão com o banco de dados

    public function __construct(SQLite3 $connection) {
        $this->conn = $connection; 
    }

    public function find ($email) : Array | bool {
        $query = "SELECT * FROM users WHERE email=:email";
        $sttm = $this->conn->prepare($query);
        $sttm->bindValue(":email", $email);
        $result = $sttm->execute();
        return $result->fetchArray();
    }

    public function save (string $name, string $email, string $password, string $type) 
        : SQLite3Result | bool
        {
        $query = "INSERT INTO users ('name', 'email', 'type','password') "
            . "values(:name,:email,:type, :password)";

        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":name", $name);
        $sttm->bindValue(":email", $email);
        $sttm->bindValue(":type", $type);
        $sttm->bindValue(":password", password_hash($password, PASSWORD_ARGON2I));
        $result = $sttm->execute();
        return $result;
    }


    public static function all () {

        $db_conn = self::$conn ?? connection();

        $result = $db_conn->query('SELECT * FROM users');

        $user_list = array();
        while ($user = $result->fetchArray()) {
            array_push($user_list, [
                'name' => $user['name'],
                'email' => $user['email'],
                'type' => $user['type'],
            ]);
        }
        return $user_list;
    }

}
