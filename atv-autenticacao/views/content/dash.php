<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="ifrn.png">

    <title>Recanto do Federal </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success mb-4">
        <div class="container-fluid">
          <a class="navbar-brand d-flex justify-content-center" href="#">
            <img src="/Pages/ifrn.png" class="rounded-circle bg-white w-25 ">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Dados dos Cursos</a></li>
                  <li><a class="dropdown-item" href="#">Informação do local</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Sobre </a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/logout">Sair</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="https://portal.ifrn.edu.br">Notícias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="https://portal.ifrn.edu.br/ifrn/tec-da-informacao/lateral/servicos/novo-webmail">Email</a>
              </li>
            </ul>
            <form class="d-flex justify-content-center w-100" role="search">
              <input class="form-control me-2 w-50 h-75 " type="search" placeholder="Pesquise no IFRN" aria-label="Search">
              <button class="btn btn-light rounded btn-sm" type="submit ">Procura</button>
            </form>
            <div class="me-5 d-flex">
                <button class="btn btn-sucess d-flex text-white">
                  <?php echo authName(); ?>
        
                </button>
                <button class="btn btn-light ">  
                  <a href="/" class="text-decoration-none">Voltar</a>
              </button>
            </div>
          </div>
        </div>
      </nav>

      <div class="container w-75 p-3 bg-success rounded">
        <h1 class="d-flex justify-content-center text-white">Seja bem-vindo ao recanto do federal</h1>
        <p class="text-white">Aqui neste site você vai ficar por dentro de todas as novidades dos Cursos do IFRN Campus Caicó, ficando tão bem informado das novidades do campus.</p>
        </div>

        <div class="container p-4">
          <div class="row">
            <span class="display-5">Usuários Salvos</span>
          </div>
          <?php
            $db=connection();

            $query = $db->query("SELECT * FROM user");

            echo "<hr>";
      			while($row = $query->fetchArray()){
              echo "|Id do usuário: ".$row['id']." |Nome do usuário: ".$row['name']." |Email do usuário: ".$row['id'];
              echo "<br>";
              echo "<hr>";
            }
 
          ?>
        </div>
      <p>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html> 