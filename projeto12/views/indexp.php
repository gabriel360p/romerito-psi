<?php
class Produto{
  var $nome;
  var $preco;
  var $descricao;

  function __construct($nome, $preco,$descricao) {
      $this->nome=$nome;
      $this->preco=$preco;
      $this->descricao=$descricao;
  }
}

$produtos[] = $produto1 = new Produto('Banana leite',8,'banana');;
$produtos[]= $produto2 = new Produto('Nescau',12,'Achocolatado em pó');
$produtos[]= $produto3 = new Produto('Pipoca',3,'Pipoca de milho');
$produtos[]= $produto4 = new Produto('Miojo',2,'sla');
$produtos[]= $produto5 = new Produto('Nsei',2000,'nsei nseinseinseinsei');

?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <div class="container text-center">
        <span class="display-4">Gear Market</span>
        <br>
        <span class="h4 border-bottom">Produtos</span>
        </div>
  </header>
  <main>
      
<div class="container">
    <form action='/storec' method='post'>

    <div class="container p-5">

        <?php
        foreach($produtos as $produto){
            echo "
                <div class='border p-4 mb-4'>
                    <input type='checkbox' value='$produto->nome' name='produto[]'>
                    <label> Nome do produto: $produto->nome </label>
                    <label> Preço do produto: $produto->preco </label>
                    <label> Descrição do produto: $produto->descricao  </label>
                </div> 
            "
            ;
        }
        ?>
    </div>  
    <button class="btn btn-primary">Enviar</button>
    </form>
</div>
        
        

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>