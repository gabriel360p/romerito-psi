<!doctype html>
<html lang="en">

<head>
  <title>Index</title>
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
        <div class="row text-center">
            <div class="col">
                <span class="display-3 border-bottom">Cadastrar Livros</span> 
            </div>
        </div>

        <div class="container">
            <form action="controller1.php" method="POST">

                <input type="hidden" value="store" name="route">

                <div class="mb-3">
                <label for="" class="form-label">Titulo</label>
                <input type="text"
                    class="form-control" name="title" id="" aria-describedby="helpId" placeholder="Titulo da Música" >
                <small id="helpId" class="form-text text-muted">Titulo da Música</small>
                </div>

                <div class="mb-3">
                <label for="" class="form-label">Autor</label>
                <input type="text"
                    class="form-control" name="author" id="" aria-describedby="helpId" placeholder="Autor da Música">
                <small id="helpId" class="form-text text-muted">Autor da Música</small>
                </div>


                <div class="mb-3">
                <label for="" class="form-label">Ano de Lançamento</label>
                <input type="text"
                    class="form-control" name="yearlaunch" id="" aria-describedby="helpId" placeholder="Ano de Lançamento da Música">
                <small id="helpId" class="form-text text-muted">Ano de Lançamento da Música</small>
                </div>

                <button class="btn btn-primary">Salvar</button>

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