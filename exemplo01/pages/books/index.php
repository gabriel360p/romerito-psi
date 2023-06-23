<!-- PÁGINA PARA LISTAR OS LIVROS -->



<!doctype html>
<html lang="en">

<head>
  <title>Livros</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
        <div class="row">
            <span class="display-5 border-bottom">Livros Salvos no Sistema</span>
        </div>

        <div class="row">
            <div class="col">

                <?php
                    // include __DIR__.'/database.php';//incluindo o arquivo e configurações do banco de dados
                    
                    $sql = "SELECT * FROM books";//escrita sql para pegar todos os livros do banco de dados
                    
                    
                    $connection=connection();//pegando a conexão
                    $livros=$connection->query($sql); //consultando o banco de dados 

                    echo "<hr>";

                    while($row = $livros->fetchArray()){//listando os livros do banco
                        echo "ID: ".$row['id']." -- Título: ".$row['title'];
                        echo "<hr>";
                    }
                ?>
            </div>

        </div>

        <div class="row">

            <div class="col">
                <a class="btn btn-primary" href="/books/create" >Novo livro</a>
            </div>

        </div>
    </div>

  </main>
  <footer>
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