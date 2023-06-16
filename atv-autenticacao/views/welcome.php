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
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Acesso
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/login">Login</a></li>
                  <li><a class="dropdown-item" href="/register">Cadastrar</a></li>
                </ul>
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
                  <?php echo $_SESSION['Nome']; ?>
        
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
          <h3 class="mb-3">Cursos IFRN Campus Caicó.</h3>
        <div class="row mb-3">
          <div class="col d-flex justify-content-center"> <img src="https://i0.wp.com/elitecursos.com.br/wp-content/uploads/2015/10/analiseedesenvdesistemas.jpg?fit=540%2C350&ssl=1" class="w-100"></div>
          <div class="col d-flex justify-content-center"> <img src="https://www.jornalcontabil.com.br/wp-content/uploads/2019/07/textil.jpg"class="w-100" ></div>
          <div class="col d-flex justify-content-center "> <img src="https://blog.maximustecidos.com.br/wp-content/uploads/2020/11/4-dicas-para-conservar-a-maquina-de-costura-1.jpg" class="w-100" ></div>
          <div class="col d-flex justify-content-center"> <img src="https://res.cloudinary.com/practicaldev/image/fetch/s--0Dw98qeg--/c_imagga_scale,f_auto,fl_progressive,h_900,q_auto,w_1600/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/gxxauzyr707eq1w13n5e.jpg" class="w-100"></div>
        </div>
        <div class="row">
          <div class="col fw-bold d-flex justify-content-between">
            <span>Informática</span>  
          <button class="btn btn-success btn-sm"> <a class="text-decoration-none text-white" href="https://portal.ifrn.edu.br/campus/natalcentral/cursos/cursos-tecnicos-integrados/informatica.html#:~:text=Sobre%20o%20curso%3A,Eixo%20tecnológico%3A%20Informação%20e%20Comunicação">Saiba mais</a></button>
          </div>
          <div class="col fw-bold d-flex justify-content-between "> 
            <span>Têxtil</span>
            <button class="btn btn-success btn-sm"> <a class="text-decoration-none text-white" href="https://portal.ifrn.edu.br/ensino/cursos/cursos-tecnicos-de-nivel-medio/tecnico-integrado/tecnico-de-nivel-medio-em-textil/view"> Saiba mais</a></button>
          </div>
          <div class="col fw-bold d-flex justify-content-between"> 
            <span>vestuário</span>
            <button class="btn btn-success btn-sm"> <a class="text-decoration-none text-white" href="https://portal.ifrn.edu.br/ensino/cursos/cursos-tecnicos-de-nivel-medio/tecnico-integrado/tecnico-em-vestuario/view"> Saiba mais</a></button>
          </div>
          <div class="col fw-bold d-flex justify-content-between"> 
            <span>Eletrotécnica</span>
            <button class="btn btn-success  btn-sm "><a class="text-decoration-none text-white" href="https://portal.ifrn.edu.br/campus/natalcentral/cursos/cursos-tecnicos-integrados/eletrotecnica.html#:~:text=O%20curso%20forma%20profissionais%20para,no%20próprio%20negócio%20como%20empreendedor.">Saiba mais</a></button>
          </div>
        </div>
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html> 