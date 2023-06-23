<?php
class User{
    protected $conn; //conexão

    public function __construct(SQLite3 $connection){
        //isso aqui é uma injeção de dependência
        //o valor de conn depende de um valor exterior, isso é insejeção de dependência. Nesse caso, o valor que ele depende é a conexão com o banco
        $this->conn=$connection;
    }

    public function findUser($value){
        
        $result = $this->conn->query    ("SELECT * FROM users where id='".$value."'");//pesquisando o usuário no banco de dados
        $data = $result->fetchArray();//efetuando a busca no banco de dados        
        return $data;
     
    }
    
    public function find($email){
        // $query="SELECT * FROM users WHERE email=:email";//email=:email (marcador)

        // //prepara a consulta e gera um obj SQLITE3Statement
        // $sttm = $this->conn->prepare($query);
        
        // //teste 1
        // $sttm->bindValue(':email',$email);//ele funciona como um marcador, ele vai la no email e joga a variavel email para pesquisar no banco (insere o valor dentro do marcador)

        // //executa a pesquisa
        // $result=$sttm->execute();

        // return $data=$result->fetchArray();


        $result = find ("SELECT * FROM users where id='".$_SESSION['user']."'");//pesquisando o usuário no banco de dados
        $data = $result->fetchArray();//efetuando a busca no banco de dados        
        return $data;


    }


    public function save(){
        
    }


    public function delete(){
        
    }


}
