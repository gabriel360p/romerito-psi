#Sessões usando php puro.

$uri = parse_url($_SERVER('REQUEST_URI'), PHP_URL_PATH); ->aq ele pega somente o caminho
http://10.145.6.9:8000/color ->ignora isso tudo e pega só /color 


session_status()=== PHP_SESSION_NONE ->verificando se sessao existe;

session_destroy();//desativar sessão
$_SESSION['color'];//variavel global, serve para ver os dados da sessão

#uma maneira de verificar se existe ou não uma sessão iniciada, é verificar se o id da sessão existe através de ifs
if(session_id()==true){//testando para ver se a sessão possuir id ou não
    echo "true";
}else{
    echo "false";
}
